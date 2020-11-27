@extends('layouts.app')

@section('title-block', 'Contacts')

@section('content')
    <h1>Contacts</h1>



    <form action="{{ route('contacts-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" name="surname" placeholder="Enter name" id="surname" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
