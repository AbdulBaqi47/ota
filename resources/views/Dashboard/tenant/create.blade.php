@extends('layout.app')
@section('content')

    <div class="col-md-12">

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="modal-content cs_modal">
            <div class="modal-header justify-content-center theme_bg_1">
                <h5 class="modal-title text_white">Create Tenant</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action={{ route('storeTenant') }}>
                    @csrf
                    <div class="row">


                        <div class="col-md-6">
                            <label for="tenant_name">Enter Company Name</label>
                            <input type="text" class="form-control" value="{{ old('tenant_name') }}" name="tenant_name"
                                placeholder="Enter your Company Name" required>
                            {{-- <span class=""></span> --}}
                        </div>
                        <div class="col-md-6">
                            <label for="name">Enter Name</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                placeholder="Enter your Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tenant_contact">Enter Company Contact Number</label>
                            <input type="text" class="form-control" value="{{ old('tenant_contact') }}"
                                name="tenant_contact" placeholder="Enter your Company Contact Number">
                        </div>
                        <div class="col-md-6">
                            <label for="tenant_email">Enter Email</label>
                            <input type="email" class="form-control" value="{{ old('tenant_email') }}" name="tenant_email"
                                placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="tenant_address">Enter Company Address</label>
                            <input type="text" class="form-control" value="{{ old('tenant_address') }}"
                                name="tenant_address" placeholder="Enter your Company Address">
                        </div>
                        <div class="col-md-6">
                            <label for="tenant_password">Enter Password</label>
                            <input type="password" class="form-control" value="{{ old('tenant_password') }}"
                                name="tenant_password" placeholder="Password">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <label class="switch">
                                <input type="checkbox" name="tenant_status" checked>
                                <span class="slider"></span>
                            </label>
                            <span class="switch-text p-3"> Active/Deactive </span>
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
