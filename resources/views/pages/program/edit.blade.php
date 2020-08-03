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
                        <form method="POST" action="{{route('program.update', $data->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            {{method_field('PATCH')}}
                            <div class="modal-body">
                                {{--Judul--}}
                                <div class="form-group has-success">
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

                                <div class="form-group has-success">
                                    <label>Gambar</label>
                                    <input type="hidden" name="old_gambar" class="form-control"
                                           value="{{$data->gambar}}"/>
                                    <input type="file" name="gambar" onchange="loadfile(event)" id="foto"
                                           class="custom-file {{$errors->has('gambar')?'is-invalid':''}}"
                                           value="{{ old('gambar') }}"/>
                                    <img id="output" class="img-fluid" height="40" width="60"
                                         src="{{asset($data->gambar)}}">

                                    @if ($errors->has('gambar'))
                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('gambar')}}</b></p>
                                                        </span>
                                    @endif
                                </div>

                                {{--Deskripsi--}}
                                <div class="form-group has-info">
                                    <label>Panduan</label>
                                    <textarea type="textarea" name="panduan"
                                              class="form-control {{$errors->has('panduan')?'is-invalid':''}}">{{$data->panduan}}</textarea>
                                    @if ($errors->has('panduan'))
                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('panduan')}}</b></p>
                                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-warning">
                                    <label>Tanggal Pengumpulan</label>
                                    <input type="date"
                                           class="form-control {{$errors->has('tanggal_mulai_pengumpulan')?'is-invalid':''}}"
                                           name="tanggal_mulai_pengumpulan" value="{{ $data->tanggal_mulai_pengumpulan }}"
                                           placeholder=" ">
                                    @if ($errors->has('tanggal_mulai_pengumpulan'))
                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('tanggal_mulai_pengumpulan')}}</b></p>
                                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary"
                                        data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>
        <!-- state end-->
    </div>

    <script>
        var loadfile = function (event) {
            var foto = document.getElementById('foto');
            var output = document.getElementById('output');
            if (foto && foto.value) {
                output.src = URL.createObjectURL(event.target.files[0]);
                output.style.display = '';
            }
        };
    </script>

@endsection