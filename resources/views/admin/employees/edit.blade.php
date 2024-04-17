@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Edit Employee's Data
                </h3>
            </div>
            <div class="block-content block-content-full">
                <form method="POST" class="mb-5 order" action="{{ route('employees.update', $employee) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">Employee's Information</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Employee's ID</label>
                                <h1 class="h3">{{ 'ST-'.$employee->id }}</h1>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Employee's Name</label>
                                <input type="name" name="name" class="form-control" value="{{ $employee->name }}"
                                    placeholder="Enter employee's name ..." required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Employee's Username</label>
                                <input type="name" name="username" class="form-control" value="{{ $employee->username }}"
                                    placeholder="Enter employee's username ..." required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Street Address</label>
                                <textarea class="form-control" name="address" id="address" rows="4" placeholder="Street address ..." required>{{ $employee->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">Salary</h1>
                        </div>
                        <div class="class-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Salary's amount</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                      Rp.
                                    </span>
                                    <input type="text" class="form-control text-center" id="example-group1-input3" name="salary" placeholder="00" value="{{ $employee->salary }}">
                                    <span class="input-group-text">,00</span>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8 col-xl-5 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-plus"></i>
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
