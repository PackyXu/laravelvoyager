@extends('layout.master')
@section('title','Articles')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@section('content')
    <div class="row">
        
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ url('/articles') }}" class="list-group-item">Articles List</a>
                <a href="{{ url('/articles/create') }}" class="list-group-item">Articles Create</a>
            </div>
        </div>
        <div class="col-md-9">
            <h5>
                <a href="https://laravelvoyager.test" style="text-decoration: none;color:#e74430;" title="index">
                    <img src="{{  asset('favicon.ico') }}" alt="logo" class="img-rounded">
                    LaravelVoyager
                </a>
            </h5>
            <div class="clearfix">
                <div class="col-md-6 pull-left">
                    <p>Articles index</p>
                </div>
                <div class="col-md-4 pull-right">
                    <p>当前用户：<span class="code">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span></p>
                </div>
            </div>
            
            
            <hr>
            
            @foreach($articles as $article)
                <article>
                    {{--    url 传递的三种方式
                        <h2><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                        <h2><a href="{{ action('ArticleController@show',[$article->id]) }}">{{ $article->title }}</a></h2>
                        <h2><a href="{{ url('articles',$article->id) }}">{{ $article->title }}</a></h2>
                    --}}
                    
                    <div class="panel panel-default">
                        <div class="panel-heading"><a
                                    href="{{ url('articles',$article->id) }}">{{ $article->title }}</a></div>
                        <div class="panel-body">
                            {{ $article->content }}
                        </div>
                        <div class="" style="margin: 15px">
                            Created_at: <span style="color:#f4645f;">{{ $article->created_at->diffForHumans() }}</span>
                            Published_at: <span style="color:#f4645f;">{{ $article->published_at->diffForHumans() }}</span>
                        </div>
                        <div class="list-group text-right" style="margin: 10px 15px;">
                            <a href="{{ url('/articles/'.$article->id.'/edit') }}" class="btn code-color">编辑</a>
                            
                            {!! Form::open(['route'=> ['articles.destroy',$article->id],'id'=>'DelForm','method'=>'DELETE','style'=>'display:inline-block']) !!}
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                {!! Form::submit('DELETE',['class'=>'glyphicon glyphicon-trash btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                        </form>
                    
                    </div>
                </article>
            
            @endforeach
            
            <div class="text-center">
                <nav class="nav">
                    {{ $articles->links() }}
                </nav>
            </div>
        </div>
    </div>
@endsection