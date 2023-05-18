@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="card-body">
            <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm mb-3">
                <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket Travel
            </a>
                <div class="table-responsive">
                    <table class="tabel table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Title</th>
                                <th style="text-align: center;">Location</th>
                                <th style="text-align: center;">Type</th>
                                <th style="text-align: center;">Departure Date</th>
                                <th style="text-align: center;">Type</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                <td style="text-align: center;">{{ $item->title }}</td>
                                <td style="text-align: center;">{{ $item->location }}</td>
                                <td style="text-align: center;">{{ $item->type }}</td>
                                <td style="text-align: center;">{{ $item->departure_date }}</td>
                                <td style="text-align: center;">{{ $item->type }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('travel-package.show', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are You Sure, You Want To Delete This Data?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    


</div>
<!-- /.container-fluid -->

@endsection