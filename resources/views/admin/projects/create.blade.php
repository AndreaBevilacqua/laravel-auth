@extends('layouts.app')

@section('title', 'Crea Post')

@section('content')
<header>
    <h1 class="my-2">Nuovo Post</h1>
</header>

<hr>

<form action="{{ route('admin.projects.store')}}" method="POST" novalidate>
@csrf

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo..." value="{{old('title', '')}}" required>
          </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto del post</label>
            <textarea name="content" class="form-control" id="content" rows="10" required>
                {{old('content', '')}}
            </textarea>
          </div>
    </div>
    <div class="col-11">
        <div class="mb-3">
            <label for="image" class="form-label">Inserisci un'immagine</label>
            <input type="url" name="image" class="form-control" id="image1" placeholder="Immagine..." value="{{old('image', '')}}">
          </div>
    </div>
    <div class="col-1">
        <div class="mb-3">
        <img src="https://marcolanci.it/boolean/assets/placeholder.png" class="img-fluid" alt="immagine post" id="preview">
        </div>
    </div>
</div>
<hr>

<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista</a>

    <div class="d-flex align-items-center gap-2">
        <button type="reset" class="btn btn-secondary"><i class="fas fa-eraser me-2"></i>Svuota i campi</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-floppy-disk me-2"></i> Salva</button>
    </div>
</div>

</form>

@endsection

{{-- @section('scripts')
  @vite('resources/js/delete_confirmation.js')
@endsection --}}