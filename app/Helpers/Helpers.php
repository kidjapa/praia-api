<?php


namespace App\Helpers;


use App\ValoresPadroes;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Integer;

class Helpers
{

    /**
     * Return default values
     * @return ValoresPadroes
     */
    public static function getArrayDefaultValues(): ValoresPadroes{
        return ValoresPadroes::all()->first();
    }

    /**
     * Return default qty. days
     * @return int
     */
    public static function getDefaultQtyDays(): int{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        return $d->qty_days;
    }

    /**
     * Return default initial date
     * @return Carbon
     */
    public static function getDefaultInitialDate(): Carbon{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        return $d->initial_date;
    }

    /**
     * Return default daily value
     * @return float
     */
    public static function getDefaultDailyValue(): float{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        return $d->daily_value;
    }

    /**
     * Set default qty. days
     * @param Integer $qty_days
     * @return boolean
     */
    public static function setDefaultQtyDays(Integer $qty_days): bool{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        $d->qty_days = $qty_days;
        return $d->save();
    }

    /**
     * Set default initial date
     * @param Carbon $initial_date
     * @return boolean
     */
    public static function setDefaultInitialDate(Carbon $initial_date): bool{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        $d->initial_date = $initial_date;
        return $d->save();
    }

    /**
     * Set default daily value
     * @param float $daily_value
     * @return boolean
     */
    public static function setDefaultDailyValue(float $daily_value): bool{
        /** @var ValoresPadroes $d */
        $d = ValoresPadroes::all()->first();
        $d->daily_value = $daily_value;
        return $d->save();
    }

}
