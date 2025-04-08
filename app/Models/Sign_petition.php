<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign_petition extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'id', 'petition_id', 'user_id','meno','priezvisko','email', 'ulica_cislo', 'mesto_obec', 'psc','stat','meno_zastupcu','priezvisko_zastupcu', 'sedemnast_aviac', 'pravidla_pouzivania','anonym','spracovanie_udajov','email_organizatorovi', 'nazov_prav_osoba','sidlo_prav_osoba','	create_date'
    // ];

    public function petition()
    {
        return $this->belongsTo(Petition::class);
    }


}
