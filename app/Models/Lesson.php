<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'coach_id',
        'category_id',
        'duration',
        'price',
        'start_at',
        'status',
        'description',
        'image',
        'capacity',

    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'lesson_user');
    }
}
