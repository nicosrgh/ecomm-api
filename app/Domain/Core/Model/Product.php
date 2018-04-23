<?php

namespace App\Domain\Core\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'brand', 'price', 'discount', 'color', 'image_url'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
