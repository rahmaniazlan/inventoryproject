<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transaction';

    protected $primaryKey = 'id_trans';

    public $timestamps = false;

    public function scopePurchaseall() {

		return \DB::table('transaction')->join('vendor', 'transaction.vend_trans', '=', 'vendor.id_vend')->join('product', 'transaction.prod_trans', '=', 'product.id_prod')->where(['transaction.type_trans'=>'in'])->get();
	}
}
