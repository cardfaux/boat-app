{{-- extends the main.blade.php from the layouts folder --}}
@extends('layouts.main')

{{-- this injects this code block into the @yield('content') of the layout that is being extended --}}
@section('content')
{{-- hero comes from the components folder hero.blade.php --}}
@include('components.hero')
@endsection