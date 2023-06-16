<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_menu extends Model
{
    use HasFactory;

    protected $table = 'master_menus';

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];

    public function categories() {
        return $this->hasMany(master_categories::class, 'menu_id' , 'id');
    }
}
