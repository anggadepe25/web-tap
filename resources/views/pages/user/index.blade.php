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

                                        <form method="POST" action="{{route('user')}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group has-info">
                                                    <label>Nama</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('nama')?'is-invalid':''}}"
                                                           name="nama" value="{{old('nama')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('nama'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('nama')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-success">
                                                    <label>Foto</label>
                                                    <input type="file"
                                                           class="custom-file {{$errors->has('foto')?'is-invalid':''}}"
                                                           name="foto" value="{{old('foto')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('foto'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('foto')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group has-info">
                                                    <label>No HP</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('no_hp')?'is-invalid':''}}"
                                                           name="no_hp" value="{{old('no_hp')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('no_hp'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('no_hp')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-info">
                                                    <label>Password</label>
                                                    <input type="password"
                                                           class="form-control {{$errors->has('password')?'is-invalid':''}}"
                                                           name="nama" value="{{old('password')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('password')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-info">
                                                    <label>Branch</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('branch')?'is-invalid':''}}"
                                                           name="branch" value="{{old('branch')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('branch'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('branch')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>

                                                <select class="form-control" name="combo1" id="combo1">
                                                    <option value="">Branch</option>
                                                    <option value="Pekalongan">Pekalongan</option>
                                                    <option value="Purwokerto">Purwokerto</option>
                                                    <option value="Semarang">Semarang</option>
                                                    <option value="Solo">Solo</option>
                                                    <option value="Yogyakarta">Yogyakarta</option>
                                                </select>

                                                <p class="fw-600">
                                                    Jenis Kelamin
                                                </p>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                        Laki-Laki </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                        Perempuan</label>
                                                </div>

                                                <div class="form-group has-info">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date"
                                                           class="form-control {{$errors->has('tgl_lahir')?'is-invalid':''}}"
                                                           name="tgl_lahir" value="{{old('tgl_lahir')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('tgl_lahir'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('tgl_lahir')}}</b></p>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Tempat Tinggal</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('tempat_tinggal')?'is-invalid':''}}"
                                                           name="tempat_tinggal" value="{{old('tempat_tinggal')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('tempat_tinggal'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('tempat_tinggal')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Kampus</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('kampus')?'is-invalid':''}}"
                                                           name="kampus" value="{{old('kampus')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('kampus'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('kampus')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Jurusan</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('jurusan')?'is-invalid':''}}"
                                                           name="jurusan" value="{{old('jurusan')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('jurusan'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('jurusan')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Semester</label>
                                                    <input type="number"
                                                           class="form-control {{$errors->has('semester')?'is-invalid':''}}"
                                                           name="semester" value="{{old('semester')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('semester'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('semester')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Hobi</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('hobi')?'is-invalid':''}}"
                                                           name="hobi" value="{{old('hobi')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('hobi'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('hobi')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Instagram</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('instagram')?'is-invalid':''}}"
                                                           name="instagram" value="{{old('instagram')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('instagram'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('instagram')}}</b></p>
                                                         </span>
                                                    @endif
                                                </div>

                                                <div class="form-group has-warning">
                                                    <label>Point</label>
                                                    <input type="text"
                                                           class="form-control {{$errors->has('point')?'is-invalid':''}}"
                                                           name="point" value="{{old('point')}}"
                                                           placeholder=" ">
                                                    @if ($errors->has('point'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('point')}}</b></p>
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
                                        <button  class="btn btn-warning" data-toggle="modal" data-target="#edit{{$data->id}}">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <a href="{{route('news.destroy', $data->id)}}">
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