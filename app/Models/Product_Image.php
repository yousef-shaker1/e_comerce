<?php

namespace App\Models;

use App\Models\clothingproduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_Image extends Model
{
    use HasFactory;
    protected $table = 'product_images';
    protected $fillable = ['product_id', 'image'];

    public function product()
    {
        return $this->belongsTo(clothingproduct::class);
    }
}
