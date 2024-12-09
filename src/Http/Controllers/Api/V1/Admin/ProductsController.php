<?php

namespace NexaMerchant\Shopify\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use NexaMerchant\Shopify\Repositories\ShopifyProductRepository;
use NexaMerchant\Shopify\Resource\ShopifyProductResource;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redis;

class ProductsController extends ShopifyController
{
    private $codeKeys = [
        'title' => '',
        'title_activity' => '',
        'activity_time' => '', // actiovity time
        'activity_title' => '', // activity title
    ];

    public function repository()
    {
        return ShopifyProductRepository::class;
    }

    public function resource()
    {
        return ShopifyProductResource::class;
    }

    /**
     * 
     * store a resource
     * 
     * @param \Illuminate\Http\Request $request
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        
    }

    /**
     * 
     * get a resource
     * 
     * @param int $id
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function getResource($id)
    {
        $product = $this->getRepositoryInstance()->findOrFail($id);

        return response()->json([
            'data' => $product
        ]);

    }

    /**
     * 
     * update a resource
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * 
     * sync products from shopify to nexamerchant
     * 
     * @param int $id
     * 
     * @return \Illuminate\Http\Response
     * 
     * @throws \Exception
     * 
     */
    public function sync($id) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(!$product) {
            throw new \Exception($id.' Product not found');
        }

        $syncing = Cache::get("sync_".$id);
        if(!empty($syncing)) {
            //echo "product is syncing, please wait a moment\r\n";
            return response()->json([
                "status" => "success",
                "message" => trans("shopify::shopify.syncing")
            ],442);
        };

        Cache::put("sync_".$id, 1, 600);

        $options = $product->options;
        $LocalOptions = \Nicelizhi\Shopify\Helpers\Utils::createOptions($options);

        $version = $LocalOptions['version'];

        Cache::put("onebuy_".$id, $version);

        // two attr
        if($version=='v1') {
            //echo config("app.url")."/onebuy/".$id."\r\n";
            Artisan::queue("shopify:product:getv4", ["--prod_id"=> $id])->onConnection('redis')->onQueue('shopify-products');
            return response()->json([
                "status" => "success",
                "message" => trans("shopify::shopify.syncing")
            ]);
        }

        // one attr
        if($version=='v2') {
            //echo config("app.url")."/onebuy/v2/".$id."\r\n";
            Artisan::queue("shopify:product:getv2", ["--prod_id"=> $id])->onConnection('redis')->onQueue('shopify-products');
            return response()->json([
                "status" => "success",
                "message" => trans("shopify::shopify.syncing")
            ]);
        }

        // zero attr
        if($version=='v3') {
            //Artisan::call("shopify:product:getv3", ["--prod_id"=> $product_id]);
            //echo config("app.url")."/onebuy/v3/".$id."\r\n";
            Artisan::queue("shopify:product:getv3", ["--prod_id"=> $id])->onConnection('redis')->onQueue('shopify-products');
            
            return response()->json([
                "status" => "success",
                "message" => trans("shopify::shopify.syncing")
            ]);
            
        }

        return response()->json([
            "message" => trans("shopify::shopify.syncing")
        ],404);


    }

    // clear cache
    public function cleanCache($id) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(!$product) {
            throw new \Exception($id.' Product not found');
        }

        if(is_null($product)) {
            //echo "not found it, you don't clean it cache";
            return response()->json([
                "message" => trans("shopify::shopify.not_found")
            ],404);
        }
        \Nicelizhi\Shopify\Helpers\Utils::clearCache($product->id, $id);

        return response()->json([
            "code" => \NexaMerchant\Apps\Enums\HttpStatus::OK,
            "message"=> trans("shopify::shopify.clean_cache_success")
        ]);
    }

    /**
     * 
     * Get Sell Points
     * 
     * 
     */

    public function sellPoints($id) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(!$product) {
            throw new \Exception($id.' Product not found');
        }

        $redis = Redis::connection('default');

        $sell_points_key = "sell_points_".$id;

        $sell_points = $redis->hgetall($sell_points_key);
        if(count($sell_points)==0) {
            for($i=1;$i<=5;$i++) {
                $redis->hset($sell_points_key, $i, "");
            }
        }
        $sell_points = $redis->hgetall($sell_points_key);
        ksort($sell_points);

        return response()->json([
            "data" => $sell_points
        ]);
    }




    /**
     * 
     * saveSellPoint
     * 
     * 
     */
    public function saveSellPoint($id, Request $request) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(!$product) {
            throw new \Exception($id.' Product not found');
        }

        $redis = Redis::connection('default');

        $sellPoints = $request->input('sell_points');

        $sell_points_key = "sell_points_".$id;

        $sell_points = $request->input('sell_points');
        foreach($sell_points as $key=>$value) {
            $redis->hset($sell_points_key, $key, $value);
        }
        
        \Nicelizhi\Shopify\Helpers\Utils::clearCache($product->id, $id);

        return response()->json([
            "code" => \NexaMerchant\Apps\Enums\HttpStatus::OK,
            "message" => "success"
        ]);
    }

    // Get CustomConfigurations
    public function CustomConfigurations($id) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(!$product) {
            throw new \Exception($id.' Product not found');
        }

        $checkoutItems = \Nicelizhi\Shopify\Helpers\Utils::getAllCheckoutVersion();

        $redis = Redis::connection('default');

        $custom_configurations_key = "custom_configurations_".$id;

        $checkoutList = [];
        foreach($checkoutItems as $key=>$item) {

            // foreach codekeys and get date from redis

            foreach($this->codeKeys as $kk=>$value) {
                $cachek_key = "checkout_".$item."_".$id;
                //echo $cachek_key;
                //echo $kk."\r\n";
                $cacheData = $redis->get($cachek_key);
                if(empty($cacheData)) {
                    $cacheData = "";
                }else{
                    $cacheData = json_decode($cacheData,true);
                }
                //var_dump($cacheData);
                if(isset($cacheData[$kk])) {
                    $checkoutList[$key][$kk] = $cacheData[$kk];
                }else{
                    $checkoutList[$key][$kk] = "";
                }
                //$checkoutList[$key][$kk] = $cacheData;
            }

        } 

        return response()->json([
            "data" => $checkoutList
        ]);

        
    }

    // Save CustomConfigurations
    public function saveCustomConfigurations($id, Request $request) {
        $product = $this->getRepositoryInstance()->findOrFail($id);
        if(is_null($product)) {
            return "please import products first";
        }

        $redis = Redis::connection('default');
        
        $checkoutItems = \Nicelizhi\Shopify\Helpers\Utils::getAllCheckoutVersion();

        $checkoutItems = $request->input('checkoutItems');

        //var_dump($checkoutItems);

        foreach($checkoutItems as $key=>$value) {
            $new_key = str_replace("checkoutItems[","",$key);
            //var_dump($value, $key, $new_key);exit;

            $cachek_key = "checkout_".$new_key."_".$id;
            
            $redis->set($cachek_key, json_encode($value));

        }

        //exit;
        
        \Nicelizhi\Shopify\Helpers\Utils::clearCache($product->id, $id);

        return response()->json([
            'product_id' => $id,
            'message' => "success"
        ]);

    }
}
