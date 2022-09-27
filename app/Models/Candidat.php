<?php

namespace App\Models;

use App\Models\Famille;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function familles()
    {
        return $this->hasMany(Famille::class);
    }
}
