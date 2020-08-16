<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class CanHo extends Model implements AuthenticatableContract
{
    
    Use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='canho';
    protected $fillable = [
        'name','mat_khau',
       ];
    use Authenticatable;
}
