@extends('layouts.app')

@section('title', 'Crea Post')

@section('content')
<header>
    <h1 class="my-2">Nuovo Post</h1>
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