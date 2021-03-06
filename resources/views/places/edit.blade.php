@extends('layout/main')

@section('title', 'Edit Cultural Place')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Edit Cultural Place</h1>

            <form method="POST" action="/places/{{ $place->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter cultural place's name" name="name" value="{{ $place->name }}">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="Enter city" name="city" value="{{ $place->city }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="postalCode">Postal Code</label>
                    <input type="text" class="form-control @error('postalCode') is-invalid @enderror" id="postalCode" placeholder="Enter postal code" name="postalCode" value="{{ $place->postalCode }}">
                    @error('postalCode')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>
</div>
@endsection