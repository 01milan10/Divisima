<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function products()
    {
        return view('frontend.product.product');
    }

    public function showProductsForm(){
        $data['category_names']= Category::where('parent_id','>',0)->get();
        return view('backend.product.product',$data);
    }

    public function addProducts(Request $request){
        $this->validate($request,[
           'product_name'=> 'required',
           'seller_name'=> 'required',
           'category_id'=> 'required',
        ]);

        $c_id = $request->get('category_id');
        $c_name=Category::where('category_id',$c_id)->value('category_name');

        Product::create([
            'product_name'=>$request->get('product_name'),
            'product_seller'=>$request->get('seller_name'),
            'category_id'=>$c_id,
            'categories_name'=>$c_name,
        ]);

        return redirect('/products/form');
    }
}
