<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ecommerce\Product;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getProductCategory($id, Request $request)
    {
        $category = Category::findOrFail($id);

        $arrCategoryID = json_decode($category->c_child_all, true) ?? [$id];

        $products = Product::with('category:id,c_name,c_slug','keywords')
            ->where([
            'pro_status'      => 2,
        ])->whereIn('pro_category_id',$arrCategoryID)
            ->orderByDesc('id')
            ->select('id', 'pro_name', 'pro_slug', 'pro_category_id')
            // ->toBase()
            ->paginate(30);

        RenderMetaSeo::init([
            'title'       => $category->c_title_seo ?? '',
            'description' => $category->c_description_seo ?? '',
            'avatar'      => $category->c_avatar ? pare_url_file($category->c_avatar) : '/images/social.png',
            'robots'      => 'INDEX,FOLLOW'
        ]);

        $viewData = [
            'category' => $category,
            'products' => $products
        ];
        return view('pages.category.index', $viewData);
    }
}
