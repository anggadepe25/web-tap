@extends('template.default')
@section('content')
    <div class="container-fluid">
        <!-- state start-->
        <div class="row">
            <div class=" col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="card-title">
                            Edit Data News
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('news.update', $data->id)}}"
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

                                <div class="form-group has-success">
                                    <label>Gambar</label>
                                    <input type="hidden" name="old_gambar" class="form-control"
                                           value="{{$data->gambar}}"/>
                                    <input type="file" name="gambar" onchange="loadfile(event)" id="foto"
                                           class="custom-file {{$errors->has('gambar')?'is-invalid':''}}"
                                           value="{{ old('gambar') }}" />
                                    <img id="output" phpclass="img-fluid" height="40" width="60"
                                         src="{{$data->gambar}}">
                                    <br/>

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