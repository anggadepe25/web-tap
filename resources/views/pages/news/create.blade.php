@extends('template.default')
@section('content')
    <div class="container-fluid">
        <!-- state start-->
        <div class="row">
            <div class=" col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="card-title">
                            Basic Form Controls
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
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

                                <div class="form-group has-success">
                                    <label>Gambar</label>
                                    <input type="file"
                                           class="custom-file {{$errors->has('gambar')?'is-invalid':''}}"
                                           name="gambar" value="{{old('gambar')}}"
                                           placeholder=" ">
                                    @if ($errors->has('gambar'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('gambar')}}</b></p>
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