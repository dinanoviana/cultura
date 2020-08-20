@extends('layout/main')

@section('title', 'Events List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Event List</h1>
            <div class="table-responsive-lg">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Location</th>
                            <th scope="col">Ticket</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $ev)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ev->name }}</td>
                            <td>{{ $ev->date }}</td>
                            <td>{{ $ev->location }}</td>
                            <td><a href="" class="badge badge-primary">Get Ticket</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection