<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'coaches';
    protected $fillable = [
        "cin",
        "id",
        "specialization",
        "description",
        "status",
        "gender",
        "image"
    ];

    public function user(){
        return $this->belongsTo(User::class,'id');
    }
}
