@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>
    
    <div class="card">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="tabel table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Travel</th>
                                <th style="text-align: center;">User</th>
                                <th style="text-align: center;">Visa</th>
                                <th style="text-align: center;">Total</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $item)
                            <tr>
                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                <td style="text-align: center;">{{ $item->travel_package->title }}</td>
                                <td style="text-align: center;">{{ $item->user->name }}</td>
                                <td style="text-align: center;">{{ $item->additional_visa }}</td>
                                <td style="text-align: center;">{{ $item->transaction_total }}</td>
                                <td style="text-align: center;">{{ $item->transaction_status }}</td>
                                <td style="text-align:center;">
                                    <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('transaction.destroy', $item->id) }}" method="POST" class="d-inline">
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