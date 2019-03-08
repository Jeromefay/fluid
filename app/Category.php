<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'url_img_event'
    ];

    public function events() {
        return $this->hasMany(Event::class);
    }
}
