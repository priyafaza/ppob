<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='table_product';
    protected $fillable=['nama','logo'];
}
