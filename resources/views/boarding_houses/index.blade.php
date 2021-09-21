@extends('layouts.master')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Informasi Rumah Kos</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Informasi Rumah Kos</h6>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 mt-lg-0 mt-4">
        <!-- Card Profile -->
        <div class="card card-body" id="profile">
            <div class="row justify-content-left align-items-center">
                <div class="col-sm-auto col-4">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('assets/img/logo-ct.png') }}" alt="main_logo"
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-sm-auto col-8 my-auto">
                    <div class="h-100">
                        <h5 class="mb-1 font-weight-bolder">
                            Bougenville Kost
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Jl. Simpang Remujung No. 5
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Informasi Rumah Kos -->
        <div class="card mt-4" id="basic-info">
            <div class="card-header">
                <h5>Informasi Rumah Kos</h5>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label">Nama Rumah Kos</label>
                        <div class="input-group">
                            <input id="name" name="name" class="form-control" type="text" placeholder="Nama rumah kos"
                                required="required" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Pemilik Rumah Kos</label>
                        <div class="input-group">
                            <input id="owner" name="owner" class="form-control" type="text"
                                placeholder="Pemilik rumah kos" required="required" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label class="form-label mt-4">Deskripsi</label>
                        <div class="input-group">
                            <textarea id="description" name="description" class="form-control" cols="30" rows="5"
                                onfocus="focused(this)" onfocusout="defocused(this)"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label mt-4">Provinsi</label>
                        <div class="input-group">
                            <select id="state" name="state_id" class="form-select" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                                <option>Pilih Provinsi</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label mt-4">Kota/Kabupaten</label>
                        <div class="input-group">
                            <select id="city" name="city_id" class="form-select" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                                <option>Pilih Kota/Kabupaten</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label mt-4">Kelurahan/Desa</label>
                        <div class="input-group">
                            <select id="village" name="village_id" class="form-select" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                                <option>Pilih Kelurahan/Desa</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label mt-4">Kode Pos</label>
                        <div class="input-group">
                            <input id="postal_code" name="postal_code" class="form-control" type="text"
                                placeholder="Kode pos" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label class="form-label mt-4">Alamat</label>
                        <div class="input-group">
                            <textarea id="address" name="address" class="form-control" cols="30" rows="5"
                                onfocus="focused(this)" onfocusout="defocused(this)"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label mt-4">Nomor Telepon</label>
                        <div class="input-group">
                            <input id="phone_number" name="phone_number" class="form-control" type="number"
                                placeholder="0341 7356 314" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label mt-4">Nomor WhatsApp</label>
                        <div class="input-group">
                            <input id="whatsapp_number" name="whatsapp_number" class="form-control" type="number"
                                placeholder="085 735 631 620" onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Aturan Rumah Kos -->
        <div class="card mt-4">
            <div class="card-header">
                <h5>Aturan Rumah Kos</h5>
            </div>
            <div class="card-body pt-0">
                <div id="editor">
                    <p>Tambahkan aturan rumah kos di bagian sini.</p>
                    <p>Anda dapat menggunakan fitur-fitur yang terdapat di bagian toolbar atas, seperti</p>
                    <ul>
                        <li>List</li>
                        <li><b>Bold</b></li>
                        <li><i>Italic</i></li>
                        <li><u>Underline</u></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card Update Informasi Rumah Kos -->
        <div class="card mt-4">
            <div class="card-body">
                <button type="button" name="button" class="btn bg-gradient-primary m-0 ms-2">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('script')
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            size: 150
        });

    </script>
@endpush
