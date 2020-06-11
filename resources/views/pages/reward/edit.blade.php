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
                        <form method="POST" action="{{route('reward.update', $data->id)}}"
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


                                {{--keterangan--}}
                                <div class="form-group has-info">
                                    <label>Keterangan</label>
                                    <textarea type="textarea" name="keterangan"
                                              class="form-control {{$errors->has('keterangan')?'is-invalid':''}}">{{$data->keterangan}}</textarea>
                                    @if ($errors->has('keterangan'))
                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{$errors->first('keterangan')}}</b></p>
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

@endsection