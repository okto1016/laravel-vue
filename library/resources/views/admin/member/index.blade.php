@extends('layouts.admin')
@section('header', 'member')
@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <a href="{{ url('members/create') }}" class="btn-sm btn-primary pull-right">Create New Member</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $key => $member)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->phone_number }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->address }}</td>                               
                                <td class="text-center">{{ date('H:i:s - d/m/Y', strtotime($member->created_at)) }}
                                </td>
                                <td class="text-center"><a href="{{ url('members/' . $member->id . '/edit') }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ url('members', ['id' => $member->id]) }}" method="POST">
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete"
                                            onclick="return confirm('Are you sure?')">
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div> --}}
        </div>
    </div>
</div>
@endSection