<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function project_objectives()
    {
        return $this->hasMany(Project_objective::class);
    }
    public function project_images()
    {
        return $this->hasMany(Project_images::class);
    }
}
