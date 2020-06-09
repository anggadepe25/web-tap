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
                                            <h1>Data News</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-md-end d-md-flex">
                                       {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#tambah">
                                            Tambah
                                        </button>--}}
                                        <a href="{{route('news.create')}}" type="button" class="btn btn-primary">Tambah</a>

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
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->judul}}</td>
                                    <td><img src="{{asset('uploads/admin/'.$data->gambar)}}" width="60" height="40">
                                    </td>
                                    <td>{{$data->deskripsi}}</td>
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
@endsection