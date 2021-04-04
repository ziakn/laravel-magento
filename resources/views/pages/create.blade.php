@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create Data</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('store-data') }}" method="POST" enctype="multipart/form-data">
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
                            @csrf
                            <div class="form-group">
                                <label for="basicInput">Name</label>
                                <input type="text" class="form-control" id="basicInput" name="name"
                                    placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Email</label>
                                <input type="text" class="form-control" id="basicInput" name="email"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Mobile</label>
                                <input type="text" class="form-control" id="basicInput" name="mobile"
                                    placeholder="Enter Mobile">
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Address</label>
                                <textarea type="text" class="form-control" id="basicInput" name="address"
                                    placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group">
                                                <label for="formFile" class="form-label">Image</label>
                                                <input class="form-control" type="file" name="myFile" id="formFile">
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
