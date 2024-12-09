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
     *     title="Name",
     *     description="Product name",
     *     example="Product 1"
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     title="Description",
     *     description="Product description",
     *     example="Product 1 description"
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     title="Price",
     *     description="Product price",
     *     example=100.00
     * )
     *
     * @var float
     */
    private $price;

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