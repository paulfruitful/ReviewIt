<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function edit(Product $product, Request $request){
          if($product->id()==auth()->id()){

          }else{
            return abort('404');
          }
    }
}
