<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service', function () {
    return view('pages.service');
})->name('service');
Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');
Route::post('/signup', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'username' => 'required|max:255|unique:users',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:8',
    ]);

    $user = User::create([
        'username' => $validated['username'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    // Redirect or show a success message
    return redirect()->route('signup')->with('success', 'Account created successfully!');
});