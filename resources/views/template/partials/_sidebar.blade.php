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
            <img src="{{asset('assets/images/about-1.jpg')}}" class="img-circle mCS_img_loaded" alt="User Image">
        </div>
        <div class="info">
            <p>
                Admin
            </p>
            {{--<a href="#"> <i class="fa fa-circle text-success"></i> Online</a>--}}
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
        <li class=" nav-item"> <a href="{{route('reward')}}"><i class="fa fa-trophy"></i><span class="menu-title">Reward</span> </a></li>
        <li class=" nav-item"> <a href="{{route('program')}}"><i class="fa fa-plus-square"></i><span class="menu-title">Program</span> </a></li>
        {{--<li class=" nav-item"> <a href="{{route('challenge')}}"><i class="fa icon-badge"></i><span class="menu-title">Challenge</span> </a></li>--}}
        <li class="menu_sub">
            <a> <i class="fa icon-badge"></i> <span>Challenge </span> <span class="icon-arrow-down styleicon"></span> </a>
            <ul class="down_menu">
                <li>
                    <a href="{{route('challenge')}}"> Data Challenge</a>
                </li>
                <li>
                    <a href="{{route('challenge.datakonfirmasi')}}">Konfirmasi</a>
                </li>
                <li>
                    <a href="{{route('challenge.datatolak')}}">Tolak</a>
                </li>
            </ul>
        </li>
        <li class=" nav-item"> <a href="{{route('user')}}"><i class="fa fa-users"></i><span class="menu-title">Akun</span> </a></li>
    </ul>

</div>
