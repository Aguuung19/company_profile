<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    protected $guarded = ['id'];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function master_jobs() {
        return $this->belongsTo(master_jobs::class);
    }

    public function master_jobs_status() {
        return $this->brlongsTo(master_jobs_status::class);
    }
}
