@extends('layout.master')
@section('title','article')
@section('content')
    <h1>Article show</h1>
    <hr>
    {{--    {!! Form::open(['method'=>'DELETE','url' => '/articles/delete'],$article->id) !!}--}}
        
        <article>
            <div class="panel">
                <div class="panel-body">
                    {{ $article->content }}
                </div>
                Created_at:<span style="color:#f4645f;">{{ $article->created_at->diffForHumans() }}</span>
                Published_at:<span style="color:#f4645f;">{{ $article->published_at->diffForHumans() }}</span>
                <form action="/task/{{ $article->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="list-group">
                        <a href="{{ url('/articles/'.$article->id.'/edit') }}" class="btn code-color">编辑</a>
                        <a href="{{ url('/articles/delete/'.$article->id) }}" class="btn code-color">删除</a>
                        <a href="{{ url('/articles/'.$article->id) }}" class="btn code-color">删除</a>
                    </div>
    
                </form>
            </div>
        </article>
      
@endsection