<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_role extends Model
{
    use HasFactory;

    protected $table = 'master_roles';

    protected $guarded = ['id'];

    public function users() {
        return $this->hasMany(User::class);
    }
}
