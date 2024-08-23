@extends('components.layout')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('casts.update', $cast->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" value="{{ $cast->umur }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" class="form-control">{{ $cast->bio }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
