@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('update-user') }}" method="POST" enctype="multipart/form-data">
                            @if (\Session::has('success'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    Data Successfully Added.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (\Session::has('error'))
                                <div class="alert alert-danger alert-dismissible show fade">
                                    Some Thing Went Wrong, Try again.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <input type="hidden" name="id" value={{ $data->id }} />
                            <div class="form-group">
                                <label for="basicInput">Name</label>
                                <input type="text" class="form-control" id="basicInput" name="name"
                                    value="{{ $data->name }}" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Email</label>
                                <input disabled type="text" class="form-control" id="basicInput" name="email"
                                    value="{{ $data->email }}" placeholder="Enter Email">
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@stop
