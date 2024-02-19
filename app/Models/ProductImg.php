<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    use HasFactory;
    protected $table = "product_imgs";

    protected $fillable = [
     'main_id',
     'image',
 
    ];
}
