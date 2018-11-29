<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';

    protected $primaryKey = 'id_vend';

    public $timestamps = false;

    public function scopeVendactive() {

		return \DB::table('vendor')->where(['status_vend'=>'y'])->get();
	}
}
