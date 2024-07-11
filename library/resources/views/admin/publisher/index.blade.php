@extends('layouts.admin')
@section('header', 'Publisher')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endSection

@section('content')
    <div id="controller">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="#" @click="addData()" data-target="#modal-default" data-toggle="modal"
                            class="btn-sm btn-primary pull-right">Create New Publisher</a>
                    </div>
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publishers as $key => $publisher)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $publisher->name }}</td>
                                        <td>{{ $publisher->email }}</td>
                                        <td>{{ $publisher->phone_number }}</td>
                                        <td>{{ $publisher->address }}</td>
                                        <td class="text-center">
                                            {{ date('H:i:s - d/m/Y', strtotime($publisher->created_at)) }}
                                        </td>
                                        <td class="text-right">
                                            <a href="#" @click="editData({{ $publisher }})"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <a href="#" @click="deleteData({{ $publisher->id }})"
                                                class="btn btn-sm btn-danger">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form :action="actionUrl" method="post" autocomplete="off">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Publisher</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name" :value="data.name" required="">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Enter Email" :value="data.email" required="">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control"
                                                placeholder="Enter Number" :value="data.phone_number" required="">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control"
                                                placeholder="Enter Address" :value="data.address" required="">
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

@section('js')
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $("#datatable").DataTable();
    });
</script>
    <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            data: {
                data: {},
                actionUrl: '{{ url('publishers') }}',
                editStatus: false
            },
            mounted: function() {

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('publishers') }}';
                    this.editStatus = false;
                    $('#modal-default').modal();
                },
                editData(data) {
                    this.data = data;
                    this.actionUrl = '{{ url('publishers') }}' + '/' + data.id;
                    this.editStatus = true;
                    $('#modal-default').modal();

                },
                deleteData(id) {
                    this.actionUrl = '{{ url('publishers') }}' + '/' + id;
                    if (confirm('Are you sure?')) {
                        axios.post(this.actionUrl, {
                            _method: 'DELETE'
                        }).then(response => {
                            location.reload();
                        })
                    }
                },
            }
        });
    </script>
@endSection
