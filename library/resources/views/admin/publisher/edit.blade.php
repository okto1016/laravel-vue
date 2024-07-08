@extends('layouts.admin')
@section('header', 'Publisher')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Publisher</h3>
                </div>


                <form action="{{ url('publishers/' . $publisher->id) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                                <th class="text-center">Name</th>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                    value="{{ $publisher->name }}" required="">
                                <th class="text-center">Email</th>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                    value="{{ $publisher->email }}" required="">
                                <th class="text-center">Phone Number</th>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter Number"
                                    value="{{ $publisher->phone_number }}" required="">
                                <th class="text-center">Address</th>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                    value="{{ $publisher->address }}" required="">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" fdprocessedid="oucjp">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endSection
