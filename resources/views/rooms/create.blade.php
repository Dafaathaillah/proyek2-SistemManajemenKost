@extends('layouts.master')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Manajemen
                Kamar</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Kamar Baru</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Tambah Kamar Baru</h6>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="multisteps-form">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5 mb-3">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="Info Kamar">
                            <span>1. Info Kamar</span>
                        </button>
                        <button class="multisteps-form__progress-btn" type="button" title="Foto">2. Foto</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Fasilitas">3. Fasilitas</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Harga">4. Harga</button>
                    </div>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-10 m-auto">
                    <form class="multisteps-form__form mb-8">
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn" style="position: absolute">
                            <h5 class="font-weight-bolder">Informasi Kamar</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Nama Kamar</label>
                                        <input class="multisteps-form__input form-control" type="text"
                                            placeholder="eg. Kamar 01" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Tipe Kamar</label>
                                        <input class="multisteps-form__input form-control" type="text"
                                            placeholder="eg. VIP" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="mt-4">Deskripsi</label>
                                        <p class="form-text text-muted text-xs ms-1 d-inline">
                                            (optional)
                                        </p>
                                        <div id="edit-deschiption" class="h-50">
                                            <p>Masukkan deskripsi kamar kos di sini!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-5">
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn" style="position: absolute">
                            <h5 class="font-weight-bolder">Foto</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label>Foto Kamar</label>
                                        <div action="/file-upload" class="form-control dropzone" id="productImg" style="padding: 20px; background-color: #fff"></div>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn" style="position: absolute">
                            <h5 class="font-weight-bolder">Fasilitas</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label>Luas Kamar</label>
                                        <input class="multisteps-form__input form-control" type="text"
                                            placeholder="eg. 4x5 m" />
                                    </div>
                                    <div class="col-12">
                                        <label class="mt-4 form-label">Fasilitas</label>
                                        <select class="form-control" name="choices-facility" id="choices-facility" multiple>
                                            <option value="Choice 1">Kasur</option>
                                            <option value="Choice 2">Lemari</option>
                                            <option value="Choice 3">Wifi</option>
                                            <option value="Choice 4">Listrik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                            title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                            title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn" style="position: absolute">
                            <h5 class="font-weight-bolder">Harga</h5>
                            <div class="multisteps-form__content mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Harga</label>
                                        <input class="multisteps-form__input form-control" type="text"
                                            placeholder="300.000" />
                                    </div>
                                    <div class="col-6">
                                        <label>Kurs Mata Kuang</label>
                                        <select class="form-control" name="choices-sizes" id="choices-currency">
                                            <option value="Choice 1" selected="">IDR</option>
                                            <option value="Choice 2">EUR</option>
                                            <option value="Choice 3">USD</option>
                                            <option value="Choice 4">CNY</option>
                                            <option value="Choice 5">INR</option>
                                            <option value="Choice 6">BTC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                        title="Send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/plugins/multistep-form.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/quill.min.js') }}"></script>
    <script>
        if (document.getElementById('edit-deschiption')) {
            var quill = new Quill('#edit-deschiption', {
                theme: 'snow' // Specify theme in configuration
            });
        };

        if (document.getElementById('choices-facility')) {
            var tags = document.getElementById('choices-facility');
            const examples = new Choices(tags, {
                removeItemButton: true
            });
        };

        if (document.getElementById('choices-sizes')) {
            var element = document.getElementById('choices-sizes');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

        if (document.getElementById('choices-currency')) {
            var element = document.getElementById('choices-currency');
            const example = new Choices(element, {
                searchEnabled: false
            });
        };

    </script>
@endpush
