<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'feedback',
        'name',
        'upvote',
        'downvote',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
