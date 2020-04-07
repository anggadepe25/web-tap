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
            <div class="col-xl-3 col-sm-6 mb-4">
                <div class="card bg-primary border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body ">
                        <div class="row">
                            <div class=" col-3">
                                <i class="icon-people f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">New Users</h6>
                                <p class="f12 mb-0">
                                    32 New Users
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-4">
                <div class="card bg-info border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-3">
                                <i class="icon-basket-loaded f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">Order Placed</h6>
                                <p class="f12 mb-0">
                                    123 New Order Placed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-4">
                <div class="card bg-warning border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-3">
                                <i class=" icon-handbag f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">Delivery </h6>
                                <p class="f12 mb-0">
                                    54 New Delivery
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-4">
                <div class="card bg-danger border-0 text-light pt-3 pb-3 h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class=" col-3">
                                <i class=" icon-badge f30"></i>
                            </div>
                            <div class=" col-9">
                                <h6 class="m-0 text-light">Monthly Profits</h6>
                                <p class="f12 mb-0">
                                    $9887 This Month Profit <span class="float-right text-success"> </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection