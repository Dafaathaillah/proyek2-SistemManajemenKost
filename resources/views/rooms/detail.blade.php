@extends('layouts.master')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Manajemen
                Kamar</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Kamar</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Detail Kamar</h6>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Detail Kamar</h5>
                <div class="row">
                    <div class="col-xl-5 col-lg-6 text-center">
                        <img class="w-100 border-radius-lg shadow-lg mx-auto"
                            src="https://images.unsplash.com/photo-1616627781431-23b776aad6b2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1884&q=80"
                            alt="chair">
                        <div class="my-gallery d-flex mt-4 pt-2" itemscope itemtype="http://schema.org/ImageGallery">
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-pink.jpg"
                                    itemprop="contentUrl" data-size="500x600">
                                    <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-pink.jpg"
                                        alt="Image description" />
                                </a>
                            </figure>
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg"
                                    itemprop="contentUrl" data-size="500x600">
                                    <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg"
                                        itemprop="thumbnail" alt="Image description" />
                                </a>
                            </figure>
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-steel.jpg"
                                    itemprop="contentUrl" data-size="500x600">
                                    <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-steel.jpg"
                                        itemprop="thumbnail" alt="Image description" />
                                </a>
                            </figure>
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-wood.jpg"
                                    itemprop="contentUrl" data-size="500x600">
                                    <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/chair-wood.jpg"
                                        itemprop="thumbnail" alt="Image description" />
                                </a>
                            </figure>
                        </div>
                        <!-- Root element of PhotoSwipe. Must have class pswp. -->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden. -->
                            <div class="pswp__scroll-wrap">
                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>
                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                <div class="pswp__ui pswp__ui--hidden">
                                    <div class="pswp__top-bar">
                                        <!--  Controls are self-explanatory. Order can be changed. -->
                                        <div class="pswp__counter"></div>
                                        <button class="btn btn-white btn-sm pswp__button pswp__button--close">Close
                                            (Esc)</button>
                                        <button
                                            class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                                        <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                                        </button>
                                        <button
                                            class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                                        </button>
                                        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                        <!-- element will get class pswp__preloader--active when preloader is running -->
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mx-auto">
                        <h3 class="mt-lg-0 mt-4">{{ $room->name }}</h3>
                        <div class="rating">
                            {{ $room->type }}
                        </div>
                        <br>
                        <h6 class="mb-0 mt-3">Harga</h6>
                        <h5>Rp {{ number_format($room->price,0,',','.') }}</h5>
                        <span class="badge badge-success text-dark">Tersedia</span>
                        <br>
                        <label class="mt-4">Deskripsi</label>
                        <p style="margin-left: 5px" class="mb-0">
                            {!! $room->description !!} 
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h5 class="ms-3 mb-3">Fasilitas</h5>
                        <div class="overflow-scroll">
                            <div class=" d-flex">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-wifi text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Wifi</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-bold text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Listrik</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-tint text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Air</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-fan text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Kipas Angin</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-bed text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Kasur</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-toilet text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Kloset Duduk</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-couch text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Sofa</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                                    <div class="avatar avatar-lg rounded-circle border shadow">
                                        <i class="fas fa-bath text-dark" style="font-size: 16px"></i>
                                    </div>
                                    <p class="mb-0 mt-2 text-sm">Kamar Mandi Dalam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
