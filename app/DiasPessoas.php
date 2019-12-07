<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoresPadroes
 * @property integer $id
 * @property integer $people_id
 * @property boolean $checked
 * @property Carbon $day
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @package App
 */
class DiasPessoas extends Model
{


    protected $table = 'day_people';

    protected $casts = [
        "checked" => "boolean",
    ];

    /**
     * Get the event ambev data records associated with the Regional Type
     */
    public function people()
    {
        return $this->hasOne('Modules\Ambev\Entities\EventAmbevData', 'event_regional_type_id');
    }

}
