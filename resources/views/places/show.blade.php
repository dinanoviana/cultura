@extends('layout/main')

@section('title', 'Detail Cultural Places')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Detail Cultural Places</h1>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $place->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $place->city }}</h6>
                    <p class="card-text">{{ $place->postalCode }}</p>

                    <button type="button" class="btn btn-primary">Edit</button>

                    <form action="{{ $place->id }}" method="POST" class="d-inline">
                        @method('delete');
                        @csrf
                        <button type="button" class="btn btn-danger">Delete</button>
                    </form>

                    <a href="/places" class="card-link">Back</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection