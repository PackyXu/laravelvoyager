@extends('layout.master')
@section('title','about')
@section('content')
    <div class="panel-default">
        <div class="panel-body">
            <h1 class="">
                About Page
            </h1>
            {{-- {{ $first }} {{ $last }} --}}
            {{--  {{ $data['first'] }} {{ $data['last'] }} --}}
            <div class="list-group-item list-group-item-dark">
                {{ $first  }} {{ $last }}
            </div>
        </div>
    </div>
    
    
    
    
@endsection