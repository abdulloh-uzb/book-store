<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;



class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["title", "description", "price", "published_year", "quantity", "category_id", "user_id", "author_id", "format_id", "language_id"];

    protected static function boot(){
        parent::boot();

        static::creating(function ($model){
            $model->slug = Str::slug($model->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getavailability()
    {
        return $this->quantity ? "mavjud" : "mavjud emas";
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function format()
    {
        return $this->belongsTo(Format::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
