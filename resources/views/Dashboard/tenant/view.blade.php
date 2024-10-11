@extends('layout.app')
@section('content')
    <div class="col-12">
        <div class="QA_section">
            <div class="white_box_tittle list_header">
                <h4>Tenants</h4>
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
                        <a href="{{ route('createTenant') }}" class="btn_1">Add New</a>
                    </div>
                </div>
            </div>
            <div class="QA_table mb_30">

                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                    <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_0"
                        role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1200px;">
                        <thead>
                            <tr role="row">
                                <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 94px;" aria-sort="ascending"
                                    aria-label="title: activate to sort column descending">ID</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 138px;"
                                    aria-label="Category: activate to sort column ascending">Domain</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 139px;"
                                    aria-label="Teacher: activate to sort column ascending">Contact</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 132px;"
                                    aria-label="Lesson: activate to sort column ascending">Email</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 94px;"
                                    aria-label="Enrolled: activate to sort column ascending">DB Name</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 110px;"
                                    aria-label="Status: activate to sort column ascending">Status</th>
                                <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 73px;"
                                    aria-label="Price: activate to sort column ascending">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $tenant)
                                {{-- @dd($tenant); --}}
                                <tr role="row" class="odd">
                                    <th scope="row" tabindex="0" class="sorting_1"> <a href="#"
                                            class="question_content"> {{ $tenant->id }}</a></th>
                                    <td><a target="_blank" href="http://{{ $tenant?->domains?->first()->domain }}">{{ $tenant?->domains?->first()->domain }}</a>

                                    </td>
                                    <td>{{ $tenant->contact }}</td>
                                    <td>{{ $tenant->email }}</td>
                                    <td>{{ $tenant->tenancy_db_name }}</td>
                                    <td><a href="#" class="status_btn">Active</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
