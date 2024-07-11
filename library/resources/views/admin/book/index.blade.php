@extends('layouts.admin')
@section('header', 'Book')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('books/create') }}" class="btn-sm btn-primary pull-right">Create New Book</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th class="text-center">Isbn</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Publisher id</th>
                                <th class="text-center">Author id</th>
                                <th class="text-center">Catalog id</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $book->isbn }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->year }}</td>
                                    <td>{{ $book->publisher_id }}</td>
                                    <td>{{ $book->author_id }}</td>
                                    <td>{{ $book->catalog_id }}</td>
                                    <td>{{ $book->qty }}</td>
                                    <td>{{ $book->price }}</td>
                                    <td class="text-center">{{ date('H:i:s - d/m/Y', strtotime($book->created_at)) }}
                                    </td>
                                    <td class="text-center row"><a href="{{ url('books/' . $book->id . '/edit') }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ url('books', ['id' => $book->id]) }}" method="POST">
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
