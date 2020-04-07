<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 02/04/2020
 * Time: 15:50
 */?>

@extends('template.default')

@section('content')

    <main class="content_wrapper">
        <!--page title start-->

        <!--page title end-->
        <div class="container-fluid">
            <!-- state start-->
            <div class="row">
                <div class=" col-sm-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Data Tables
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="bs4-table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Branch</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>61</td>
                                    <td>
                                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="" onclick="return confirm('Hapus Data Ini?')" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>63</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>66</td>
                                    <td>66</td>
                                </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- state end-->
        </div>

    </main>


@endsection
