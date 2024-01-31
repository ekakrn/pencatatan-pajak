@extends('layout')

@section('container')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pajak</h1>
    <a href="/add-page" class="btn btn-primary">
        Tambah Data
    </a>
</div>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" style="width:100%">
                <caption></caption>
                <thead>
                    <tr>
                        <th class="text-center" id="thPenjualan" style="width:15%">Penjualan</th>
                        <th class="text-center" id="thBebanAdm" style="width:15%">Beban</th>
                        <th class="text-center" id="thPendapatanLain" style="width:15%">Pendapatan Lain</th>
                        <th class="text-center" id="thTotal" style="width:15%">Total</th>
                        <th class="text-center" id="thTotalDenganPajak" style="width:15%">Pajak (22%)</th>
                        <th class="text-center" id="thActionHeader" style="width:25%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxes as $data)

                        <tr class="text-center">
                            <td>{{ $data->penjualan }}</td>
                            <td>
                                <div> Administrasi: {{ $data->beban_administrasi }}</div>
                                <div> Pemasaran: {{ $data->beban_pemasaran }}</div>
                                <div> Lainnya: {{ $data->beban_lainnya }}</div>
                            </td>
                            <td>{{ $data->pendapatan_lain }}</td>
                            <td>{{ $data->total }}</td>
                            <td>{{ $data->total_pajak }}</td>
                            <td>
                                <a href="/export-excel" class="btn btn-success mb-1">Excel</a>
                                <a href="/edit-page" class="btn btn-primary mb-1">Ubah</a>
                                <form method="post" class="d-inline"
                                    title="Delete" action="/delete-data/{{ $data->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
