@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ route('add.products') }}">
                <button class="text-white mt-5 mb-5 btn btn-info">Tambah <i class="fas fa-plus"></i></button>
            </a>
        </div>
    </div>
    <!-- row -->
    <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title">Products List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">NAMA</th>
                            <th scope="col">BRAND</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">HARGA</th>
                            <th scope="col">WARNA</th>
                            <th scope="col">TIPE</th>
                            <th scope="col">TAHUN</th>
                            <th scope="col">CC</th>
                            <th scope="col">JARAK</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cars as $row)
                        <tr>
                            <th scope="row"><b>{{ $row->name }}</b></th>
                            <td>{{ row->brand->name }}</td>
                            <td>{{ $row->category->name }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->type->name }}</td>
                            <td>{{ $row->tahun }}</td>
                            <td>{{ $row->cc }}</td>
                            <td>{{ $row->jarak }}</td>
                            <td><button class="btn btn-primary" type="submit">Show</button></td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="9" class="text-center">Tidak ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
