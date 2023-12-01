<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlesModel extends Model
{
    use HasFactory;
    // Définition de la relation avec les catégories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
