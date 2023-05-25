<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_jobs_status extends Model
{
    use HasFactory;

    protected $table = 'master_jobs_statuses';

    protected $guarded = ['id'];

    public function activity() {
        return $this->hasMany(activity::class);
    }
}
