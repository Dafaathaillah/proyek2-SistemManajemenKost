@extends('layouts.website')

@section('content')
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="mb-4 w-25">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookingPage') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Pemesanan Kamar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="py-lg-7">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card overflow-hidden mb-5">
                    <div class="row">
                        <div class="col-lg-7">
                            <form class="p-3" id="contact-form" method="post">
                                <div class="card-header px-4 py-sm-5 py-3">
                                    <h2>Hai Bougenvillian!</h2>
                                    <p class="lead">Isi form berikut untuk menyelesaikan proses pemesanan.</p>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>No. KTP</label>
                                            <input class="form-control" placeholder="ID Card Number" type="text">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" placeholder="Full Name" type="text">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Jenis Kelamin</label>
                                            <input class="form-control" placeholder="Gender" type="file">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>No. WhatsApp</label>
                                            <input class="form-control" placeholder="WhatsApp Number" type="text">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="form-group mb-0">
                                                <label>Alamat</label>
                                                <textarea name="message" class="form-control" id="message" rows="6"
                                                    placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 text-end ms-auto">
                                            <button type="submit" class="btn btn-round bg-gradient-warning mb-0">Booking</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 position-relative bg-cover px-0"
                            style="background-image: url('{{ asset('design-system/img/curved-images/curved5.jpg') }}')">
                            <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                                <img src="{{ asset('design-system/img/wave-1.svg') }}" class="h-100 ms-n2" alt="vertical-wave">
                            </div>
                            <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                                <div class="mask bg-gradient-warning opacity-9"></div>
                                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                    <h3 class="text-white">Nama Kamar</h3>
                                    <p class="text-white opacity-8 mb-4">Tipe Kamar • Rp 1.000.000</p>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-phone text-sm" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">(+40) 772 100 200</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-envelope text-sm" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">hello@creative-tim.com</span>
                                        </div>
                                    </div>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-map-marker-alt text-sm" aria-hidden="true"></i>
                                        </div>
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Facebook" data-bs-original-title=""
                                            title="">
                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Twitter" data-bs-original-title=""
                                            title="">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Dribbble" data-bs-original-title=""
                                            title="">
                                            <i class="fab fa-dribbble" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0"
                                            data-toggle="tooltip" data-placement="bottom"
                                            data-original-title="Log in with Instagram" data-bs-original-title=""
                                            title="">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
