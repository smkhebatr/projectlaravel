<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    // kita masukkan tabel yg digunakan
    protected $table='items';
    // kolom-kolom yg diizinkan untuk diisi lewat forum
    protected $fillable = [
        'code',
        'item_name',
        'category',
        'stok',
        'condition',
        'room_location'
    ];

} 
