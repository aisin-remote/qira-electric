<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use League\CommonMark\Node\Block\Document;

class Problem extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'tm_problem';

   
}
