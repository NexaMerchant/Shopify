<?php
namespace NexaMerchant\Shopify\Docs\V1\Shopify\Controllers\Products;

class ProductsController {
    /**
     * @OA\Get(
     *      path="/products",
     *      operationId="getProductsList",
     *      tags={"Shopify"},
     *      summary="Get list of products",
     *      description="Returns list of products",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Products")
     *       ),
     *       @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *       )
     * )
     */
    public function getProductsList() {
    }

    /**
     * @OA\Get(
     *      path="/products/{id}",
     *      operationId="getProductById",
     *      tags={"Shopify"},
     *      summary="Get product information",
     *      description="Returns product data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Product id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *       @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *       )
     * )
     */
    public function getProductById() {
    }

    /**
     * @OA\Post(
     *      path="/products",
     *      operationId="createProduct",
     *      tags={"Shopify"},
     *      summary="Create new product",
     *      description="Create new product",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/Product")
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Product")
     *       ),
     *       @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *       )
     * )
     */
    public function createProduct() {
    }
}