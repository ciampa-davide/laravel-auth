@extends('layouts.app')

@section('content')
     
    <div class="container">
        <h1>Crea nuovo post</h1>
        <form action="{{  route('admin.posts.store')  }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="body">Testo</label>
                <textarea id="body" name="body" rows="10">{{ old('title') }}</textarea>
            </div>

            <input class="btn btn-primary" type="submit" value="crea">
        </form>
    </div>

@endsection