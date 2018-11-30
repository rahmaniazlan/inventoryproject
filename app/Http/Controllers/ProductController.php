<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use ajax;

use Response;

use App\Product;

class ProductController extends Controller
{
    function index(){
		$data = Product::all();
    	return view('product', compact('data'));
    }

    public function create() {
		//
		return view('createproduct');
	}

	public function store(ProductRequest $request) {
		//	
		$data = new Product();
		$data->code_prod = $request->code_prod;
		$data->name_prod = $request->name_prod;
		$data->desc_prod = $request->desc_prod;
		$data->save();
		$data = Product::all();
		return view('product', compact('data'));
	}

	public function edit($id) {
        // Form Edit Siswa
        $data = Product::where('id_prod', $id)->get();
		return view('editproduct', compact('data'));
	}

	public function update(ProductRequest $request, $id) {
        // Simpan Edit Siswa
        $data = Product::where('id_prod', $id)->first();
        $data->code_prod = $request->code_prod;
		$data->name_prod = $request->name_prod;
		$data->desc_prod = $request->desc_prod;
        $data->save();
		$data = Product::where('id_prod', $id)->get();
		return view('editproduct', compact('data'))->with('alertsuccess', 'Data has been Change!');
	}
	
	public function destroy($id)
    {
        $data = Product::where('id_prod',$id)->first();
        $data->delete();
		$data = Product::all();
		return redirect()->route('product.index');
	}
}
