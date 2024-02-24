<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['item_no', 'name', 'heading', 'parent_id', 'description', 'full_description', 'image', 'image_title', 
    'page_title', 'slug', 'status'];

}
