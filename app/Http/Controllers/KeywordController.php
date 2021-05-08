<?php

namespace App\Http\Controllers;

use App\Models\Blog\Keyword;
use App\Models\Ecommerce\Product;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function getProductByKeyword($id, Request $request)
    {
        $keyword = Keyword::find($id);

        $products = Product::with('category:id,c_name,c_slug')
            ->whereHas('keywords', function ($query) use ($id) {
                $query->where('pk_keyword_id', $id);
            })
            ->where('pro_status', '2')
            ->orderByDesc('id')
            ->select('id', 'pro_name', 'pro_slug', 'pro_category_id')
            ->toBase()
            ->paginate(30);

        RenderMetaSeo::init([
            'title'       => $keyword->k_title_seo ?? '',
            'description' => $keyword->k_description_seo ?? '',
            'avatar'      => isset($keyword->k_avatar) ? pare_url_file($keyword->k_avatar) : '/images/social.png',
            'robots'      => 'INDEX,FOLLOW'
        ]);
        $viewData = [
            'keyword'  => $keyword,
            'products' => $products
        ];

        return view('pages.keyword.index', $viewData);
    }

}
