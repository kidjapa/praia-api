<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ValoresPadroes
 * @property float $daily_value Descrição do arquivo
 * @property integer $qty_days Caminho do Arquivo
 * @property Carbon $initial_date Nome original do arquivo
 * @package App
 */
class ValoresPadroes extends Model
{

    protected $table = 'default_values';

}
