<?php

namespace App\Http\Controllers;

use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


session_start();
class ProductController extends Controller
{

    public function add_product(){

    }
    public function save_product(Request $request){

        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_content'] = $request->product_content;
        $data['product_link'] = $request->product_link;
        $data['product_price'] = $request->product_price;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_note'] = $request->product_note;
        $data['product_total'] = $request->product_total;
        $data['address'] = $request->address;
        $data['warehouse_id'] = $request->warehouse_id;
        $data['product_image_link'] = $request->product_image_link;

        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('orders');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm thành công');
        return Redirect::to('orders');
    }
    public function all_warehouse(){
        $all_warehouse = DB::table('tbl_warehouse')->join('users','users.warehouse','=','tbl_warehouse.id')->get();

    }
    public function orders(){
        return view('users.orders');
    }
}
