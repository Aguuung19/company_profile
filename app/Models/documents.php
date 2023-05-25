<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $guarded = ['id'];

    public function master_categories() {
        return $this->belongsTo(master_categories::class);
    }
}
