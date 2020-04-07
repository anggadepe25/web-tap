<!DOCTYPE html>
<html lang="en">


@include('template.partials._head')

<body>
<div class="wrapper red">
    <!-- header -->
@include('template.partials._header')
<!-- header_End -->

    <!-- Content_right -->
    <div class="container_full">

        @include('template.partials._sidebar')

        <div class="content_wrapper bg_homebefore">
            @yield('content')
        </div>
    </div>
    <!-- Content_right_End -->
    <!-- Footer -->
    <footer class="footer ptb-20">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copy_right">
                    <p>
                        2019 © Dashboard Theme By
                        <a href="#">Skypike</a>
                    </p>
                </div>
                <a id="back-to-top" href="#"> <i class="ion-android-arrow-up"></i> </a>
            </div>
        </div>
    </footer>
    <!-- Footer_End -->
</div>

@include('template.partials._script')
</body>

</html>
