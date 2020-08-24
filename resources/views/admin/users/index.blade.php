@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	@include('admin.aside')
        <div class="col-md-8">
            <table class="table">
            	<thead>
            		<th>N</th>
            		<th>Name</th>
            		<th>Email</th>
            		<th>State</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            		@foreach( $data as $r)
            		<tr>
            			<td>{{ $r->id }}</td>
            			<td>{{ $r->name }}</td>
            			<td>{{ $r->email }}</td>
            			<td>{{ $r->state }}</td>
            			<td>
            				<a class="btn btn-success" href="">Pedidos</a>
            				<a class="btn btn-success" href="{{ route('admin.users.edit', $r->id) }}">Edit</a>
            			</td>
            		</tr>
            		@endforeach
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
