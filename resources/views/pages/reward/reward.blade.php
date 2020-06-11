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
                                        <h1>Data Reward</h1>
                                    </div>
                                </div>
                                <div class="col-md-6 justify-content-md-end d-md-flex">
                                    <a href="{{route('reward.create')}}" type="button" class="btn btn-primary">Tambah</a>
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
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                                <a href="{{route('reward.edit', $data->id)}}">
                                    <button class="btn btn-warning" >
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </a>
                                <a href="{{route('reward.destroy', $data->id)}}">
                                    <button class="btn btn-danger "
                                            onclick="return confirm('Apakah Anda Yakin Akan Mengapus Data Ini')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
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