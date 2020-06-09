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
                                        {{--<div class="d-lg-none">--}}
                                            {{--<a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view collapsed" href="javascript:void(0);" aria-expanded="false"> <i class=" icon-magnifier"></i> </a>--}}
                                            {{--<form id="search_form" role="search" class="search-form collapse" action="#">--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<input type="text" class="form-control" placeholder="Search...">--}}
                                                    {{--<button type="button" class="btn" data-target="#search_form" data-toggle="collapse" aria-label="Close">--}}
                                                        {{--<i class="ion-android-search"></i>--}}
                                                    {{--</button>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                        {{--Serach--}}
                                        <div class="d-lg-block d-xs-none">
                                            <form role="search" class="search-form form_show" action="#">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Cari">
                                                    <button type="button" class="btn" data-target="#" data-toggle="" aria-label="Close">
                                                        <i class="ion-android-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <!-- notification_Start -->
                                    <div class="dropdown dropdown-notification">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> <i class="fa fa-bell"></i> <span class="badge_coun"> 6 </span> </a>
                                        <ul class="dropdown-menu scroll_auto height_fixed" >
                                            <li class="bigger">
                                                <h3><span class="bold">Notifications</span></h3>
                                                <span class="notification-label">New 6</span>
                                            </li>
                                            <li>
                                                <ul class="dropdown-menu-list">
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">just now</span> <span class="details"> <span class="notification-icon deepPink-bgcolor"> <i class="fa fa-check"></i> </span> Congratulations!. </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">3 mins</span> <span class="details"> <span class="notification-icon purple-bgcolor"> <i class="fa fa-user o"></i> </span> <b>John Micle </b>is now following you. </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">7 mins</span> <span class="details"> <span class="notification-icon blue-bgcolor"> <i class="fa fa-comments-o"></i> </span> <b>Sneha Jogi </b>sent you a message. </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">12 mins</span> <span class="details"> <span class="notification-icon pink"> <i class="fa fa-heart"></i> </span> <b>Ravi Patel </b>like your photo. </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">15 mins</span> <span class="details"> <span class="notification-icon yellow"> <i class="fa fa-warning"></i> </span> Warning! </span> </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"> <span class="time">10 hrs</span> <span class="details"> <span class="notification-icon red"> <i class="fa fa-times"></i> </span> Application error. </span> </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- notification_End -->

                                    <!-- DropDown_Inbox -->
                                    {{--<div class="dropdown dropdown-inbox">--}}
                                        {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="fa fa-envelope-o"></i> <span class="badge_coun"> 2 </span> </a>--}}
                                        {{--<ul class="dropdown-menu scroll_auto height_fixed">--}}
                                            {{--<li class="bigger">--}}
                                                {{--<h3><span class="bold">Messages</span></h3>--}}
                                                {{--<span class="notification-label">New 2</span>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<ul class="dropdown-menu-list">--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                    {{--<li>--}}
                                                        {{--<a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    <!--DropDown_Inbox_End -->

                                    <!-- Dropdown_User -->
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
                                                            James Vince
                                                        </p>
                                                        <a href="#"> pabola@gmail.com</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="icon-user"></i> Profile </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="icon-settings"></i> Settings </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="icon-directions"></i> Help </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="lock_screen.html"> <i class="icon-lock"></i> Lock </a>
                                            </li>
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
