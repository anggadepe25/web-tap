<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 02/04/2020
 * Time: 14:56
 */?>

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
                                            <h1>Data Panduan</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-md-end d-md-flex">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#tambah">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Tambah-->
                            <div class="modal fade" id="tambah" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form method="POST" action="{{route('panduan.store')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group has-info">
                                                    <label>Judul</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('judul')?'is-invalid':''}}"
                                                           name="judul" value="{{old('judul')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('judul'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('judul')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-warning">
                                                    <label>Deskripsi</label>
                                                    <textarea type="textarea"
                                                              class="form-control {{$errors->has('deskripsi')?'is-invalid':''}}"
                                                              name="deskripsi" value="{{old('gambar')}}"
                                                              placeholder=" "></textarea>
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

                        </div>



                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->judul}}</td>
                                    <td>{{$data->deskripsi}}</td>
                                    <td>
                                        <a href="#">
                                            <button  class="btn btn-warning" data-toggle="modal" data-target="#edit{{$data->id}}">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="{{route('panduan.destroy', $data->id)}}">
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

                                            <form method="POST" action="{{route('panduan.update', $data->id)}}"
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
