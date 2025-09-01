<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = ['name','image'] ;

    public function parentCategory() {

        return $this->belongsTo(Category::class,'parent_id');

    }
}
