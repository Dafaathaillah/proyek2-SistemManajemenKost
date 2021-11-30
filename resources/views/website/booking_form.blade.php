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
                            <form class="p-3" id="form" enctype="multipart/form-data" action="{{ route('storeBookingForm') }}" method="POST">
                            @csrf
                                <div class="card-header px-4 py-sm-5 py-3">
                                    <h2>Hai Bougenvillian!</h2>
                                    <p class="lead">Isi form berikut untuk menyelesaikan proses pemesanan.</p>
                                </div>
                                <div class="card-body pt-1">
                                    <div class="row">
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label for="id_number">No. KTP</label>
                                            <input class="form-control" placeholder="ID Card Number" type="text" name="id_number">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" placeholder="Full Name" type="text" name="name">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="gender" id="choices-gender" required>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>No. WhatsApp</label>
                                            <input class="form-control" placeholder="WhatsApp Number" type="text"name="whatsapp_number">
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Tanggal Check In</label>
                                            <input class="form-control" type="date" name="check_in_date"> 
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <label>Ruang Booking</label>
                                            <select class="form-control" name="room_id" id="choices-customer">
                                                <option value="{{ $rooms->id }}" selected>{{$rooms->name }}</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="form-group mb-0">
                                                <label>Alamat</label>
                                                <textarea name="address" class="form-control" id="message" rows="6"
                                                    placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pe-2 mb-3">
                                            <div class="form-group mb-0">
                                                <label for="images" class="form-label">File KTP</label>
                                                <div class="form-control dropzone" id="file-dropzone"
                                                style="padding: 20px; background-color: #fff">
                                                    <input type="file" name="file" id="profile-img">
                                                    <img src="" id="profile-img-tag" width="200px" />
                                                </div>
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
                            @csrf
                                <div class="mask bg-gradient-warning opacity-9"></div>
                                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                                    <h3 class="text-white">{{ $rooms->name }}</h3>
                                    <p class="text-white opacity-8 mb-4">{{ $rooms->roomType->name }} • {{ '(' . $rooms->roomType->currency . ') ' . number_format($rooms->roomType->price,0,',','.') }}</p>
                                    <div class="d-flex p-2 text-white">
                                        <div>
                                            <i class="fas fa-phone text-sm" aria-hidden="true"></i>
                                        </div>
                                        @foreach ($boardinghouses as $boardinghouse)
                                        <div class="ps-3">
                                            <span class="text-sm opacity-8">{!! $boardinghouse -> phone_number!!}</span>
                                        </div>
                                        @endforeach
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
                                            <span class="text-sm opacity-8">Jl. Simpang Remujung No. 5</span>
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

@push('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/quill.min.js') }}"></script>

    <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $('.date').datepicker({
                    format: 'mm/dd/yy'
                });       
            });
        </script>
@endpush
