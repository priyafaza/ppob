<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table='table_pelanggan';
    protected $fillable=['nama','foto','no_hp','alamat','username','status'];

    const STASTUS_ACTIVE = 1;
    const STATUS_NON_ACTIVE = 0;
}
