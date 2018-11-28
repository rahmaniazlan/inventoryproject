<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SendRequest;

use ajax;

use Response;

use App\Customer;

class CustomerController extends Controller
{
    function index(){
		$data = Customer::all();
    	return view('customer', compact('data'));
    }

    public function create() {
		//
		return view('createcustomer');
	}

	public function store(SendRequest $request) {
		//	
		$data = new Customer();
		$data->code_cust = $request->code_cust;
		$data->name_cust = $request->name_cust;
		$data->email_cust = $request->email_cust;
		$data->phone_cust = $request->phone_cust;
		$data->address_cust = $request->address_cust;
		$data->status_cust = $request->status_cust;
		$data->joindate_cust = date("Y-m-d", strtotime($request->joindate_cust));
		$data->save();
		$data = Customer::all();
		return view('customer', compact('data'));
	}

	public function edit($id) {
        // Form Edit Siswa
        $data = Customer::where('id_cust', $id)->get();
		return view('editcustomer', compact('data'));
	}

	public function update(SendRequest $request, $id) {
        // Simpan Edit Siswa
        $data = Customer::where('id_cust', $id)->first();
        $data->code_cust = $request->code_cust;
		$data->name_cust = $request->name_cust;
		$data->email_cust = $request->email_cust;
		$data->phone_cust = $request->phone_cust;
		$data->address_cust = $request->address_cust;
		$data->status_cust = $request->status_cust;
		$data->joindate_cust = date("Y-m-d", strtotime($request->joindate_cust));
        $data->save();
		$data = Customer::where('id_cust', $id)->get();
		return view('editcustomer', compact('data'))->with('alertsuccess', 'Data has been Change!');
	}
	
	public function destroy($id)
    {
        $data = Customer::where('id_cust',$id)->first();
        $data->delete();
		$data = Customer::all();
		return redirect()->route('customer.index');
	}
}
