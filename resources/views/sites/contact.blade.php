@extends('layout.master')
@section('title','contact')
@section('content')
    <div class="panel-default">
        <div class="panel-body">
            <h1 class="">
                Contact Page
            </h1>
            @if(count($people) > 0)
                <ul class="list-group" style="margin: 20px 0">
                    @foreach($people as $person)
                    <li class="list-group-item">
                       {{ $person }}
                    </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
{{--
@section('footer')
    <div class="div">
        <h1>footer</h1>
    </div>
    <script>alert('footer');</script>
@endsection
--}}
