<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use SoftDeletes;
class PhuongTien extends Model
{
    protected $dates = ['deleted_at'];
    protected $table ='phuongtien';
}
