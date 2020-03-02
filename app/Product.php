<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='table_product';
    protected $fillable=['nama','logo','status'];

    const STATUS_ACTIVE = 1;
    const STATUS_NON_ACTIVE = 0;
}
