@extends('Tenant.Admin.layout.app')
@section('content')
    <div class="col-12">
        <div class="QA_section">
            <div class="white_box_tittle list_header">
                <h4>General Settings</h4>
                <div class="box_right d-flex lms_block">
                    <div class="serach_field_2">
                        <div class="search_inner">
                            <form active="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search content here...">
                                </div>
                                <button type="submit"> <i class="ti-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <div class="add_button ms-2">
                        {{-- <a href="{{ route('createNewsAlerts') }}" class="btn_1">Add New</a> --}}
                    </div>
                </div>
            </div>
            <div class="QA_table mb_30">
                <form method="POST" action="{{ route('updateGeneralSettings') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="white_box">
                        <div class="box_header">
                            <h5 class="mb-0">Change general settings of main site</h5>
                        </div>
                        <div class="row p-3">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                    {{-- Display existing logo if available --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="favicon">Favicon</label>
                                    <input type="file" class="form-control" id="favicon" name="favicon">
                                    {{-- Display existing favicon if available --}}
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn_1">Update</button>
                            </div>
                        </div>
                    </div>

                    <div class="white_box mt-4">
                        <div class="box_header">
                            <h5 class="mb-0">Contact Information</h5>
                        </div>
                        <div class="row p-3">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="phone_number">Phone number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="whatsapp_id">Whatsapp Id</label>
                                    <input type="text" class="form-control" id="whatsapp_id" name="whatsapp_id">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="availability_days">Availability days</label>
                                    <input type="text" class="form-control" id="availability_days" name="availability_days">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="availability_hours">Availability hours</label>
                                    <input type="text" class="form-control" id="availability_hours" name="availability_hours">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description">
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn_1">Update</button>
                            </div>
                        </div>
                    </div>

                    <div class="white_box mt-4">
                        <div class="box_header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Address</h5>
                            <a href="#" class="btn_1">Add New</a>
                        </div>
                        <div class="p-3">
                            {{-- Here you would likely loop through existing addresses or have a mechanism to add new address fields dynamically using JavaScript --}}
                            <div class="mb-3">
                                <label class="form-label" for="address_1">Address Line 1</label>
                                <input type="text" class="form-control" id="address_1" name="address[]">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="address_2">Address Line 2 (Optional)</label>
                                <input type="text" class="form-control" id="address_2" name="address[]">
                            </div>
                            {{-- Add more address fields as needed --}}
                        </div>
                        <div class="p-3 text-end">
                            <button type="submit" class="btn_1">Update</button>
                        </div>
                    </div>

                    <div class="white_box mt-4">
                        <div class="box_header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Application Key</h5>
                            <a href="#" class="btn_1">Add New</a>
                        </div>
                        <div class="p-3">
                            {{-- Display existing application keys here --}}
                            <p>No application keys added yet.</p>
                        </div>
                        {{-- You might have a separate section or modal for adding new application keys --}}
                    </div>

                    <div class="white_box mt-4">
                        <div class="box_header">
                            <h5 class="mb-0">Social Links Information</h5>
                        </div>
                        <div class="row p-3">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="facebook">Facebook</label>
                                    <input type="url" class="form-control" id="facebook" name="facebook">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="twitter">Twitter</label>
                                    <input type="url" class="form-control" id="twitter" name="twitter">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="instagram">Instagram</label>
                                    <input type="url" class="form-control" id="instagram" name="instagram">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="linkedin">LinkedIn</label>
                                    <input type="url" class="form-control" id="linkedin" name="linkedin">
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn_1">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection