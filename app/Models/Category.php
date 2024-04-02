<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table="categories";
    protected $fillable = [
        "name",
        "description",
        "slug",
        "image",
    ] ;

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
