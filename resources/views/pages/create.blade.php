@extends('layouts.app')
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Inputs</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('store-data') }}" method="POST">
                        @if (\Session::has('success'))
                          <div class="alert alert-primary">Data Successfully Added.</div>
                        @endif
                        @if (\Session::has('error'))
                          <div class="alert alert-primary">Some Thing Went Wrong, Try again.</div>
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