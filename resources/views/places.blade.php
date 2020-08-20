@extends('layout/main')

@section('title', 'Places')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Cultural Places</h1>
            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Postal Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($places as $pl)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="">{{ $pl->name }}</a></td>
                            <td>{{ $pl->city }}</td>
                            <td>{{ $pl->postalCode }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection