<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public function kategori() {
        return $this->belongsTo(kategori::class);
    }
    public function transaksi() {
        return $this->hasOne(transaksi::class);
    }



    protected $guarded = ['id'];
}
