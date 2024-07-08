@extends('layouts.admin')
@section('header', 'Book')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Book</h3>
                </div>


                <form action="{{ url('books/' . $book->id) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                                <th class="text-center">Isbn</th>
                                <input type="text" name="isbn" class="form-control" placeholder="Enter Isbn" value="{{ $book->isbn }}"
                                    required="">
                                <th class="text-center">Title</th>
                                <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $book->title }}"
                                    required="">
                                <th class="text-center">Year</th>
                                <input type="text" name="year" class="form-control" placeholder="Enter Year" value="{{ $book->year }}"
                                    required="">
                                <th class="text-center">Publisher id</th>
                                <select name="publisher_id" class="form-control" required="" value="{{ $book->publisher_id}}" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <th class="text-center">Author id</th>
                                <select name="author_id" class="form-control" required="" value="{{ $book->author_id}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <th class="text-center">Catalog id</th>
                                <select name="catalog_id" class="form-control" required="" value="{{ $book->catalog_id}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <th class="text-center">Qty</th>
                                <input type="text" name="qty" class="form-control" placeholder="Enter Qty" value="{{ $book->qty }}"
                                    required="">
                                <th class="text-center">Price</th>
                                <input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{ $book->price }}"
                                    required="">
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
