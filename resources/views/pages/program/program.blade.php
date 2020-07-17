@extends('template.default')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="justify-content-md-end d-flex">

                            <!-- Button trigger modal -->

                            <div class="container-fluid">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="card-title">
                                            <h1>Data Program</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-md-end d-md-flex">
                                        {{--<button type="button" class="btn btn-primary" data-toggle="modal"--}}
                                                {{--data-target="#tambah">--}}
                                            {{--Tambah--}}
                                        {{--</button>--}}
                                        <a href="{{route('program.create')}}" type="button" class="btn btn-primary">Tambah</a>

                                    </div>
                                </div>
                            </div>



                        </div>


                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Panduan</th>
                                <th>Tanggal Pengumpulan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->judul}}</td>
                                    <td><img src="{{asset($data->gambar)}}" width="60" height="40">
                                    </td>
                                    <td>{{$data->panduan}}</td>
                                    <td>{{$data->tanggal_mulai_pengumpulan}}</td>
                                    <td>
                                        <a href="{{route('program.edit', $data->id)}}">
                                            <button class="btn btn-warning" >
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('program.destroy', $data->id)}}">
                                            <button class="btn btn-danger "
                                                    onclick="return confirm('Apakah Anda Yakin Akan Mengapus Data Ini')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal Edit-->
                                {{--<div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog"--}}
                                     {{--aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                                    {{--<div class="modal-dialog modal-dialog-centered" role="document">--}}
                                        {{--<div class="modal-content">--}}
                                            {{--<div class="modal-header">--}}
                                                {{--<h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>--}}

                                                {{--<button type="button" class="close" data-dismiss="modal"--}}
                                                        {{--aria-label="Close">--}}
                                                    {{--<span aria-hidden="true">&times;</span>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}

                                            {{--<form method="POST" action="{{route('program.update', $data->id)}}"--}}
                                                  {{--enctype="multipart/form-data">--}}
                                                {{--@csrf--}}
                                                {{--{{method_field('PATCH')}}--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--Judul--}}
                                                    {{--<div class="form-group has-info">--}}
                                                        {{--<label>Judul</label>--}}
                                                        {{--<input type="text"--}}
                                                               {{--class="form-control {{$errors->has('judul')?'is-invalid':''}}"--}}
                                                               {{--name="judul" value="{{$data->judul}}">--}}
                                                        {{--@if ($errors->has('judul'))--}}
                                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                            {{--<p><b>{{$errors->first('judul')}}</b></p>--}}
                                                        {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                    {{--<div class="form-group has-success">--}}
                                                        {{--<label>Gambar</label>--}}
                                                        {{--<input type="hidden" name="old_gambar" class="form-control"--}}
                                                               {{--value="{{$data->gambar}}"/>--}}
                                                        {{--<input type="file" name="gambar" onchange="loadfile(event)" id="gambar"--}}
                                                               {{--class="custom-file {{$errors->has('gambar')?'is-invalid':''}}"--}}
                                                        {{--value="{{ old('gambar') }}"/>--}}
                                                                {{--<img id="output" class="img-fluid" height="40" width="60"--}}
                                                             {{--src="{{asset('uploads/admin/'.$data->gambar)}}">--}}
                                                        {{--@if ($errors->has('gambar'))--}}
                                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                            {{--<p><b>{{$errors->first('gambar')}}</b></p>--}}
                                                        {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                    {{--Deskripsi--}}
                                                    {{--<div class="form-group has-info">--}}
                                                        {{--<label>Panduan</label>--}}
                                                        {{--<textarea type="textarea" name="panduan"--}}
                                                                  {{--class="form-control {{$errors->has('panduan')?'is-invalid':''}}">{{$data->panduan}}</textarea>--}}
                                                        {{--@if ($errors->has('panduan'))--}}
                                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                            {{--<p><b>{{$errors->first('panduan')}}</b></p>--}}
                                                        {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                    {{--<div class="form-group has-warning">--}}
                                                        {{--<label>Tanggal Pengumpulan</label>--}}
                                                        {{--<input type="date"--}}
                                                               {{--class="form-control {{$errors->has('tanggal_mulai_pengumpulan')?'is-invalid':''}}"--}}
                                                               {{--name="tanggal_mulai_pengumpulan" value="{{ $data->tanggal_mulai_pengumpulan }}"--}}
                                                               {{--placeholder=" ">--}}
                                                        {{--@if ($errors->has('tanggal_mulai_pengumpulan'))--}}
                                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                            {{--<p><b>{{$errors->first('tanggal_mulai_pengumpulan')}}</b></p>--}}
                                                        {{--</span>--}}
                                                        {{--@endif--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                                {{--<div class="modal-footer">--}}
                                                    {{--<button type="submit" class="btn btn-secondary"--}}
                                                            {{--data-dismiss="modal">--}}
                                                        {{--Close--}}
                                                    {{--</button>--}}
                                                    {{--<button type="submit" class="btn btn-primary">Save changes</button>--}}
                                                {{--</div>--}}

                                            {{--</form>--}}


                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var loadfile = function (event) {
            var foto = document.getElementById('gambar');
            var output = document.getElementById('output');
            if (foto) {
                output.src = URL.createObjectURL(event.target.files[0]);
            }
        };
    </script>
@endsection