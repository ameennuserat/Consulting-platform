<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $fillable = ['rate','expert_id'];

    public function expert(){
        return $this->belongsToMany(Expert::class,'expert_id');
    }
}
