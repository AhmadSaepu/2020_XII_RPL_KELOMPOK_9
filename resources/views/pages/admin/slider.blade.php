@extends('master.master-admin')
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="col-10 float-left">
                    <h4 class="card-title">Daftar Kategori</h4>
                </div>
                <div class="col-2 float-right">

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table data-table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th width="10%">Image</th>
                            <th>Judul Image</th>
                            <th width="15%" class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slider as $key => $data)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td><img class="rounded img-fluid avatar-100"
                                         src="{{URL::to('images/slider/'.$data->image_name)}}" alt="profile"></td>
                                <td>{{$data->image_title}}</td>
                                <td>
                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#changeBanner{{$data->id}}">Ganti
                                    Banner
                                </button>
                                </td>


                            </tr>

                            <div class="modal fade" id="changeBanner{{$data->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby=""
                                 aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-gradient-warning">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">{{$data->image_title}}</h5>
                                            <button type="button" data-toggle="modal" data-target="#addCategory"
                                                    class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{url('dashboard/slider/change', $data->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Upload Image</label>
                                                    <input type="file" name="img"
                                                           class="form-control">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="Submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




