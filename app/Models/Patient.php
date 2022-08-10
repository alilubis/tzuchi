<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_seri', 'location', 'sickness', 'name', 'id_card', 'place_of_birth', 
        'date_of_birth', 'age', 'gender', 'address', 'domicile', 'phone', 'family_name', 
        'family_phone', 'vaccination'
    ];
}
