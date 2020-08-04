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
                                            <h1>Data Akun</h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6 justify-content-md-end d-md-flex">
                                        <a href="{{route('user.create')}}" type="button" class="btn btn-primary">Tambah</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="card-body">
                        <table id="bs4-table" class="table table-bordered table-striped table-responsive">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Branch</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Tinggal</th>
                                <th>Kampus</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->nohp}}</td>
                                    <td>{{$data->branch}}</td>
                                    <td>{{$data->jenis_kelamin}}</td>
                                    <td>{{$data->tgl_lahir}}</td>
                                    <td>{{$data->tempat_tinggal}}</td>
                                    <td>{{$data->kampus}}</td>
                                    <td>
                                        <a href="{{route('user.destroy', $data->id)}}">
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