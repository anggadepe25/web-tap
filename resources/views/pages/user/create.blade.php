@extends('template.default')
@section('content')
    <div class="container-fluid">
        <!-- state start-->
        <div class="row">
            <div class=" col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Data Akun
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control {{$errors->has('nama')?'is-invalid':''}}"
                                           name="nama" placeholder="Masukan Nama Anda" value="{{ old('nama') }}">
                                    @if ($errors->has('nama'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('nama') }}</b></p>
                                        </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <label>No Hp</label>
                                    <input type="tel" class="form-control {{$errors->has('nohp')?'is-invalid':''}}"
                                           name="nohp" placeholder="Masukan NoHp Anda" value="{{ old('nohp') }}">
                                    @if ($errors->has('nohp'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('nohp') }}</b></p>
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlSele  ct1">Branch</label>
                                    <select class="form-control" name="branch">
                                        <option value="pekalongan">Pekalongan</option>
                                        <option value="purwokerto">Purwokerto</option>
                                        <option value="semarang">Semarang</option>
                                        <option value="solo">Solo</option>
                                        <option value="yogyakarta">Yogyakarta</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="laki-laki">Laki Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal lahir</label>
                                    <input type="date" class="form-control {{$errors->has('tgl_lahir')?'is-invalid':''}}"
                                           name="tgl_lahir" value="{{old('tgl_lahir')}}"
                                           placeholder=" ">
                                    @if ($errors->has('tgl_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('tgl_lahir')}}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat Tinggal</label>
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

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kampus</label>
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

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control {{$errors->has('email')?'is-invalid':''}}"
                                           name="email" placeholder="Masukan Email Anda" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{ $errors->first('email') }}</b></p>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="form-group ml-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <!-- state end-->
    </div>

@endsection