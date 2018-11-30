@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="pull-left">Product</div>
        	<a href="{{asset('/product/create')}}"><span class="btn btn-default pull-right"> New Product </span></a>
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
					    <td>{{ $items->code_prod }}</td>
					    <td>{{ $items->name_prod }}</td>
						<td>
							<form action="{{ route('product.destroy', $items->id_prod) }}" method="post">
					            {{ csrf_field() }}
					            {{ method_field('DELETE') }}
								<a type="submit" class="btn btn-success btn-sm" href="{{ route('product.edit',$items->id_prod) }}">Edit</a>
					            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this file?')">Delete</button>
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
