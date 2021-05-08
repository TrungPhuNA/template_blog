<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce\Product;
use App\Models\Image;
use App\Models\Location;
use App\Models\User;
use App\Models\Vote;
use App\Models\VoteDetail;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Modules\Guest\Entities\Buses;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($name = $request->k) {
            $products = Product::with('category:id,c_name,c_slug', 'keywords')
                ->where([
                    'pro_status' => 2,
                ])->where('pro_name', 'like', '%' . $name . '%')
                ->orderByDesc('id')
                ->select('id', 'pro_name', 'pro_slug', 'pro_category_id')
                ->paginate(30);

            $viewData = [
                'products' => $products,
                'name'     => $name,
                'query'    => $request->query()
            ];
            return view('pages.search.index', $viewData);
        }

        return redirect()->to('/');
    }
}
