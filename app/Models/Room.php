<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
