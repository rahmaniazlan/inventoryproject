<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';

    protected $primaryKey = 'id_prod';

    public $timestamps = false;
}
