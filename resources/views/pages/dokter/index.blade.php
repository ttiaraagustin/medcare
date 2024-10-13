@extends('layouts.main')

@section('content')
    <style>
        .background-image {
            position: relative;
            height: 100vh;
            background-image: url('{{ asset('img/medcare3.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .welcome-text {
            color: rgb(60, 57, 57);
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(247, 238, 238, 0.5);
        }
    </style>

    <div class="background-image">
        <div class="welcome-text">
            Welcome, {{ $user->nama_lengkap }}
        </div>
    </div>
@endsection
