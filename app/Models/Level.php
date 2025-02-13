<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public $timestamps = false;

    public function topic(){
        return $this->hasMany(Topic::class);
    }

    public function exam(){
        return $this->hasMany(Exam::class);
    }
}
