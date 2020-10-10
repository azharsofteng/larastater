<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Moduale;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded =['id'];
    public function moduale()
    {
        return $this->belongsTo(Moduale::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
