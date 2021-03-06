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
                                            <h1>Data Tolak</h1>
                                        </div>
                                        <form action="{{ route('challenge.searchtolak') }}" method="get" class="row">
                                            <select name="month" class="form-control col-3 mr-2">
                                                @foreach($months as $key => $month)
                                                    <option value="{{ $key }}" {{ $key == $keyMonth ? 'selected' : '' }}>{{ $month }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success">Cari</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 justify-content-md-end d-md-flex">
                                    <a href="{{url('admin/challenge/pdf?month=').request()->month}}" type="" class="btn btn-primary" > <i class="fa fa-print"> Cetak </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="bs4-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Program</th>
                                <th>Link</th>
                                <th>Point</th>
                                <th>status</th>
                                <th>Tanggal Pengumpulan</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->user->nama}}</td>
                                    <td>{{$data->program->judul}}</td>
                                    <td><a href="{{$data->link}}" target="_blank" data-toggle="tooltip"
                                           title="{{$data->link}}">
                                            {{ substr_replace($data->link, "...", 20) }}
                                        </a></td>
                                    <td>{{$data->point}}</td>
                                    @if($data->status == 'belum di acc')
                                        <td><span class="badge badge-warning">{{$data->status}}</span></td>
                                    @elseif($data->status == 'di konfirmasi')
                                        <td><span class="badge badge-success">{{$data->status}}</span></td>
                                    @else
                                        <td><span class="badge badge-danger">{{$data->status}}</span></td>
                                    @endif
                                    <td>{{ $data->created_at->format('d-m-Y') }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var loadfile = function (event) {
            var foto = document.getElementById('gambar');
            var output = document.getElementById('output');
            if (foto) {
                output.src = URL.createObjectURL(event.target.files[0]);
            }
        };
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection

