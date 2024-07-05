<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','image','description'];

    public function category()
    {
        return $this->belongsToMany(Category::class,'category_menu');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
