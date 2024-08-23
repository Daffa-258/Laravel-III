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

<form action="{{ route('casts.store') }}" method="POST">
@csrf

<div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
</div>

<div class="form-group">
    <label for="umur">Umur:</label>
    <input type="number" name="umur" class="form-control" placeholder="Enter Umur">
</div>

<div class="form-group">
<label for="bio">Bio:</label>
    <textarea name="bio" class="form-control" placeholder="Enter Bio"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection
