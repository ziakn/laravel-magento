@extends('layouts.app')
@section('content')
    <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Table with outer spacing</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>NAME</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $key => $item)
                                                    <tr>
                                                        <td class="text-bold-500">{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td class="text-bold-500">{{ $item->mobile }}</td>
                                                        <td class="text-bold-500">{{ $item->address }}</td>
                                                        <td class="text-bold-500">UI/UX</td>

                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@stop
