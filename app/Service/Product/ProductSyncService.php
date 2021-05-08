<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 2/3/21 .
 * Time: 10:25 AM .
 */

namespace App\Service\Product;

use App\Models\Ecommerce\Product;
use App\Models\Ecommerce\SeoProduct;
use App\Service\Seo\RenderUrlSeoSyncService;
use Illuminate\Support\Facades\DB;

class ProductSyncService
{
    protected $product;

    public static function init(Product $product)
    {
        $that          = new self();
        $that->product = $product;
        $that->sync($that->product);
    }

    public function sync($product)
    {
        $product       = $product->toArray();
        $product       = $this->removeColumn($product);
        $checkProduct = $this->checkExistsCategory();
        if (!$checkProduct) {
            $id = DB::connection('dethi247')->table('products')->insertGetId($product);
        } else {
            $id = DB::connection('dethi247')->table('products')->where('id', $this->product->id)->update($product);
        }

        if ($id) {
            RenderUrlSeoSyncService::init($this->product->pro_slug, SeoProduct::TYPE_PRODUCT, $this->product->id);
        }
    }

    protected function checkExistsCategory()
    {
        return DB::connection('dethi247')->table('products')->find($this->product->id);
    }

    protected function removeColumn($product)
    {
        unset($product['created_at']);
        unset($product['updated_at']);

        return $product;
    }
}