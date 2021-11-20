@extends('layouts.website')

@section('content')
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="mb-4 w-25">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookingPage') }}">Daftar Kamar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Kamar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ms-auto me-auto text-center">
                <h2 class="text-gradient text-warning">Nama Kamar</h2>
                <p>
                    The highest status people in human history are those that asked for nothing and gave everything
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 position-relative">
                <div class="position-relative ms-md-5 me-md-n5">
                    <div class="blur-shadow-image">
                        <img class="image-left rounded-3 img-fluid position-relative top-0 end-0 bg-cover"
                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/laptop.jpg"
                            alt="image">
                    </div>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/laptop.jpg&quot;);">
                    </div>
                </div>
                <p
                    class="blockquote border border-warning rounded w-50 p-3 display-1 float-md-end mt-4 me-md-n2 mx-auto">
                    BEST DEAL:
                    <br>
                    <br>
                    <span class="h3 text-warning">Rp 1.000.000/bulan</span>
                </p>
                <!-- Second image on the left side of the article -->
                <div class="position-absolute bottom-0 mb-5 ms-n2 me-3 start-0 end-2 d-md-block d-none">
                    <div class="blur-shadow-image">
                        <img class="image-container rounded-3 img-fluid position-relative bg-cover"
                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/coding.jpg"
                            alt="image">
                    </div>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/coding.jpg&quot;);">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- First image on the right side, above the article -->
                <div class="position-relative ms-n4 mb-5 mt-8 d-md-block d-none">
                    <div class="blur-shadow-image">
                        <img class="image-right rounded-3 img-fluid position-relative bg-cover"
                            src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/tasks.jpg"
                            alt="image">
                    </div>
                    <div class="colored-shadow"
                        style="background-image: url(&quot;https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/tasks.jpg&quot;);">
                    </div>
                </div>
                <h3 class="mb-4">So what does the new record for the lowest level of winter ice actually mean</h3>
                <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                    process will continue whatever happens with climate change. Even if the Arctic continues to be one
                    of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark
                    every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state
                    of the ice.
                </p>
                <p>
                    For a start, it does not automatically follow that a record amount of ice will melt this summer.
                    More important for determining the size of the annual thaw is the state of the weather as the
                    midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records,
                    scientists have observed a clear pattern of decline, decade-by-decade.
                </p>
                <a href={{ route('bookingForm') }} class="btn btn-outline-warning">Pesan Kamar Ini</a>
            </div>
        </div>
    </div>
</section>
@endsection
