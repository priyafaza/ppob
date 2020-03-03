<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table ='log';
    protected $fillable = ['id_pelanggan','tagihan','detail','status'];

    const STATUS_LUNAS = 1;
    const STATUS_BON = 0;
}
