<?php

namespace App\Models;

/**
 * Node Model
 */

use App\Utils\Tools;

class Depository extends Model
{
    protected $connection = 'default';
    protected $table = 'depository';

    protected $casts = [
        'node_speedlimit' => 'float',
        'traffic_rate' => 'float',
        'mu_only' => 'int',
        'sort' => 'int',
    ];
}
