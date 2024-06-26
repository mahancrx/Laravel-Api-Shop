<?php

namespace App\Http\Repositories;

use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductRepository
{
    public static function getAmazingProducts()
    {
        $products = Product::query()
            ->where('is_special', true)
            ->orderBy('discount', 'DESC')
            ->take(6)
            ->get();

        return ProductResource::collection($products);
    }

    public static function get6MostSellerProducts()
    {
        $products = Product::query()
            ->orderBy('sold', 'DESC')
            ->take(6)
            ->get();
        return ProductResource::collection($products);

    }

    public static function getMostSellerProducts()
    {
        $products = Product::query()
            ->orderBy('sold', 'DESC')
            ->paginate(12);
        return ProductResource::collection($products);

    }

    public static function get6NewestProducts()
    {
        $products = Product::query()
            ->orderBy('created_at', 'DESC')
            ->take(6)
            ->get();
        return ProductResource::collection($products);

    }

    public static function getMostViewedProducts(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->orderBy('review', 'DESC')
            ->take(6)
            ->get();
        return ProductResource::collection($products);

    }

    public static function getNewestProducts(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
        return ProductResource::collection($products);

    }

    public static function getCheapestProducts(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->orderBy('price', 'ASC')
            ->paginate(12);
        return ProductResource::collection($products);
    }

    public static function getExpensiveProducts(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->orderBy('price', 'DESC')
            ->paginate(12);
        return ProductResource::collection($products);
    }


    public static function getProductsByCategory($id): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->where('category_id', $id)
            ->paginate(12);
        return ProductResource::collection($products);
    }

    public static function getProductsByBrand($id): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $products = Product::query()
            ->where('brand_id', $id)
            ->paginate(12);
        return ProductResource::collection($products);
    }

    public static function searchProduct($search)
    {
        $product = Product::query()
            ->where('title','like','%'.$search.'%')
            ->orWhere('title_en','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%')
            ->paginate(12);

        return ProductResource::collection($product);
    }
}
