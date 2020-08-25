@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	@include('admin.aside')
        <div class="col-md-8">
            <a class="btn btn-success" href="{{ route('admin.categories.create') }}">cargar datos LPB</a>
            <table class="table">
                <thead>
                    <th>N</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection