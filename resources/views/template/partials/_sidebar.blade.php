<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 25/03/2020
 * Time: 16:14
 */?>
<div class="side_bar scroll_auto">
    <div class="user-panel">
        <div class="user_image">
            <img src="assets/images/about-1.jpg" class="img-circle mCS_img_loaded" alt="User Image">
        </div>
        <div class="info">
            <p>
                James Vince
            </p>
            <a href="#"> <i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <ul id="dc_accordion" class="sidebar-menu tree">

        {{--<li class="menu_sub">
            <a href="#" class=" active"> <i class="ti-home"></i> <span>Dashboard</span>  <span class="icon-arrow-down styleicon"></span></a>
            <ul class="down_menu">
                <li>
                    <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                    <a href="index-light.html">Dashboard 2</a>
                </li>
            </ul>
        </li>--}}

        <li class=" nav-item"> <a href="{{route('dashboard')}}"><i class="fa ti-home"></i><span class="menu-title">Dashboard</span> </a></li>
        <li class=" nav-item"> <a href="{{route('news')}}"><i class="fa fa-th"></i><span class="menu-title">News</span> </a></li>
        <li class=" nav-item"> <a href="{{route('panduan')}}"><i class="fa ti-book"></i><span class="menu-title">Panduan</span> </a></li>
        <li class=" nav-item"> <a href="{{route('akun')}}"><i class="fa icon-user"></i><span class="menu-title">Akun</span> </a></li>
    </ul>

</div>
