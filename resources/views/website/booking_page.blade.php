@extends('layouts.website')

@section('content')
<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
    <div class="page-header min-vh-50"
        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/airport.jpg')">
        <span class="mask bg-gradient-warning"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-white text-center">
                    <h2 class="text-white">Pilih Kamar Sesuai Kebutuhanmu</h2>
                    <p class="lead">An arrangement you make to have a hotel room, tickets, etc. at a particular time
                        in the future</p>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative overflow-hidden" style="height:36px;margin-top:-33px;">
        <div class="w-full absolute bottom-0 start-0 end-0"
            style="transform: scale(2);transform-origin: top center;color: #fff;">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 mx-sm-0 mx-1 position-relative">
            <div class="col-lg-3 mt-lg-n2 mt-2">
                <label class="">Leave From</label>
                <select class="form-control" name="choices-button" id="choices-button">
                    <option value="Choice 1" selected="">Brazil</option>
                    <option value="Choice 2">Bucharest</option>
                    <option value="Choice 3">London</option>
                    <option value="Choice 4">USA</option>
                </select>
            </div>
            <div class="col-lg-3 mt-lg-n2 mt-2">
                <label class="">To</label>
                <select class="form-control" name="choices-remove-button" id="choices-remove-button">
                    <option value="Choice 1" selected="">Italy</option>
                    <option value="Choice 2">Spain</option>
                    <option value="Choice 3">Denmark</option>
                    <option value="Choice 4">Poland</option>
                </select>
            </div>
            <div class="col-lg-3 mt-lg-n2 mt-2">
                <label class="">Depart</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    <input class="form-control datepicker" placeholder="Please select date" type="text">
                </div>
            </div>
            <div class="col-lg-3 mt-lg-n2 mt-2">
                <label class="">&nbsp;</label>
                <button type="button" class="btn bg-gradient-dark w-100 mb-0">Search</button>
            </div>
        </div>
    </div> --}}
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<section class="pt-7 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a href="{{ route('detailPage', 1) }}" class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/house.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Entire Apartment • 3 Guests • 2 Beds</p>
                        <a href="{{ route('detailPage', 1) }}">
                            <h5>
                                Lovely and cosy apartment
                            </h5>
                        </a>
                        <p>
                            Siri's latest trick is offering a hands-free TV viewing experience, that will allow
                            consumers to turn on or off their television, change inputs, fast forward.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/pool.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Private Room • 1 Guests • 1 Sofa</p>
                        <a href="javascript:;">
                            <h5>
                                Single room in the center of the city
                            </h5>
                        </a>
                        <p>
                            As Uber works through a huge amount of internal management turmoil, the company is also
                            consolidating and rationalizing more of its international business.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/antalya.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Entire Apartment • 4 Guests • 2 Beds</p>
                        <a href="javascript:;">
                            <h5>
                                Independent house bedroom kitchen
                            </h5>
                        </a>
                        <p>
                            Music is something that every person has his or her own specific opinion about.
                            Different people have different taste, and various types of music.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/tiny-house.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>
                        <a href="javascript:;">
                            <h5>
                                Zen Gateway with pool and garden
                            </h5>
                        </a>
                        <p>
                            Fast forward, rewind and more, without having to first invoke a specific skill, or even
                            press a button on their remote.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/air-bnb.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Entire Flat • 8 Guests • 3 Rooms</p>
                        <a href="javascript:;">
                            <h5>
                                Cheapest hotels for a luxury vacation
                            </h5>
                        </a>
                        <p>
                            Today, the company announced it will be combining its rides-on-demand business and
                            UberEATS.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/palm-house.jpg"
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-1 pt-3">
                        <p class="text-gradient text-dark mb-2 text-sm">Entire Apartment • 2 Guests • 1 Bed</p>
                        <a href="javascript:;">
                            <h5>
                                Cozy Double Room Near Station
                            </h5>
                        </a>
                        <p>
                            Different people have different taste, and various types of music have many ways of
                            leaving an impact on someone.
                        </p>
                        <a href={{ route('bookingForm') }} class="btn btn-outline-warning btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 ms-auto text-end">
                <ul class="pagination pagination-warning mt-4">
                    <li class="page-item ms-auto">
                        <a class="page-link" href="javascript:;" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:;">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:;" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
