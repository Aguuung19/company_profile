@extends('layouts.home')

@section('content')
    <h1>welcome admin</h1>

    <form action="{{url('/logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection