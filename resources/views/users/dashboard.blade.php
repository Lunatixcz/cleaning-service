@extends('layouts.app')

@vite(['resources/css/app.scss'])
@section('content')
    <div class="bg-image"
        style="background-image: url('https://images.unsplash.com/photo-1627905646269-7f034dcc5738?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-position-y: 75%">
        <div class="bg-black-25">
            <div class="content content-top text-center">
                <div class="py-5">
                    <h1 class="text-white mb-2" style="font-size : 8rem">Daily Clean</h1>
                    <h2 class="h3 fw-normal text-white mb-4">We are the best cleaning service provider in
                        Medan</h2>
                    <a href="{{ route('order.create') }}" class="btn btn-outline-light" data-toggle="ripple-effect"
                        style="padding: 12px 48px; font-size: 1.25rem; border-radius: 8px">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 bg-white js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="-200">
        <div class="content text-center">
            <div class="content-heading">
                <h1 style="color: rgb(2 132 199); font-size:4rem">Problems</h1>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-sm-4">
                    <div class="block block-bordered block-rounded js-appear-enabled animated fadeIn" data-toggle="appear"
                        data-offset="-200">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="item item-2x item-circle bg-primary-light text-white mx-auto">
                                    <i class="si si-clock text-white fa-3x"></i>
                                </div>
                                <div class="h4 pt-3 mb-1">Time</div>
                                <p>Not everybody have the time <br> to clean their house</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block block-bordered block-rounded js-appear-enabled animated fadeIn" data-toggle="appear"
                        data-offset="-200">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="item item-2x item-circle bg-warning text-white mx-auto">
                                    <i class="si si-energy text-white fa-3x"></i>
                                </div>
                                <div class="h4 pt-3 mb-1">Energy</div>
                                <p>After long day of works, not everyone has the energy to clean the house</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block block-bordered block-rounded js-appear-enabled animated fadeIn" data-toggle="appear"
                        data-offset="-200">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="item item-2x item-circle bg-danger text-white mx-auto">
                                    <i class="far fa-tired fa-3x"></i>
                                </div>
                                <div class="h4 pt-3 mb-1">Stress</div>
                                <p>Seeing messy house could make your mood worse</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3 bg-primary js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="-200">
        <div class="content text-white d-flex">
            <div class="col-sm-6 d-flex align-items-center">
                <div>
                    <div>
                        <p class="fs-1 mb-0 fw-light">We have the</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <h1 class="fw-bold" style="font-size:6rem; margin-top:-2vh">Solution</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-5 mb-4">
                <div class="row mb-3 js-appear-enabled animated fadeIn d-flex" data-toggle="appear" data-offset="-200">
                    <div class="col-auto">
                        <div class="item item-2x item-circle bg-white text-primary mx-auto">
                            <i class="fa fa-hourglass-end text-primary fa-3x"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text" style="height:100%">
                            <div class="h1 mb-1 pt-2">Saving Time</div>
                            <p>You can let us handle the cleaning</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 js-appear-enabled animated fadeIn d-flex" data-toggle="appear" data-offset="-200">
                    <div class="col-auto">
                        <div class="item item-2x item-circle bg-white text-primary mx-auto">
                            <i class="fa-regular fa-face-smile text-primary fa-3x"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text" style="height:100%">
                            <div class="h1 mb-1 pt-2">Reduce Stress</div>
                            <p>Come home to a clean house</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 js-appear-enabled animated fadeIn d-flex" data-toggle="appear" data-offset="-200">
                    <div class="col-auto">
                        <div class="item item-2x item-circle bg-white text-primary mx-auto">
                            <i class="fa-solid fa-bed text-primary fa-3x"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text" style="height:100%">
                            <div class="h1 mb-1 pt-2">Save Your Energy</div>
                            <p>Don't need to waste your energy just to clean your house</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 js-appear-enabled animated fadeIn d-flex" data-toggle="appear" data-offset="-200">
                    <div class="col-auto">
                        <div class="item item-2x item-circle bg-white text-primary mx-auto">
                            <i class="fa-solid fa-house-medical text-primary fa-3x"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text" style="height:100%">
                            <div class="h1 mb-1 pt-2">Clean House</div>
                            <p>Live a healthy life with a clean house</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section-3 bg-white">
        <div class="content">
            <div class="row mt-5 mb-5">
                <div class="col-sm-4">
                    <div class="block block-rounded block-bordered">
                        <div class="block-content">
                            <x-application-logo />
                            <p>We are a website that provides professional cleaning services trusted by many businesses, to
                                assist our tired customers in cleaning their homes. Our main targets are discipline,
                                quality,
                                and honesty assurance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <p class="mb-0 fw-bold">Our Service</p>
                        </div>
                        <div class="block-content">
                            <ol>
                                <li>Clean your house</li>
                                <li>Clean your yard</li>
                                <li>Clean your office</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <p class="mb-0 fw-bold">Our Contact</p>
                        </div>
                        <div class="block-content">
                            <ul style="list-style: none">
                                <li><i class="fa-solid fa-phone"></i> +62 1234-5678-4321</li>
                                <li><i class="fa-brands fa-whatsapp"></i> +62 1234-5678-4321</li>
                                <li><i class="fa-solid fa-at"></i> dailyclean@daily.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
