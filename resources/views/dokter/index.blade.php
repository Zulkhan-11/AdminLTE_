@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@extends('layouts.app')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard Dokter</h1>
        <p>Selamat datang di dashboard dokter.</p>

        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
@endsection