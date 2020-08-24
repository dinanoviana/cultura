@extends('layout/main')

@section('title', 'Add Cultural Place')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add Cultural Place</h1>

            <form method="POST" action="/places">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter cultural place's name" name="name">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                </div>
                <div class="form-group">
                    <label for="postalCode">Postal Code</label>
                    <input type="text" class="form-control" id="postalCode" placeholder="Enter postal code" name="postalCode">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
    </div>
</div>
@endsection