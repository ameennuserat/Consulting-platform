<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Expert;
class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = ['experience','details'];



    public function expert(){
        return $this->belongsToMany(Expert::class,'expert_id');
    }

}
