<?php
namespace NexaMerchant\Shopify\Docs\V1\Shopify\Models\Products;

/**
 * @OA\Schema(
 *     title="ProductCustomConfiguration",
 *     description="Product custom configuration",
 *     required={"id", "name"}
 * )
 */
class ProductCustomConfiguration {
    /**
     * @OA\Property(
     *     title="checkoutItems",
     *     description="Product checkout items configuration",
     *     format="string",
     *     example="[]"
     * )
     *
     * @var string
     */
    private $checkoutItems;

    /**
     * @OA\Property(
     *     title="sellPoints",
     *     description="Product sell points configuration",
     *     format="string",
     *     example="[]"
     * 
     * )
     *
     * @var string
     */
    private $sell_points;

    /**
     * @OA\Property(
     *     title="pcBanner",
     *     description="Product PC banner configuration",
     *     format="string",
     * )
     *
     * @var string
     */
    private $pc_banner;

    /**
     * @OA\Property(
     *     title="mobile_bg",
     *     description="Product mobile banner configuration",
     *     format="string",
     * )
     *
     * @var string
     */
    private $mobile_bg;

    /**
     * @OA\Property(
     *     title="product_size",
     *     description="Product images configuration",
     *     format="string",
     * )
     *
     * @var string
     */
    private $product_size;
}