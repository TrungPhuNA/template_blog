<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\Keyword;
use App\Models\Blog\Menu;
use App\Models\Ecommerce\Product;
use App\Models\Location;
use App\Models\Route;
use App\Models\User;
use App\Service\Content\RenderPageContent;
use App\Service\Seo\RenderMetaSeo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('get.youtube.index');
    }
}
