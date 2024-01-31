@extends('layout')

@section('container')

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row">
    <div class="col">
        <h2 class="text-center mb-5 text-dark">Laba Rugi Setelah Rekonsiliasi Fiskal</h2>
        <form action="/edit-data/{{ $taxes->id }}" method="post">
            @csrf
            <input type="hidden" value="{{ $taxes->id }}" name="tax_id">
            <div class="mb-3 row">
                <label for="penjualan" class="col-sm-3 col-form-label">Penjualan</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark"
                    name="penjualan" id="penjualan" value="{{ $taxes->penjualan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bebanAdministrasi" class="col-sm-3 col-form-label">Beban Administrasi</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark"
                    name="beban_administrasi" id="bebanAdministrasi" value="{{ $taxes->beban_administrasi }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bebanPemasaran" class="col-sm-3 col-form-label">Beban Pemasaran</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark"
                    name="beban_pemasaran" id="bebanPemasaran" value="{{ $taxes->beban_pemasaran }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bebanLainnya" class="col-sm-3 col-form-label">Beban Lainnya</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark"
                    name="beban_lainnya" id="bebanLainnya" value="{{ $taxes->beban_lainnya }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="pendapatanLainnya" class="col-sm-3 col-form-label">Pendapatan Lainnya</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark"
                    name="pendapatan_lain" id="pendapatanLainnya" value="{{ $taxes->pendapatan_lain }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="total" class="col-sm-3 col-form-label">Dasar Pengenaan Pajak</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark bg-secondary-subtle"
                    name="total" id="total" value="{{ $taxes->total }}" readonly>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="totalPajak" class="col-sm-3 col-form-label">Pajak Terutang Badan (22%)</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control border border-dark bg-secondary-subtle"
                    name="total_pajak" id="totalPajak" value="{{ $taxes->total_pajak }}" readonly>
                </div>
            </div>
            <div class="row">
                <label for="totalPajak" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
