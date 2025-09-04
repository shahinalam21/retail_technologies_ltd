<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{

      protected $fillable =[
        'discription',
        'rating',
        'customer_id',
        'product_id'
    ];

    public function profile(){
        return $this->belongsTo(CustomerProfile::class,'customer_id');
    }

}
