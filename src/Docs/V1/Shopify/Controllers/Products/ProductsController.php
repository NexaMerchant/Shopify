<?php
namespace NexaMerchant\Shopify\Docs\V1\Shopify\Controllers\Products;

class ProductsController {
    /**
     * @OA\Get(
     *      path="/shopify/products",
     *      operationId="getProductsList",
     *      tags={"Shopify"},
     *      summary="Get list of products",
     *      description="Returns list of products",
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
    public function getProductsList() {
    }

    /**
     * @OA\Get(
     *      path="/shopify/products/{id}",
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
     *      path="/shopify/products",
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

    /**
     * @OA\Put(
     *      path="/shopify/products/{id}",
     *      operationId="updateProduct",
     *      tags={"Shopify"},
     *      summary="Update existing product",
     *      description="Update an existing product",
     *      @OA\Parameter(
     *          name="id",
     *          description="Product id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/Product")
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
    public function CustomConfigurations() {
    }

    /**
     * @OA\Post(
     *      path="/shopify/products/{id}",
     *      operationId="saveCustomConfigurations",
     *      tags={"Shopify"},
     *      summary="Save customer configuration for product",
     *      description="Save customer configuration for product",
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
     *          response=204,
     *          description="Successful operation"
     *       ),
     *       @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *       )
     * )
     */
    public function saveCustomConfigurations() {
    }
}