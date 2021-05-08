<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ecommerce\Product;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductDetail($id, Request $request)
    {
        $product  = Product::findOrFail($id);
        $category = Category::where('id', $product->pro_category_id)->first();

        $productRelate = Product::with('category:id,c_name,c_slug', 'keywords')
            ->where('pro_status', '2')
            ->where('pro_category_id', $category->id)
            ->orderByDesc('id')
            ->select('id', 'pro_name', 'pro_slug', 'pro_category_id')
            ->paginate(30);

        RenderMetaSeo::init([
            'title'       => $product->pro_title_seo ?? '',
            'description' => $product->pro_description_seo ?? '',
            'avatar'      => ($product->pro_avatar) ? pare_url_file($product->pro_avatar) : '/images/social.png',
            'robots'      => 'INDEX,FOLLOW'
//            'robots'      => $product->seo ?? ''
        ]);

        $viewData = [
            'product'       => $product,
            'category'      => $category,
            'productRelate' => $productRelate
        ];
        return view('pages.product.index', $viewData);
    }
}
