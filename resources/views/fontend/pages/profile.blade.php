@extends('fontend.layout.master')
@section('content')
    <div class="p-center bg-primary p-5 text-white">
        <h2>This is User Profile</h2>
        <h4>User Name : <b>{{ auth()->user()->name }}</b></h4>
    </div>
@endsection
    {{-- //development by md abdullah shake (mas it academy) --}}
