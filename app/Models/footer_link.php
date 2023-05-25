<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer_link extends Model
{
    use HasFactory;

    protected $table = 'footer_links';

    protected $guarded = ['id'];
}
