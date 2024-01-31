<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'penjualan',
        'beban_administrasi',
        'beban_pemasaran',
        'beban_lainnya',
        'pendapatan_lain',
        'total',
        'total_pajak',
    ];
}
