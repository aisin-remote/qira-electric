<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CostumerProblem extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'tt_costumerproblem';
}
