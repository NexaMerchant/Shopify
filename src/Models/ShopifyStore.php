<?php
namespace NexaMerchant\Shopify\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use NexaMerchant\Shopify\Contracts\ShopifyStore as ShopifyStoreContract;


class ShopifyStore extends Model implements ShopifyStoreContract
{
    use HasFactory;

    /**
     * Castable.
     *
     * @var array
     */

    /**
     * Add fillable properties
     *
     * @var array
     */
    protected $fillable = [
        'shopify_store_id',
        'shopify_app_host_name',
        'shopify_admin_access_token',
        'shopify_client_id',
        'shopify_client_secret',
        'status',
    ];

    /**
     * Get the shopify store products
     *
     * @return string
     */
    public function products() {
        return $this->hasMany(ShopifyProduct::class);
    }

    /**
     * Get the shopify store orders
     *
     * @return string
     */
    public function orders() {
        return $this->hasMany(ShopifyOrder::class);
    }

    /**
     * Get the shopify store customers
     *
     * @return string
     */
    public function customers() {
        return $this->hasMany(ShopifyCustomer::class);
    }
}
