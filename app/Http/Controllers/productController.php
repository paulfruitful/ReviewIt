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
          if($product->user_id==auth()->id()){

      return view('product.edit',["product"=>$product]);
          }else{
            return abort('404');
          }
    }

    public function upvote(Product $product){
     $product->upvote+=1;
     $product->save();
     return back();
    }


    public function store(Request $request){
      $form_data=$request->validate([
        'title'=>'required',
        'description'=>'required',
        'user_id'=>'required'
      ]);

      $form_data["upvote"]=0;
      $form_data["downvote"]=0;
      $form_data["author"]=auth()->user()->name;
      Product::create(
        $form_data
      );

      return redirect('/user/'.auth()->id())->with('success','Product Successfully Created');
    }
    public function update(Product $product, Request $request){
      $form_data=$request->validate([
        'title'=>'required',
        'description'=>'required'
      ]);

      
      $product->update($form_data);

      return redirect('/product/'.$product->id)->with('success','Product Successfully Edited');
    }

  }