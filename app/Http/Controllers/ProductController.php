<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        return view('backend.add_product');
    }

    public function storeProduct(Request $request){

        $input = $request->all();

       $validator = Validator::make($request->all(),[
        'productname' => 'required',
        'productcategory' => 'required',
        'productbrand' => 'required',
        'productimage' => 'required',
        'productdesc' => 'required'
       ]);

       if($validator->fails()){
        return redirect()->back()->withErrors($validator)->withInput();
       }
       else{  
           $product_name = $input['productname'];
           $product_category = $input['productcategory'];
           $product_brand = $input['productbrand'];
           $product_image = $input['productimage'];
           $product_description = $input['productdesc'];

           $product = new product;
           $product->product_name = $product_name;
           $product->product_category = $product_category;
           $product->product_brand = $product_brand;
           $product->product_description = $product_description;
           $product->feature_image = "myimage";
        //    $product->product_image = $product_image;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');


        }
      


    }
  
}
