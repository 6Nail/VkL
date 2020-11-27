@extends('layouts.app')

@section('title-block', 'Messages')

@section('content')
    <h1>Messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }} {{ $el->surname  }}, {{ $el->email }}</h3>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="#"><buttton class="btn btn-warning">More</buttton></a>
        </div>
    @endforeach
@endsection


