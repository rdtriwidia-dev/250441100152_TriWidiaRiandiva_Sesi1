<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use Hasfactory;

    protected $table = 'layanans';
    protected $fillable = ['kode_layanan','nama_layanan','jenis', 'tarif_per_satuan' ];
}
