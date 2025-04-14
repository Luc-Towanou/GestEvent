<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisateurProfile extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'nom_entreprise', 'descrption', 'logo'];

    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    // public function events()
    // {
    //     return $this->hasMany(Event::class);
    // }

    public function souscription()
    {
        return $this->hasOne(Souscription::class);
    }
}
