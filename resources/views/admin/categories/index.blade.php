@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	@include('admin.aside')
        <div class="col-md-8">
            <a class="btn btn-success" href="{{ route('admin.categories.create') }}">NEW</a>
            @if(count($categories))
            <table class="table">
            	<thead>
            		<th>N</th>
            		<th>Name</th>
                    <th>Action</th>
            	</thead>
            	<tbody>
            		@foreach( $categories as $r)
            		<tr>
            			<td>{{ $r->id }}</td>
            			<td>{{ $r->name }}</td>
            			<td>
            				<a class="btn btn-success" href="{{ route('admin.categories.edit', $r->id) }}">Edit</a>
                            {!! Form::open(['method'=>'DELETE', 'route'=>['admin.categories.destroy', $r->id], 'style'=>'display:inline']) !!}

                            {!! Form::submit('DELETE', ['class'=>'btn btn-success']) !!}
                            {!! Form::close() !!}
            			</td>
            		</tr>
                    @endforeach
            	</tbody>
            </table>
            @else
                <p>there are no records</p>
            @endif
        </div>
    </div>
</div>
@endsection
