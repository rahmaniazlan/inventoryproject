<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $primaryKey = 'id_cust';

    public $timestamps = false;

    public function scopeCustactive() {

		return \DB::table('customer')->where(['status_cust'=>'y'])->get();
	}
}
