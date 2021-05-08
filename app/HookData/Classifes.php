<?php


namespace App\HookData;


use Illuminate\Support\Facades\DB;

class Classifes
{
    public static function getLists()
    {
        return DB::connection('tailieu247')->table('classifes')->pluck('c_name','id')->toArray() ?? [];
    }
}