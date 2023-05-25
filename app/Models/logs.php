<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;

    protected $table = 'logs';

    protected $guarded = ['id'];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
