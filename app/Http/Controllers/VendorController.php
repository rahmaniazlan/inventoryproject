<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\VendorRequest;

use ajax;

use Response;

use App\Vendor;

class VendorController extends Controller
{
	function index(){
		$data = Vendor::all();
    	return view('vendor', compact('data'));
    }

    public function create() {
		//
		return view('createvendor');
	}

	public function store(VendorRequest $request) {
		//	
		$data = new Vendor();
		$data->code_vend = $request->code_vend;
		$data->name_vend = $request->name_vend;
		$data->email_vend = $request->email_vend;
		$data->phone_vend = $request->phone_vend;
		$data->address_vend = $request->address_vend;
		$data->status_vend = $request->status_vend;
		$data->joindate_vend = date("Y-m-d", strtotime($request->joindate_vend));
		$data->save();
		$data = Vendor::all();
		return view('vendor', compact('data'));
	}

	public function edit($id) {
        // Form Edit Siswa
        $data = Vendor::where('id_vend', $id)->get();
		return view('editvendor', compact('data'));
	}

	public function update(VendorRequest $request, $id) {
        // Simpan Edit Siswa
        $data = Vendor::where('id_vend', $id)->first();
        $data->code_vend = $request->code_vend;
		$data->name_vend = $request->name_vend;
		$data->email_vend = $request->email_vend;
		$data->phone_vend = $request->phone_vend;
		$data->address_vend = $request->address_vend;
		$data->status_vend = $request->status_vend;
		$data->joindate_vend = date("Y-m-d", strtotime($request->joindate_vend));
        $data->save();
		$data = Vendor::where('id_vend', $id)->get();
		return view('editvendor', compact('data'))->with('alertsuccess', 'Data has been Change!');
	}
	
	public function destroy($id)
    {
        $data = Vendor::where('id_vend',$id)->first();
        $data->delete();
		$data = Vendor::all();
		return redirect()->route('vendor.index');
	}
}
