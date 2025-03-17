@extends('layouts.app')

@section('content')
    <h2>Admin Login</h2>
    
    @if ($errors->any())
        <div>
            <p style="color: red;">{{ $errors->first('login') }}</p>
        </div>
    @endif

    <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
@endsection
