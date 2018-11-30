<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PurchaseRequest;

use ajax;

use Response;

use App\Transaction;

use App\Vendor;

use App\Customer;

use App\Product;

class PurchaseController extends Controller
{
    function index(){
		$data = Transaction::Purchaseall();
    	return view('purchase', compact('data'));
    }

    public function create() {
		//
    	$prod = Product::all();
		$vend = Vendor::vendactive();
		return view('createpurchase', compact('prod','vend'));
	}

	public function store(PurchaseRequest $request) {
		//	
		$data = new Transaction();
		$data->type_trans = "in";
		$data->code_trans = $request->code_trans;
		$data->name_trans = $request->name_trans;
		$data->prod_trans = $request->prod_trans;
		$data->vend_trans = $request->vend_trans;
		$data->qty_trans = $request->qty_trans;
		$data->desc_trans = $request->desc_trans;
		$data->date_trans = date("Y-m-d", strtotime($request->date_trans));
		$data->save();
		$data = Transaction::Purchaseall();
		return view('purchase', compact('data'));
	}

	public function show($id) {
    	// Detail Siswa
    	$data = \DB::table('transaction')->join('vendor', 'transaction.vend_trans', '=', 'vendor.id_vend')->join('product', 'transaction.prod_trans', '=', 'product.id_prod')->where(['transaction.id_trans'=>$id])->get();
    	return view('show', compact('data'));
	}
}
