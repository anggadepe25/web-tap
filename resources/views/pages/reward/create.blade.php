@extends('template.default')
@section('content')
    <div class="container-fluid">
        <!-- state start-->
        <div class="row">
            <div class=" col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Data Reward
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('reward.store') }}" method="post" enctype="multipart/form-data">
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

                                <div class="form-group has-warning">
                                    <label>Keterangan</label>
                                    <textarea type="textarea"
                                              class="form-control {{$errors->has('keterangan')?'is-invalid':''}}"
                                              name="keterangan" value="{{old('keterangan')}}"
                                              placeholder=" "></textarea>
                                    @if ($errors->has('keterangan'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('keterangan')}}</b></p>
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