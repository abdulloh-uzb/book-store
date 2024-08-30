<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Author extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "birth_year", "death_year", "description", "country"];

    protected static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->slug = Str::slug($model->first_name.$model->last_name);
        });
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


}
