@extends('layouts.app')

@section('title', 'Modifica Post')

@section('content')
<header>
    <h1 class="my-2">Modifica Post</h1>
</header>

<hr>

@include('includes.posts.form')

@endsection

@section('scripts')
  <script>
    const placeholder = 'https://marcolanci.it/boolean/assets/placeholder.png';
    const input = document.getElementById('image');
    const preview = document.getElementById('preview');

    input.addEventListener('input', () => {
        preview.src = input.value || placeholder;
    })
  </script>
@endsection