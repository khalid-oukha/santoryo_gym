<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $table = "offers";
    protected $fillable = ['name','description','price','duration','image'];

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
