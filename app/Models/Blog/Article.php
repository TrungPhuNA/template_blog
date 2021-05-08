<?php

namespace App\Models\Blog;

use App\Models\ArticleProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    const HOT = 1;

    protected $guarded = [''];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'a_menu_id');
    }

    public function products()
    {
        return $this->belongsToMany(ArticleProduct::class,'articles_products','ap_product_id','ap_article_id');
    }

    public function keywords()
    {
        return $this->belongsToMany(Keyword::class,'articles_keywords','ak_keyword_id','ak_article_id');
    }
}
