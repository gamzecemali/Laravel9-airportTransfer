<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one to many
    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

    #One To Many Inverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    #One To Many
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
