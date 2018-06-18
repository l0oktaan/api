<?php

namespace App\Model;
use App\Model\Prouct;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
