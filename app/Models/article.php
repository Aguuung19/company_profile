<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $guarded = ['id'];

    public function master_categories() {
        return $this->belongsTo(master_categories::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
