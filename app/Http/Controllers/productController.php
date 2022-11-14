<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
     return back()->with('click','clicker');
    }
    public function downvote(Product $product){
      $product->downvote+=1;
      $product->save();
      return back()->with('click','clicker');
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
      if($product->user_id==auth()->id()){

      $form_data=$request->validate([
        'title'=>'required',
        'description'=>'required'
      ]);

      
      $product->update($form_data);
    
      return redirect('/product/'.$product->id)->with('success','Product Successfully Edited');
  }else{
    return abort('403');
  }
}


    public function delete(Product $product){
      if($product->user_id==auth()->id()){

       $product->delete();
       return redirect('/user/'.auth()->id())->with('success','Product Deleted Successfully');
    }else{
        return redirect('403');
    }
    }
  public function show(Product $product){
    return view('product.show',[
      'product'=>$product
    ]);
  }
  public function feedback(Request $request, Product $product){
    
    $form_data=$request->validate([
      'name'=>'required',
      'title'=>'required',
      'feedback'=>'required'
    ]);
    $form_data["upvote"]=0;
      $form_data["downvote"]=0;
      $form_data["product_id"]=$product->id;
      Feedback::create($form_data);

      return back()->with('success','feedback successfully sent');
  }
  }