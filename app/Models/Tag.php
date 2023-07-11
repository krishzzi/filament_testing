<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\Tag as BaseTag;

class Tag extends BaseTag
{
    use HasFactory;
}
