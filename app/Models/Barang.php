<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];
    protected $with = ['room', 'template_barang'];

    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function template_barang()
    {
        return $this->belongsTo(TemplateBarang::class);
    }

    // Relasi dengan template_barang
    public function templateBarang()
    {
        return $this->belongsTo(TemplateBarang::class);
    }
}
