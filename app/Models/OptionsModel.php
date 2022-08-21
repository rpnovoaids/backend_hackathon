<?php

namespace App\Models;

use Carbon\Carbon;

class OptionsModel
{
    /**
     * @param $value
     * @return String|null
     */
    public static function getId($value): String | null
    {
        return is_array($value) ? $value['id'] : $value;
    }

    /**
     * @param $value
     * @return String|null
     */
    public static function toUppercase($value): String | null
    {
        return !empty($value) ? mb_strtoupper(trim($value)) : null;
    }

    /**
     * @param $value
     * @return String|null
     */
    public static function toTrim($value): String | null
    {
        return !empty($value) ? trim($value) : null;
    }

    /**
     * @param $value
     * @return Carbon|null
     */
    public static function toDate($value): Carbon | null
    {
        return !empty($value) ? Carbon::parse($value) : null;
    }
}
