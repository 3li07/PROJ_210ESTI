<?php

namespace App\Models;

use App\Models\L1Model;
use App\Models\L2Model;
use App\Models\L3Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function l1()
    {
        return $this->hasMany(L1Model::class);
    }
    public function l2()
    {
        return $this->hasMany(L2Model::class);
    }
    public function l3()
    {
        return $this->hasMany(L3Model::class);
    }
    
}
