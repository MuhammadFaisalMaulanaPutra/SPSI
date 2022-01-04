@extends('layout.main')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Validasi {{ $title }}</h1>

    @if (session()->has('approved'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('approved') }}
        </div>
    @endif

    @if (session()->has('declined'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('declined') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Sidang</th>
                            <th>NIM Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Hasil Sidang</th>
                            <th>Validasi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($permohonan as $datas)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $datas->no_sidang }}</td>
                                <td>{{ $datas->NIM_mhs }}</td>
                                <td>{{ $datas->nama_mhs }}</td>
                                <td>{{ $datas->hasil_sidang }}</td>
                                <td>
                                    <div class="d-inline">
                                        <form action="/approve/{{ $datas->id }}" method="post" class="d-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Approve">
                                            @csrf
                                            <button class="btn btn-success" type='submit'>
                                                <i class="bi bi-check-lg"></i>
                                            </button>
                                        </form>
                                        <form action="/decline/{{ $datas->id }}" method="post" class="d-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Decline">
                                            @csrf
                                            <button class="btn btn-danger" type='submit'>
                                                <i class= "bi bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

                

            