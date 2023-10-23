<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image'];

    // Define the image path
    public function getImagePathAttribute()
    {
        return asset('images/' . $this->image);
    }
}
