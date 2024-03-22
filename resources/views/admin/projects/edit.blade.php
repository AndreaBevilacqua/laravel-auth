@extends('layouts.app')

@section('title', 'Modifica Post')

@section('content')
<header>
    <h1 class="my-2">Modifica Post</h1>
</header>

<hr>

<form action="{{ route('admin.projects.update', $project)}}" method="POST" novalidate>
@csrf
@method('PUT')

<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo..." value="{{old('title', $project->title)}}" required>
          </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto del post</label>
            <textarea name="content" class="form-control" id="content" rows="10" required>
                {{old('content', $project->content)}}
            </textarea>
          </div>
    </div>
    <div class="col-11">
        <div class="mb-3">
            <label for="image" class="form-label">Inserisci un'immagine</label>
            <input type="url" name="image" class="form-control" id="image" placeholder="Immagine..." value="{{old('image', $project->image)}}">
          </div>
    </div>
    <div class="col-1">
        <div class="mb-3">
        <img src="{{old('image', $project->image ?? 'https://marcolanci.it/boolean/assets/placeholder.png')}}" class="img-fluid" alt="immagine post" id="preview">
        </div>
    </div>
    <div class="col-12 d-flex justify-content-end">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="is_published" name="is_published" @if(old('is_published', $project->is_published)) checked @endif>
            <label class="form-check-label" for="is_published">
              Pubblicato
            </label>
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