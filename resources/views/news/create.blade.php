@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear nueva noticia</h1>
        <br>
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Autor</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select class="form-select" id="category" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Subir Noticia</button>
        </form>
    </div>
@endsection

<style>

    .container {
        margin-top: 20px;
    }

    .form-control {
        margin-bottom: 10px;
    }

    .btn-primary {
        margin-top: 10px;
    }

</style>
