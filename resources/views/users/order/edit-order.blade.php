@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h1 class="text-4xl mb-0">
                    Change Order Detail
                </h1>
            </div>
            <div class="block-content block-content-full">
                <form method="POST" class="mb-5 order" action="{{ route('order.update', $order) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">Personal Information</h1>
                            <p class="text-muted">Fill out your personal information</p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Recipient's Name</label>
                                <input type="name" name="recipient_name" class="form-control"
                                    placeholder="Enter recipient's name ..." value="{{ $order->recipient_name }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Phone Number</label>
                                <input type="phone" name="phone_number" class="form-control"
                                    placeholder="Enter phone number ..." value="{{ $order->phone_number }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">Address</h1>
                            <p class="text-muted">Fill out your address</p>
                        </div>
                        <div class="class-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">City</label>
                                <input type="city" name="city" id="city" class="form-control"
                                    placeholder="City name ..." value="{{ $order->city }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">State/Province</label>
                                <input type="text" id="state" class="form-control" name="state"
                                    placeholder="State/Province name ..." value="{{ $order->state }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Postal Code</label>
                                <input type="text" id="postcal_code" class="form-control" name="postal_code"
                                    placeholder="Postal code number ..." value="{{ $order->postal_code }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Street Address</label>
                                <textarea class="form-control" name="address" id="address" rows="4" placeholder="Street address ..."required>{{ $order->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">Order Detail</h1>
                            <p class="text-muted">When, where, and price of your service</p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" placeholder="City name ..."
                                    value="{{ $order->date }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Time</label>
                                <input type="time" name="time" class="form-control" value="{{ $order->time }}"
                                    placeholder="State/Province name ..." required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Duration</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="duration" placeholder="00"
                                        value="{{ $order->duration }}" required>
                                    <span class="input-group-text">
                                        hours
                                    </span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Floor Size</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        Length x Width
                                    </span>
                                    <input type="text" class="form-control text-center" id="example-group1-input3"
                                        name="length" placeholder="00" value="{{ $order->floor_size }}" required>
                                    <span class="input-group-text">m&sup2;</span>
                                </div>

                            </div>
                            <div class="mb-4">
                                <label class="form-label">Number of Floors</label>
                                <input type="number" name="number_of_floors" class="form-control"
                                    placeholder="How many floors ..." value="{{ $order->number_of_floors }}" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Number of Workers</label>
                                <input type="number" name="total_personnel_ordered" class="form-control"
                                    placeholder="Amount of workers to deploy ..."
                                    value="{{ $order->total_personnel_ordered }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8 col-xl-5 d-flex justify-content-end space-x-2">
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="fa-regular fa-floppy-disk me-1"></i>
                                Save Order
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-cart-shopping me-1"></i>
                                Check Out
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
