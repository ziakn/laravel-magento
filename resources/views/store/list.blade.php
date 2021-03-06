@extends('layouts.app')
@section('content')
    <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Data</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Table with outer spacing -->
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Image</th>
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
                                                        <td>{{ $item->id }}</td>
                                                        <td>   <div class="avatar bg-rgba-primary m-0 me-50">
                                                        <img src="{{ $item->myFile?$item->myFile:'/assets/images/faces/3.jpg' }}" alt="" srcset="">
                                                    </div></td>
                                                        <td class="text-bold-500">{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td class="text-bold-500">{{ $item->mobile }}</td>
                                                        <td class="text-bold-500">{{  Str::limit(strip_tags($item->address),15)  }}</td>
                                                        <td class="text-bold-500">
                                                          @can('storedata-edit')
                                                        <a href="{{ url('edit-data', $item->id) }}"><i class="bi bi-pencil"></i></a>
                                                         @endcan 
                                                        @can('storedata-delete')
                                                         &nbsp&nbsp&nbsp
                                                        <a href="{{ url('delete-data', $item->id) }}"><i class="bi bi-trash"></i></a></td>
                                                         @endcan 
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
