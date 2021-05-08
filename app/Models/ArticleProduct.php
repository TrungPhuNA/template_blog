<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleProduct extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $table = 'articles_products';
}
