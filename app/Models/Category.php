<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name"];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            $model->slug = Str::slug($model->name);
        });

    }

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
