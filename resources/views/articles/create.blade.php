@extends('layout.master')
@section('title','create')
@section('content')
    <h1>Article create</h1>
    <hr>
    {{-- form --}}
    {!! Form::open(['url' => '/articles']) !!}
        @include('articles.formCommon')
        <div class="form-group">
            {!! Form::submit('create article',['class'=>'form-control btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
    @include('articles.formError')
@endsection