<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Moduale extends Model
{
        protected $guarded =['id'];
        public function permissions(){
            return $this->hasMany(Permission::class);
        }
}
