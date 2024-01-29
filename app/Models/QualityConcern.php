<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class QualityConcern extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'tt_quality_concerns';

    protected $guarded = ['id'];
}
