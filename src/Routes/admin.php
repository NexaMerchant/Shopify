<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Shopify\Http\Controllers\Api\V1\Admin\ProductsController;

Route::group([
    'prefix'     => 'api/v1/admin',
    'middleware' => ['sanctum.locale','assign_request_id'],
], function () {

    Route::controller(ProductsController::class)->prefix('shopify/products')->group(function () {
        Route::get('', 'allResources');

        Route::post('', 'store');

        Route::get('{id}', 'getResource');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');

        Route::get('{id}/sync', 'sync'); // sync shopify data

        Route::get('{id}/sync-comments', 'syncComments'); // sync shopify product comments data

        Route::get('{id}/clean-cache', 'cleanCache'); // clean cache

        // Route::get('{id}/ad-images', 'adImages'); // ad images

        // Route::post('{id}/ad-images', 'saveAdImage'); // save ad image

        // Route::get('{id}/sell-points', 'sellPoints'); // sell points

        // Route::post('{id}/sell-points', 'saveSellPoint'); // save sell point

        Route::get('{id}/custom-configurations', 'CustomConfigurations'); // custom configurations

        Route::post('{id}/custom-configurations', 'saveCustomConfigurations'); // save custom configurations


    });
    

});