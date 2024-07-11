<!-- resources/views/pages/about.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>About Us</h1>
    <x-box title="About Us">
        <div>
            <p>Left side paragraph content goes here.</p>
        </div>
        <div>
            <img src="{{ asset('images/web-developer.jpg') }}" alt="Description of image">
        </div>
    </x-box>
@endsection
