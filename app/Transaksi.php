<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='table_transaksi';
    protected $fillable=['id_pelanggan','id_product','harga_jual','harga_beli','status','deskripsi','nominal'];

    const STATUS_LUNAS = 1;
    const STATUS_BON = 0;
}
