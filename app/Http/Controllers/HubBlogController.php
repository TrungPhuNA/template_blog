<?php

namespace App\Http\Controllers;

use App\Models\BLog\SeoBlog;
use Illuminate\Http\Request;

class HubBlogController extends Controller
{
    public function render(Request $request, $slug)
    {
        $slugMd5 = md5($slug);
        $urlSeo = SeoBlog::where('sb_md5', $slugMd5)->first();
        if($urlSeo) {
            $type = $urlSeo->sb_type;
            switch ($type)
            {
                case SeoBlog::TYPE_MENU:
                    return (new CategoryController())->getProductCategory($urlSeo->sp_id, $request);

                case SeoBlog::TYPE_ARTICLE:
                    return (new ProductController())->getProductDetail($urlSeo->sp_id, $request);

                case SeoBlog::TYPE_KEYWORD:
                    return (new KeywordController())->getProductByKeyword($urlSeo->sp_id, $request);

            }
        }

        return  abort(404);
    }
}
