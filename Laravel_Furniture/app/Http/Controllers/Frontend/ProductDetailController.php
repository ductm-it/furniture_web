<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function getProductDetail(){
        // $products = Product::paginate(12);

        // $categories = Category::paginate(12);

        // $viewData = [
        //     'categories' => $categories,
        //     'products' => $products
        // ];
        return view('frontend.pages.product_detail.index');
    }
}
