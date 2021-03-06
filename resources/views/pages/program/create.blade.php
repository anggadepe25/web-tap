@extends('template.default')
@section('head')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
    <div class="container-fluid">
        <!-- state start-->
        <div class="row">
            <div class=" col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Data Pogram
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row" action="{{ route('program.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group has-success">
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
                                           onchange="loadfile(event)" id="foto">
                                    <br/>
                                    <img id="output" class="img-fluid" height="100" width="100"
                                         style="display: none">
                                    @if ($errors->has('gambar'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('gambar')}}</b></p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-success">
                                    <label>Panduan</label>
                                    <textarea type="textarea"
                                              class="form-control {{$errors->has('panduan')?'is-invalid':''}}"
                                              name="panduan" value="{{old('panduan')}}"
                                              placeholder=" "></textarea>
                                    @if ($errors->has('panduan'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('panduan')}}</b></p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-success">
                                    <label>Tanggal Pengumpulan</label>
                                    <input id="datepicker" readonly style="cursor: pointer; background: white"
                                           class="form-control {{$errors->has('tanggal_mulai_pengumpulan')?'is-invalid':''}}"
                                           name="tanggal_mulai_pengumpulan" value="{{old('tanggal_mulai_pengumpulan')}}"
                                           placeholder=" ">
                                    @if ($errors->has('tanggal_mulai_pengumpulan'))
                                        <span class="invalid-feedback" role="alert">
                                            <p><b>{{$errors->first('tanggal_mulai_pengumpulan')}}</b></p>
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

@section('script')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: 'yy-mm-dd',
                startDate: new Date(),
                minDate: new Date()
            });
        } );
    </script>
@endsection