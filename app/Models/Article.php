<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'img',
        'user_id', // Aggiunto il campo user_id per la relazione con l'utente
    ];
    public function user()
{
    return $this->belongsTo(User::class); // Questo metodo indica che l'articolo appartiene all'utente
}
}