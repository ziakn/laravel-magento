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
                                                        <th>NAME</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data as $key => $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td class="text-bold-500">{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td class="text-bold-500">
                                                        @can('user-edit')
                                                        <a href="{{ url('edit-password') }}"><i class="bi bi-lock"></i></a>
                                                        @endcan
                                                        &nbsp&nbsp&nbsp
                                                        <a href="{{ url('edit-user', $item->id) }}"><i class="bi bi-pencil"></i></a>&nbsp&nbsp&nbsp
                                                        @can('user-delete')
                                                        @if($item->id != 1) 
                                                        <a href="{{ url('delete-user', $item->id) }}"><i class="bi bi-trash"></i></a></td>
                                                        @endif
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
