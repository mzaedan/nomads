@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Paket Travel</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <td>{{ $data->title }}</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ $data->location }}</td>
            </tr>
            <tr>
                <th>About</th>
                <td>{{ $data->about }}</td>
            </tr>
            <tr>
                <th>Featured Event</th>
                <td>{{ $data->featured_event }}</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>{{ $data->language }}</td>
            </tr>
            <tr>
                <th>Foods</th>
                <td>{{ $data->foods }}</td>
            </tr>
            <tr>
                <th>Departure Date</th>
                <td>{{ $data->departure_date }}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{ $data->duration }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $data->type }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $data->price }}</td>
            </tr>
            </table>
            <a href="{{ route ('gallery.index') }}" class="btn btn-primary btn-md">Kembali</a>
        </div>
    </div>
    
</div>

@endsection