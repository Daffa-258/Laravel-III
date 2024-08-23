@extends('components.layout')

@section('content')
<a href="{{ route('casts.create') }}" class="btn btn-primary">Add New Cast</a>

{{-- Success Message (uncomment if needed)
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif 
--}}

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Umur</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($casts as $cast)
    <tr>
        <td>{{ $cast->id }}</td>
        <td>{{ $cast->nama }}</td>
        <td>{{ $cast->umur }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('casts.edit',$cast->id) }}">Edit</a>
            <form action="{{ route('casts.destroy', $cast->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a class="btn btn-info" href="{{ route('casts.show', $cast->id) }}">
                <i class="fas fa-eye"></i> View
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
