<?php


namespace App\Http\Services;


use Carbon\Carbon;

class Helper
{
    protected static $file_ext = '.odt';

    /**
     * @param string $num
     * @return string
     */
    public static function correlative(string $num = '')
    {
        $dec = '';
        switch ( strlen($num) ) {
            case 0:
                $dec = '001';
                break;
            case 1:
                $dec = '00';
                break;
            case 2:
                $dec = '0';
                break;
            default:
                break;
        }
        return $dec.''.$num;
    }

    /**
     * @return string
     */
    public static function fileExtension()
    {
        return self::$file_ext;
    }

    /*public function dateInLetters($date)
    {
        $months = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre');
    }*/

    /**
     * @param $date
     * @return string
     */
    public static function dateFormat($date)
    {
        return Carbon::parse($date)->isoFormat('DD \d\e MMMM \d\e YYYY');
    }

    /**
     * @param $date
     * @return string
     */
    public static function dateFormatFull($date)
    {
        return Carbon::parse($date)->isoFormat('DD \d\e MMMM \d\e\l \a\ñ\o YYYY');
    }

    /**
     * @param $date
     * @return string
     */
    public static function simpleDateFormat($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }

    /**
     * @param $date
     * @return string
     */
    public static function hourFormat($date)
    {
        return Carbon::parse($date)->format('H:i');
    }

    /**
     * @param $date
     * @return string
     */
    public static function dateFormatInLetters($date)
    {
        $date = Carbon::parse($date);
        $day = mb_strtolower(trim(\NumerosEnLetras::convertir($date->day)));
        $dayS = $date->day > 1 ? 'a los '.$day.' días' : 'al primer día';
        $month = $date->isoFormat('MMMM');
        $year = mb_strtolower(trim(\NumerosEnLetras::convertir($date->year)));
        return $dayS.' del mes de '.$month.' del año '.$year;
    }

    /**
     * @param $date
     * @return string
     */
    public static function dateFormatCustomLetter($date, $day = true, $month = true, $year = true)
    {
        $date = Carbon::parse($date);
        $day = mb_strtolower(trim(\NumerosEnLetras::convertir($date->day)));
        $dayS = $date->day > 1 ? 'a los '.$day.' días' : 'al primer día';
        $month = $date->isoFormat('MMMM');
        $year = mb_strtolower(trim(\NumerosEnLetras::convertir($date->year)));
        return $dayS.' del mes de '.$month.' del año '.$year;
    }

    /**
     * @param $value
     * @return string
     */
    public static function formatUcwords($value)
    {
        return ucwords(mb_strtolower(trim($value)));
    }

    /**
     * @param $value
     * @return string
     */
    public static function formatUcwordsNames($value)
    {
        $connectors = array('a', 'de', 'del', 'e', 'el', 'la', 'las', 'los', 'o', 'tu', 'tus', 'u', 'y', 'SN', 'S/N');
        $connDir = array('sn', 's/n', 's.n.');
        $connMayus = array('Barrio');
        $array = explode(' ', ucwords(mb_strtolower(trim($value))));
        $text = '';
        foreach ($array as $row)
        {
            foreach ($connectors as $item) {
                if ( strcasecmp($row, $item) == 0 ) $row = mb_strtolower($row);
            }
            foreach ($connDir as $item) {
                if ( strcasecmp($row, $item) == 0 ) $row = mb_strtoupper($row);
            }
            foreach ($connMayus as $item) {
                if ( strcasecmp($row, $item) == 0 ) $row = ucwords(mb_strtolower($row));
            }
            $text = $text.' '.$row;
        }
        return $text;
    }

    /**
     * @param $value
     * @return string
     */
    public static function formatUcfirst($value)
    {
        return ucfirst(mb_strtolower(trim($value)));
    }
}
