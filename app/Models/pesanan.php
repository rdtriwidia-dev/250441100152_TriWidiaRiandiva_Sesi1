<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = 'pesanans';
    protected $fillable = ['layanan_id','nama_pelanggan','tanggal_masuk', 'jumlah', 'total_biaya', 'status'];
}
