<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;

    protected $table = 'product_galleries';
    protected $guarded = ['id'];
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
