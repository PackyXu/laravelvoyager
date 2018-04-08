@extends('layout.master')
@section('title','edit')
@section('content')
    <h1>Article Edit</h1>
    <h2>{{ $article->title }}</h2>
    <hr>
    {{-- form --}}
    {!! Form::model($article,['method'=>'PATCH','url' => '/articles/'.$article->id]) !!}
       @include('articles.formCommon')
    <div class="form-group">
        {!! Form::submit('article edit update',['class'=>'form-control btn btn-success']) !!}
    </div>
    {!! Form::close() !!}

    @include('articles.formError')

@endsection