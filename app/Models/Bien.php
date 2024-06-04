<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'categorie', 'image', 'description', 'adresse', 'statut', 'date_ajout'];

    public function __construct(array $attributes = []) // Constructeur pour plus assignement
    {
        parent::__construct($attributes);
    }

    public function save(array $options = []) // Override default save method (optional)
    {
        parent::save($options);
    }
}
