<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){
        $id='';
        $productId = $request->product_id;
        $name = $request->product_name;
        $product_content = $request->product_content;
        $product_link = $request->product_link;
        $price = $request->product_price;
        $product_quantity = $request->product_quantity;
        $product_note = $request->product_note;
        $product_total = $request->product_total;
        $address = $request->address;
        $warehouse_id = $request->warehouse_id;
        $product_image_link = $request->product_image_link;

        $get_image = $request->file('product_image');
        $data = array();
        $data['id'] = '';
        $data['product_id'] = $request->product_name;
        $data['name'] = $request->product_name;
        $data['product_content'] = $request->product_content;
        $data['product_link'] = $request->product_link;
        $data['price'] = $request->product_price;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_note'] = $request->product_note;
        $data['product_total'] = $request->product_total;
        $data['address'] = $request->address;
        $data['warehouse_id'] = $request->warehouse_id;
        $data['product_image_link'] = $request->product_image_link;

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            Cart::add($data);
            return Redirect::to('/show-cart');
        }
        $data['product_image'] = '';
        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart(){
        return view('users.completeorder');
    }
    
}
