@extends('Tenant.Admin.layout.app')
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
                <h5 class="modal-title text_white">Create News Alert</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action={{ route('storeNewsAlert') }}>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" value="{{ old('title') }}" name="title" placeholder="Enter title">
                        </div>
                        <div class="col-md-6">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" value="{{ old('type') }}" name="type" placeholder="Enter type">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" placeholder="Enter message">{{ old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="meta">Meta Data (JSON)</label>
                            <textarea class="form-control" name="meta" placeholder='{"key":"value"}'>{{ old('meta') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="expired_at">Expiration Date</label>
                            <input type="datetime-local" class="form-control" value="{{ old('expired_at') }}" name="expired_at">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center">
                            <label class="switch">
                                <input type="checkbox" name="is_featured" value="1">
                                <span class="slider"></span>
                            </label>
                            <span class="switch-text p-3"> Featured </span>
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
