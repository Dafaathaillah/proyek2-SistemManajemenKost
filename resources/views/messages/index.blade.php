@extends('layouts.master')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pesan</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Pesan</h6>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-xl-4 mt-xl-0 mt-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Conversations</h6>
            </div>
            <div class="card-body p-3 w-auto h-auto max-height-vh-100 h-100 overflow-auto">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Sophie B.</h6>
                            <p class="mb-0 text-xs">Hi! I need more information..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Anne Marie</h6>
                            <p class="mb-0 text-xs">Awesome work, can you..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Ivanna</h6>
                            <p class="mb-0 text-xs">About files I can..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Peterson</h6>
                            <p class="mb-0 text-xs">Have a great afternoon..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Nick Daniel</h6>
                            <p class="mb-0 text-xs">Hi! I need more information..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/kal-visuals-square.jpg" alt="kal"
                                class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Sophie B.</h6>
                            <p class="mb-0 text-xs">Hi! I need more information..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Anne Marie</h6>
                            <p class="mb-0 text-xs">Awesome work, can you..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/ivana-square.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Ivanna</h6>
                            <p class="mb-0 text-xs">About files I can..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Peterson</h6>
                            <p class="mb-0 text-xs">Have a great afternoon..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                            <img src="../../../assets/img/team-3.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Nick Daniel</h6>
                            <p class="mb-0 text-xs">Hi! I need more information..</p>
                        </div>
                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-8 mt-xl-0 mt-4">
        <div class="card h-100">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Anne Marie</h6>
            </div>
            <div class="card-body p-3 w-auto h-auto max-height-vh-90 h-90 overflow-auto">
                <div class="mb-1">
                    <div class="d-flex mt-3">
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="../../../assets/img/marie.jpg">
                        </div>
                        <div class="flex-grow-1 ms-3 me-6">
                            <p class="text-sm">I always felt like I could do anything. That’s the main thing people are
                                controlled by! Thoughts- their perception of themselves!</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-6 me-3">
                            <p class="text-sm">Society has put up so many boundaries, so many limitations on what’s
                                right and wrong that it’s almost impossible to get a pure thought out. It’s like a
                                little kid, a little boy.</p>
                            <p class="text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium a
                                nemo amet quia earum quas tenetur maiores, quaerat odit et adipisci deleniti accusamus
                                ipsa nesciunt. Facilis, maxime. Sit, et quibusdam.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="./../../assets/img/bruce-mars.jpg">
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="../../../assets/img/marie.jpg">
                        </div>
                        <div class="flex-grow-1 ms-3 me-6">
                            <p class="text-sm">A wonderful serenity has taken possession of my entire soul, like these
                                sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the
                                charm of existence in this spot, which was created for the bliss of souls like mine.
                            </p>
                            <p class="text-sm">I am so happy, my dear friend, so absorbed in the exquisite sense of mere
                                tranquil existence, that I neglect my talents.
                            </p>
                            <p class="text-sm">I should be incapable of drawing a single stroke at the present moment;
                                and yet I feel that I never was a greater artist than now.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-6 me-3">
                            <p class="text-sm">When, while the lovely valley teems with vapour around me, and the
                                meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but
                                a few stray gleams steal into the inner sanctuary, I throw myself down among the tall
                                grass by the trickling stream; and, as I lie close to the earth, a thousand unknown
                                plants are noticed by me: when I hear the buzz of the little world among the stalks, and
                                grow familiar with the countless indescribable forms of the insects and flies, then I
                                feel the presence of the Almighty, who formed us in his own image, and the breath</p>
                        </div>
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="./../../assets/img/bruce-mars.jpg">
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="../../../assets/img/marie.jpg">
                        </div>
                        <div class="flex-grow-1 ms-3 me-6">
                            <p class="text-sm">I am so happy, my dear friend, so absorbed in the exquisite sense of mere
                                tranquil existence, that I neglect my talents.
                            </p>
                            <p class="text-sm">I should be incapable of drawing a single stroke at the present moment;
                                and yet I feel that I never was a greater artist than now.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-grow-1 ms-6 me-3">
                            <p class="text-sm">When, while the lovely valley teems with vapour around me, and the
                                meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but
                                a few stray gleams steal into the inner sanctuary, I throw myself down among the tall
                                grass by the trickling stream.</p>
                        </div>
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="./../../assets/img/bruce-mars.jpg">
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="flex-shrink-0">
                            <img alt="Image placeholder" class="avatar rounded-circle"
                                src="../../../assets/img/marie.jpg">
                        </div>
                        <div class="flex-grow-1 ms-3 me-6">
                            <p class="text-sm">I feel the presence of the Almighty, who formed us in his own image.</p>
                            <p class="text-sm">Awesome work, can you describe these conceptions?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer p-3">
                <div class="d-flex">
                    <div class="flex-grow-1 my-auto">
                        <form>
                            <textarea class="form-control" placeholder="Write your comment" rows="2"></textarea>
                        </form>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="btn bg-gradient-primary m-0 ms-2 h-100">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
