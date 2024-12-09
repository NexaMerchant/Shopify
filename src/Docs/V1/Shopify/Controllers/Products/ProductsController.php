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
     * @OA\Get(
     *      path="/shopify/products/{id}/custom-configurations",
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
     *      path="/shopify/products/{id}/custom-configurations",
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
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/ProductCustomConfiguration")
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

    /**
     * @OA\Get(
     *      path="/shopify/products/{id}/sync-comments",
     *      operationId="sync comments",
     *      tags={"Shopify"},
     *      summary="Sync shopify comments data",
     *      description="Sync shopify comments data",
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
    public function syncComments()
    {
    }

    /**
     * @OA\Get(
     *      path="/shopify/products/{id}/clean-cache",
     *      operationId="cleanCache",
     *      tags={"Shopify"},
     *      summary="Clean cache",
     *      description="Clean cache",
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
    public function cleanCache() {}

    /**
     * @OA\Get(
     *      path="/shopify/products/{id}/sync",
     *      operationId="sync",
     *      tags={"Shopify"},
     *      summary="Sync shopify data",
     *      description="Sync shopify data",
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
    public function sync() {}
}