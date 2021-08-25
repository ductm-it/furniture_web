<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ShoppingCartController extends Controller
{

    public function index() {
        $shopping = \Cart::content();
        return view('frontend.pages.shopping.index', compact('shopping'));
    }


    public function add($id){
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');
        else
        \Cart::add([
            'id'        => $product->id,
            'name'      => $product->pro_name,
            'qty'       => 1,
            'price'     => $product->pro_price,
            'weight'    => 550,
            'options'   => [
                'sale'  => $product->pro_sale,
                'image' =>$product->pro_avatar
                ]
            ]);
        return redirect()->back();
    }

    public function delete($rowId){
        \Cart::remove($rowId);
        return redirect()->back();
    }
}
