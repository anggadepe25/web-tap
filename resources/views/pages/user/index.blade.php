<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 01/04/2020
 * Time: 21:45
 */ ?>

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
                                            <h1>Data Akun</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-md-end d-md-flex">
                                        {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>--}}
                                        <a href="{{route('user.create')}}" type="button" class="btn btn-primary">Tambah</a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Branch</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Tinggal</th>
                                <th>Kampus</th>
                                <th>point</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->nohp}}</td>
                                    <td>{{$data->branch}}</td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td>{{$data->tgl_lahir}}</td>
                                    <td>{{$data->tempat_tinggal}}</td>
                                    <td>{{$data->kampus}}</td>
                                    <td>{{$data->point}}</td>
                                    <td>
                                        <a href="{{route('user.destroy', $data->id)}}">
                                            <button class="btn btn-danger "
                                                    onclick="return confirm('Apakah Anda Yakin Akan Mengapus Data Ini')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal Edit-->
                                <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form method="POST" action="{{route('news.update',$data->id)}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                {{method_field('PATCH')}}
                                                <div class="modal-body">
                                                    {{--Judul--}}
                                                    <div class="form-group has-info">
                                                        <label>Judul</label>
                                                        <input type="text"
                                                               class="form-control {{$errors->has('judul')?'is-invalid':''}}"
                                                               name="judul" value="{{$data->judul}}">
                                                        @if ($errors->has('judul'))
                                                            <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('judul')}}</b></p>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    {{--Gambar--}}
                                                    <div class="form-group has-success">
                                                        <label>Gambar</label>
                                                        <input type="hidden" name="old_gambar" class="form-control" value="{{$data->gambar}}"/>
                                                        <input type="file"
                                                               class="custom-file {{$errors->has('gambar')?'is-invalid':''}}"
                                                               name="gambar" onchange="loadfile(event)" id="gambar"/>

                                                        <img id="output"  class="img-fluid" height="40" width="60"
                                                             src="{{asset('uploads/admin/'.$data->gambar)}}">
                                                        @if ($errors->has('gambar'))
                                                            <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('gambar')}}</b></p>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    {{--Deskripsi--}}
                                                    <div class="form-group has-info">
                                                        <label>Deskripsi</label>
                                                        <textarea type="textarea" name="deskripsi"
                                                                  class="form-control {{$errors->has('deskripsi')?'is-invalid':''}}">{{$data->deskripsi}}</textarea>
                                                        @if ($errors->has('deskripsi'))
                                                            <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('deskripsi')}}</b></p>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>

                                            </form>


                                        </div>
                                    </div>
                                </div>


                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection