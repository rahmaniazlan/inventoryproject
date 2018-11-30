@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Purchase Order</div>
        	<a href="{{asset('/purchase/create')}}"><span class="btn btn-default pull-right"> New Purchase Order </span></a>
    		<div class="clearfix"></div>
    	</div>

        <div class="panel-body">

        	<div class="table-responsive">
				<table class="table">
					<thead>
					  <tr>
					    <th>No.</th>
					    <th>Code</th>
					    <th>Name</th>
						<th>Product</th>
						<th>Vendor</th>
						<th>Qty</th>
						<th>Date</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					  @php
					    $no = 1;
					  @endphp
					  @foreach($data as $items)
					  <tr>
					    <td>{{ $no++ }}</td>
					    <td>{{ $items->code_trans }}</td>
					    <td>{{ $items->name_trans }}</td>
						<td>{{ $items->name_prod }}</td>
						<td>{{ $items->name_vend }}</td>
						<td>{{ $items->qty_trans }}</td>
						<td>{{ date("d-m-Y", strtotime($items->date_trans)) }}</td>
						<td>
							<form action="{{ route('purchase.destroy', $items->id_trans) }}" method="post">
					            {{ csrf_field() }}
					            {{ method_field('DELETE') }}
								<a type="submit" class="btn btn-success btn-sm" href="{{ route('purchase.edit',$items->id_trans) }}">Edit</a>
					            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')">Delete</button>
					        </form>
						</td>
					  </tr>
					  @endforeach
					</tbody>
				</table>
			</div>
            
        </div>
    </div>
@endsection
