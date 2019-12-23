<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function categories()
    {
        return view('frontend.category.category');
    }

    public function showCategoriesForm(){
        $data['parents']=Category::where('parent_id',0)->get();
        return view('backend.category.category',$data);
    }

    public function addCategories(Request $request){
        $this->validate($request,[
           'category_name'=>'required',
        ]);

        if ($request->get('parent_id')=='No Parent'){
            $p_id = 0;
            $p_name = "No Parent";
        }
        else{
            $p_id=$request->get('parent_id');
            $p_name = Category::where('category_id',$p_id)->value('category_name');
        }
        Category::create([
           'category_name'=>$request->get('category_name'),
            'parent_id'=>$p_id,
            'parent_name'=>$p_name,
        ]);

        return redirect('/categories/form');
    }
}
