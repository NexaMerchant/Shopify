<?php

namespace NexaMerchant\Shopify\Repositories;

use Illuminate\Support\Collection;
use NexaMerchant\Shopify\Contracts\ShopifyProduct as ShopifyProductContract;
use NexaMerchant\Shopify\Models\ShopifyProduct;
use NexaMerchant\Shopify\Models\ShopifyProductProxy;
use Webkul\Core\Eloquent\Repository;

class ShopifyProductRepository extends Repository
{
    /**
     * @var array
     */
    protected $filterAttributes = ['id', 'shopify_product_id', 'shopify_store_id', 'title', 'body_html', 'vendor', 'product_type', 'created_at', 'updated_at'];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ShopifyProduct::class;
    }

    /**
     * @param array $data
     * @return ShopifyProductContract
     */
    public function create(array $data): ShopifyProductContract
    {
        return $this->model->create($data);
    }

    /**
     * @param int $id
     * @return ShopifyProductContract
     */
    public function findOneBy(array $data): ShopifyProductContract
    {
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * @return Collection
     */
    public function findBy(array $data): Collection
    {
        return $this->model->where($data)->get();
    }

    /**
     * @param array $data
     * @param int $id
     * @return ShopifyProductContract
     */
    public function update(array $data, $id): ShopifyProductContract
    {
        $product = $this->model->find($id);
        $product->update($data);

        return $product;
    }
}
