<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 2/3/21 .
 * Time: 9:38 AM .
 */

namespace App\Service\Seo;

use App\Models\Ecommerce\SeoProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RenderUrlSeoSyncService
{
    const PREFIX_CATEGORY = '-c';
    const PREFIX_PRODUCT  = '-pro';
    const PREFIX_KEYWORD  = '-k';

    const TYPE_CATEGORY = 2;
    const TYPE_PRODUCT  = 3;
    const TYPE_KEYWORD  = 1;

    public static function init($slug, $type, $id)
    {
        try {
            $that = new self();
            switch ($type) {
                case self::TYPE_CATEGORY:
                    $prefix = self::PREFIX_CATEGORY;
                    break;

                case self::TYPE_PRODUCT:
                    $prefix = self::PREFIX_PRODUCT;
                    break;

                case self::TYPE_KEYWORD:
                    $prefix = self::PREFIX_KEYWORD;
                    break;
            }
            $slug = Str::slug($slug . $prefix);

            $slugMd5 = md5($slug);
            $check   = $that->checkUrl($slugMd5);
            if ($check) {
                DB::connection('dethi247')->table('seo_products')->insert([
                    'sp_md5'     => $slugMd5,
                    'sp_slug'    => $slug,
                    'sp_type'    => $type,
                    'sp_id'      => $id,
                    'created_at' => Carbon::now()
                ]);
            }
        } catch (\Exception $exception) {
            Log::error("[RenderUrlSeoProductService init :]" . $exception->getMessage());
        }
    }

    public static function deleteUrlSeo($type, $id)
    {
        try {

            if($type == SeoProduct::TYPE_CATEGORY)
            {
                DB::connection('dethi247')->table('categories')->where([
                    'id'   => $id,
                ])->delete();
            }elseif ($type == SeoProduct::TYPE_PRODUCT)
            {
                DB::connection('dethi247')->table('products')->where([
                    'id'   => $id,
                ])->delete();
            }


            DB::connection('dethi247')->table('seo_products')->where([
                'sp_id'   => $id,
                'sp_type' => $type
            ])->delete();
        } catch (\Exception $exception) {
            Log::error("[deleteUrlSeo init :]" . $exception->getMessage());
        }
    }

    protected function checkUrl($md5Slug)
    {
        $seo = DB::connection('dethi247')->table('seo_products')->where([
            'sp_md5' => $md5Slug,
        ])->first();

        if ($seo) return false;
        return true;
    }
}