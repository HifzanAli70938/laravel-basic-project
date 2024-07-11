<!-- resources/views/pages/signup.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Signup Page</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <x-form.signup />
@endsection
