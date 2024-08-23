@extends('components.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Detail Cast</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <strong>ID:</strong>
            </div>
            <div class="col-md-8">
                {{ $cast->id }}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <strong>Nama:</strong>
            </div>
            <div class="col-md-8">
                {{ $cast->nama }}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <strong>Umur:</strong>
            </div>
            <div class="col-md-8">
                {{ $cast->umur }}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <strong>Bio:</strong>
            </div>
            <div class="col-md-8">
                {{ $cast->bio }}
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('casts.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection
