<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce\SeoProduct;
use App\Models\Education\SeoEdutcation;
use Illuminate\Http\Request;

class HubDataController extends Controller
{
    public function render(Request $request, $slug)
    {
        $slugMd5 = md5($slug);
        $urlSeo = SeoProduct::where('sp_md5', $slugMd5)->first();
        if($urlSeo) {
            $type = $urlSeo->sp_type;
            switch ($type)
            {
                case SeoProduct::TYPE_CATEGORY:
                    return (new CategoryController())->getProductCategory($urlSeo->sp_id, $request);

                case SeoProduct::TYPE_PRODUCT:
                    return (new ProductController())->getProductDetail($urlSeo->sp_id, $request);

                case SeoProduct::TYPE_KEYWORD:
                    return (new KeywordController())->getProductByKeyword($urlSeo->sp_id, $request);

            }
        }

        return  abort(404);
    }
}
