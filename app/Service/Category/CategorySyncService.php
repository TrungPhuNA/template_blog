<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 2/3/21 .
 * Time: 9:15 AM .
 */

namespace App\Service\Category;

use App\Models\Category;
use App\Models\Ecommerce\SeoProduct;
use App\Service\Seo\RenderUrlSeoSyncService;
use Illuminate\Support\Facades\DB;

class CategorySyncService
{
    protected $category;

    /**
     * @param Category $category
     * khởi tạo sync khi có category
     */
    public static function init(Category $category)
    {
        $that = new self();
        $that->category = $category;
        $that->sync($that->category);
    }

    public function sync($category)
    {
        $category = $category->toArray();
        $category = $this->removeColumn($category);
        $checkCategory = $this->checkExistsCategory();
        if(!$checkCategory){
            $id  = DB::connection('dethi247')->table('categories')->insertGetId($category);
        }else{
            $id  = DB::connection('dethi247')->table('categories')->where('id', $this->category->id)->update($category);
        }

        if($id)
        {
            RenderUrlSeoSyncService::init($this->category->c_slug,SeoProduct::TYPE_CATEGORY, $this->category->id);
        }
    }

    protected function checkExistsCategory()
    {
        return DB::connection('dethi247')->table('categories')->find($this->category->id);
    }

    protected function removeColumn($category)
    {
        unset($category['created_at']);
        unset($category['updated_at']);

        return $category;
    }
}