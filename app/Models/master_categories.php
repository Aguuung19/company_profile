<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_categories extends Model
{
    use HasFactory;

    protected $table = 'master_categories';

    protected $fillable = [
        'name',
        'slug',
        'menu_id',
        'status'
    ];

    public function master_menu() {
        return $this->belongsTo(master_menu::class, 'menu_id' , 'id');
    }

    public function article() {
        return $this->hasMany(article::class);
    }

    public function services() {
        return $this->hasMany(services::class);
    }

    public function documents() {
        return $this->hasMany(documents::class);
    }
}


