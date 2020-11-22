<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";

    public function productclassification()
    {
        return $this->belongsTo(Productclassification::class , 'classfcation_id');
    }


}
