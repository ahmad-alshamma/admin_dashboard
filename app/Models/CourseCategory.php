<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CourseCategory extends Model
{
    use HasFactory , SoftDeletes;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function courses(){
        return $this->hasMany(Course::class , 'category_id' , 'category_id');
    }
}
