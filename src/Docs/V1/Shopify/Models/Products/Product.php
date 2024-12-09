<?php
namespace NexaMerchant\Shopify\Docs\V1\Shopify\Models\Products;

/**
 * @OA\Schema(
 *     title="Product",
 *     description="Product model",
 * )
 */
class Product
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *     title="Shopify Store ID",
     *     description="Shopify store ID",
     *     example=1
     * )
     *
     * @var int
     */
    private $shopify_store_id;

    /**
     * @OA\Property(
     *     title="Product ID",
     *     description="Product ID",
     *     example=1
     * )
     *
     * @var int
     */
    private $product_id;

    /**
     * @OA\Property(
     *     title="Title",
     *     description="Product title",
     *     example="Product 1"
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     title="Product Type",
     *     description="Product type",
     *     example="Product 1 type"
     * )
     *
     * @var string
     */
    private $product_type;

    /**
     * @OA\Property(
     *     title="Body Html",
     *     description="Product Body Html",
     *     example="Product 1 description"
     * )
     *
     * @var string
     */
    private $body_html;

    /**
     * @OA\Property(
     *     title="Vendor",
     *     description="Product vendor",
     *     example="Vendor 1"
     * )
     *
     * @var string
     */
    private $vendor;

    /**
     * @OA\Property(
     *     title="Handle",
     *     description="Product handle",
     *     example="product-1"
     * )
     *
     * @var string
     */
    private $handle;

    /**
     * @OA\Property(
     *     title="Published At",
     *     description="Product published at",
     *     example="2021-01-01 00:00:00"
     * )
     *
     * @var string
     */
    private $published_at;

    /**
     * @OA\Property(
     *     title="Template Suffix",
     *     description="Product template suffix",
     *     example="product"
     * )
     *
     * @var string
     */
    private $template_suffix;

    /**
     * @OA\Property(
     *     title="Published Scope",
     *     description="Product published scope",
     *     example="web"
     * )
     *
     * @var string
     */
    private $published_scope;

    /**
     * @OA\Property(
     *     title="Tags",
     *     description="Product tags",
     *     example="tag1, tag2, tag3"
     * )
     *
     * @var string
     */
    private $tags;

    /**
     * @OA\Property(
     *     title="Status",
     *     description="Product status",
     *     example="active"
     * )
     *
     * @var string
     */
    private $status;

    /**
     * @OA\Property(
     *     title="Is Feed",
     *     description="Product is feed",
     *     example=true
     * )
     *
     * @var boolean
     */
    private $is_feed;

    /**
     * @OA\Property(
     *     title="admin_graphql_api_id",
     *     description="Product admin graphql api id",
     *     example=1.0
     * )
     *
     * @var float
     */
    private $admin_graphql_api_id;

    /**
     * @OA\Property(
     *     title="Variants",
     *     description="Product variants",
     *     example="[variant1, variant2, variant3]"
     * )
     *
     * @var string
     */
    private $variants;

    /**
     * @OA\Property(
     *     title="Options",
     *     description="Product options",
     *     example="[option1, option2, option3]"
     * )
     *
     * @var string
     */
    private $options;

    /**
     * @OA\Property(
     *     title="Image",
     *     description="Product image",
     *     example="product1.jpg"
     * )
     *
     * @var string
     */
    private $image;
}