<?php

namespace App\Models;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Offer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "offers";
    protected $fillable = ['title','description','price','months_valid','image'];

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
