<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
    //protected $table = 'petitions';

    public function sign_petitions()
    {
        return $this->hasMany(Sign_petition::class);
    }

}
