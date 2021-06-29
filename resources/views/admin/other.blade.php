@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row tm-content-row">
      <!-- brands -->
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Brand Mobil</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                @forelse ($brands as $row)
                    <tr>
                        <td class="tm-product-name">{{ $row->name }}</td>
                        <td class="text-center">
                        <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Brands tidak ada</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <button class="btn btn-primary btn-block text-uppercase mb-3">
            Tambah Brand Baru
          </button>
        </div>
      </div>
      <!-- category -->
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Kategori Mobil</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                @forelse ($categories as $row)
                    <tr>
                        <td class="tm-product-name">{{ $row->name }}</td>
                        <td class="text-center">
                        <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Kategori tidak ada</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <button class="btn btn-primary btn-block text-uppercase mb-3">
            Tambah Kategori Baru
          </button>
        </div>
      </div>
      <!-- color -->
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Warna Mobil</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                @forelse ($colors as $row)
                    <tr>
                        <td class="tm-product-name">{{ $row->name }}</td>
                        <td class="text-center">
                        <a href="#" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Warna tidak ada</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <button class="btn btn-primary btn-block text-uppercase mb-3">
            Tambah Warna Baru
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection
