<?php

namespace App\Models;

use App\Models\User;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'upvote',
        'downvote'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function feedback(){
        return $this->hasMany(Feedback::class,'product_id');
    }
}
