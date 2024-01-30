@extends('layout')

@section('container')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pajak</h1>
    <a href="/add-page" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
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
                        <th id="thPenjualan" style="width:15%">Penjualan</th>
                        <th id="thBebanAdm" style="width:10%">Beban Adm</th>
                        <th id="thBebanPemasaran" style="width:10%">Beban Pemasaran</th>
                        <th id="thBebanLain" style="width:10%">Beban Lain</th>
                        <th id="thPendapatanLain" style="width:10%">Pendapatan Lain</th>
                        <th id="thTotal" style="width:15%">Total</th>
                        <th id="thTotalDenganPajak" style="width:15%">Total Dengan Pajak</th>
                        <th id="thActionHeader" style="width:15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxes as $data)

                        <tr>
                            <td>{{ $data->penjualan }}</td>
                            <td>{{ $data->beban_administrasi }}</td>
                            <td>{{ $data->beban_pemasaran }}</td>
                            <td>{{ $data->beban_lainnya }}</td>
                            <td>{{ $data->pendapatan_lain }}</td>
                            <td>{{ $data->total }}</td>
                            <td>{{ $data->total_dengan_pajak }}</td>
                            <td>

                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
