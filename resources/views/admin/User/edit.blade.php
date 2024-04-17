@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Edit User Data
                </h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('adminUser.update', $user->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <h1 class="h3 mb-1">User Information</h1>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label">Name</label>
                                <h1 class="h2 mb-4">{{ $user->name}}</h1>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email</label>
                                <h1 class="h2 mb-4">{{ $user->email}}</h1>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Created</label>
                                <h1 class="h2 mb-4">{{ $user->created_at->format('d-m-Y')}}</h1>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Level</label>
                                <h1 class="h2 mb-4">{{ $user->level}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8 col-xl-5 d-flex justify-content-end space-x-2">
                            <form action="{{ route('adminUser.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-fw fa-trash"></i>
                                    Delete User
                                </button>
                            </form>
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
