<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 25/03/2020
 * Time: 16:09
 */?>

<div class="header-bg">
    <header class="main-header">
        <div class="container_header phone_view border_top_bott">

            <div class="row">
                <div class="col-md-12">
                    <div class="logo d-flex align-items-center">
                        <a href="#"> <strong class="logo_icon"> <img src="{{asset('assets/images/small-logo.png')}}" alt=""> </strong> <span class="logo-default"> <img src="{{asset('assets/images/logo.png')}}" alt=""> </span> </a>
                        <div class="icon_menu">
                            <a href="#" class="menu-toggler sidebar-toggler"></a>
                        </div>
                    </div>

                    <div class="right_detail">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="col-xl-12 col-12 d-flex justify-content-end">
                                <div class="right_bar_top d-flex align-items-center">
                                    <div class="search">
                                        <div class="d-lg-block d-xs-none">
                                        </div>
                                    </div>


                                    <div class="dropdown dropdown-user">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <img class="img-circle pro_pic" src="{{asset('assets/images/user3.png')}}" alt=""> </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <div class="user-panel">
                                                    <div class="user_image">
                                                        <img src="{{asset('assets/images/user3.png')}}" class="img-circle mCS_img_loaded" alt="User Image">
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            Admin
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="icon-user"></i> Profile </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="icon-settings"></i> Settings </a>
                                            </li>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="{{route('admin.logout')}}"> <i class="icon-logout"></i> Log Out </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>

</div>
