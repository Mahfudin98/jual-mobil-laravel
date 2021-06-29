@extends('layouts.admin')

@section('content')
<div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Add Product</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <form action="" class="tm-edit-product-form">
                <div class="form-group mb-3">
                  <label for="nama">Nama Mobil</label>
                  <input id="nama" name="nama" type="text" class="form-control validate" required/>
                </div>
                <div class="form-group mb-3">
                    <label for="harga">Harga</label>
                    <input id="harga" name="harga" type="number" class="form-control validate" required/>
                </div>


                <div class="form-group mb-3">
                  <label for="brands">Brands</label>
                  <select class="custom-select tm-select-accounts" id="brands">
                    <option selected>Select brands</option>
                    @foreach ($brands as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mb-3">
                    <label for="categories">Kategori</label>
                    <select class="custom-select tm-select-accounts" id="categories">
                      <option selected>Select Kategori</option>
                      @foreach ($categories as $row)
                          <option value="{{ $row->id }}">{{ $row->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="colors">Warna</label>
                    <select class="custom-select tm-select-accounts" id="colors">
                      <option selected>Select Warna</option>
                      @foreach ($colors as $row)
                          <option value="{{ $row->id }}">{{ $row->name }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="colors">Tipe Mobil</label>
                    <select class="custom-select tm-select-accounts" id="colors">
                      <option selected>Select Tipe</option>
                      <option value="0">Manual</option>
                      <option value="1">Matic</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="tahun">Tahun</label>
                    <input id="tahun" name="tahun" type="number" class="form-control validate" required/>
                </div>
                <div class="form-group mb-3">
                    <label for="cc">CC</label>
                    <input id="cc" name="cc" type="text" class="form-control validate" required/>
                </div>
                <div class="form-group mb-3">
                    <label for="jarak">Jarak</label>
                    <input id="jarak" name="jarak" type="text" class="form-control validate" required/>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control validate" name="deskripsi" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-dummy mx-auto">
                <i
                  class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"
                ></i>
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" style="display:none;" />
                <input
                  type="button"
                  class="btn btn-primary btn-block mx-auto"
                  value="UPLOAD PRODUCT IMAGE"
                  onclick="document.getElementById('fileInput').click();"
                />
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
