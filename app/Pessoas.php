<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoresPadroes
 * @property integer $id
 * @property string $nome
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @package App
 */
class Pessoas extends Model
{
    protected $table = 'peoples';


}
