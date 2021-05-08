<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/3/21 .
 * Time: 11:12 PM .
 */

namespace App\Helpers;


class ConfigAuthUnisharp
{
    public function userField()
    {
        return \Auth::guard('admins')->user()->id;
    }
}