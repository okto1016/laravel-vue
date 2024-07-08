@extends('layouts.admin')
@section('header', 'Author')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Author</h3>
            </div>
            <form action="{{ url('authors') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="card-body">
                        <div class="form-group">
                            <th class="text-center">Name</th>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                value="" required="">
                            <th class="text-center">Email</th>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                value="" required="">
                            <th class="text-center">Phone Number</th>
                            <input type="text" name="phone_number" class="form-control" placeholder="Enter Number"
                                value="" required="">
                            <th class="text-center">Address</th>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                value="" required="">
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