<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_jobs extends Model
{
    use HasFactory;

    protected $table = 'master_jobs';

    protected $guarded = ['id'];

    public function activity() {
        return $this->hasMany(activity::class);
    }
}
