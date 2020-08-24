@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	@include('admin.aside')
        <div class="col-md-8">
            {!! Form::open(['route'=>['admin.categories.update', $category], 'method'=>'PUT', 'files'=>true]) !!}
            <div class="row form-group">
                <div class="col-sm-8">
                    {!! Form::label('slug', 'SLUG') !!}
                    {!! Form::text('slug', $category->slug, ['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-8">
                    {!! Form::label('title', 'TITLE') !!}
                    {!! Form::text('title', $category->title, ['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-8">
                    {!! Form::label('description', 'DESCRIPTION') !!}
                    {!! Form::text('description', $category->description, ['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-8">
                    {!! Form::label('name', 'NAME') !!}
                    {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-8">
                    {!! Form::label('description_categories', 'DESCRIPTION CATEGORIES') !!}
                    {!! Form::textarea('description_categories', $category->description_categories, ['class'=>'form-control']) !!}
                </div>

                <div class="col-sm-8">
                    <img src="/img/categories/{{ $category->url_image }}">
                    {!! Form::file('url_image') !!}
                </div>

                <div class="col-sm-6">
                    {!! Form::checkbox('cover_page', null, $category->cover_page) !!} Portada <br>
                </div>

                <div class="col-sm-6">
                    {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description_categories' );
</script>

@endsection
