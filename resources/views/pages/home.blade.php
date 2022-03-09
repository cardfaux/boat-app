{{-- extends the main.blade.php from the layouts folder --}}
@extends('layouts.main')

{{-- this injects this code block into the @yield('content') of the layout that is being extended --}}
@section('content')
<h1>Home</h1>
@endsection