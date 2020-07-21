<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 28/03/2020
 * Time: 14:07
 */?>

@extends('template.default')

@section('content')


    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-6 col-sm-6 mb-4">
                <div class="card bg-primary border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body ">
                        <div class="row-cols-md-3">
                            <div class=" col-6">
                                <i class="icon-people f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">Users</h6>
                                <p class="f12 mb-0">
                                    32 New Users
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-4">
                <div class="card bg-info border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body ">
                        <div class="row-cols-md-3">
                            <div class=" col-3">
                                <i class="icon-badge f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">Point</h6>
                                <p class="f12 mb-0">
                                    32 New Users
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header">
                        <div class="justify-content-md-end d-flex">

                            <!-- Button trigger modal -->

                            <div class="container-fluid">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="card-title">
                                            <h1>Data challenge</h1>
                                        </div>
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
                                <th>User</th>
                                <th>Program</th>
                                <th>Link</th>
                                <th>Point</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            {{--<tbody>--}}
                            {{--@foreach($datas as $data)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$loop->iteration}}</td>--}}
                                    {{--<td>{{$data->user->nama}}</td>--}}
                                    {{--<td>{{$data->program->judul}}</td>--}}
                                    {{--<td><a href="{{$data->link}}" target="_blank" data-toggle="tooltip" title="{{$data->link}}">--}}
                                            {{--{{ substr_replace($data->link, "...", 20) }}--}}
                                        {{--</a></td>--}}
                                    {{--<td>{{$data->point}}</td>--}}
                                    {{--@if($data->status == 'belum di acc')--}}
                                        {{--<td><span class="badge badge-warning">{{$data->status}}</span></td>--}}
                                    {{--@elseif($data->status == 'di konfirmasi')--}}
                                        {{--<td><span class="badge badge-success">{{$data->status}}</span></td>--}}
                                    {{--@else--}}
                                        {{--<td><span class="badge badge-danger">{{$data->status}}</span></td>--}}
                                    {{--@endif--}}
                                    {{--<td>--}}
                                        {{--<a href="{{route('challenge.tolak', $data->id)}}">--}}
                                            {{--<button class="btn btn-danger"--}}
                                                    {{--onclick="return confirm('Tolak Challenge Ini?')">--}}
                                                {{--<i class="fa fa-close"></i>--}}
                                            {{--</button>--}}
                                        {{--</a>--}}
                                        {{--<a href="{{route('challenge.konfirmasi', $data->id)}}">--}}
                                            {{--<button class="btn btn-success ">--}}
                                                {{--<i class="fa fa-check"></i>--}}
                                            {{--</button>--}}
                                        {{--</a>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}



                            {{--@endforeach--}}
                            {{--</tbody>--}}
                            {{----}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection