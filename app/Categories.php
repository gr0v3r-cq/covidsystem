<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'slug', 'title', 'description', 'name', 'description_categories', 'url_image', 'views','order','cover_page', 'state'
    ];
}
