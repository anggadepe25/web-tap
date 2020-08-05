<html>
    <head>
    <title>Laporan </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <table align="center">
    <tr>
    <!-- <td><img src="{{asset('assets/img/Logo_bnn2.png')}}" width="70" height="70"></td> -->
        <td><center>
                <font size="4">Laporan</font><BR>
                <font size="5"><b>Telkomsel Apprentice Program</b></font><BR>
                {{--<font size="2">Jalan KH.Ahmad Dahlan No.25, Mangkukusuman, Tegal Timur, Panggung, Kec. Tegal Timur</font><BR>--}}
                {{--<font size="2">Kota Tegal, Jawa Tengah (0283) 451349</font><BR>--}}
                {{--<font size="2">TEGAL<BR></font>--}}
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="2"> <hr> </td>
    </tr>
</table>
    <body>
<center>
    <font size="3"><b>Laporan Challenge </b></font>
</center>

<br>
<table id="example1"  class="table table-bordered dt-responsive nowrap"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>No</th>
        <th>User</th>
        <th>Program</th>
        <th>Link</th>
        <th>Point</th>
        <th>status</th>
        <th>Tanggal Pengumpulan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->user->nama}}</td>
            <td>{{$data->program->judul}}</td>
            <td><a href="{{$data->link}}" target="_blank" data-toggle="tooltip" title="{{$data->link}}">
                    {{ substr_replace($data->link, "...", 20) }}
                </a></td>
            <td>{{$data->point}}</td>
            @if($data->status == 'belum di acc')
                <td><span class="badge badge-warning">{{$data->status}}</span></td>
            @elseif($data->status == 'di konfirmasi')
                <td><span class="badge badge-success">{{$data->status}}</span></td>
            @else
                <td><span class="badge badge-danger">{{$data->status}}</span></td>
            @endif
            <td>{{ $data->created_at->format('Y m d') }}</td>

        </tr>



    @endforeach
    </tbody>
</table>
<table align=right border="0" cellpadding="1" style="width: 250px;">

{{--<tbody>--}}
    {{--<tr>--}}
        {{--<td valign="top">--}}

            {{--<div align="left">--}}
                {{--<span style="font-size: x-small ;">Mengetahui, </span><br>--}}
                {{--<span style="font-size: x-small;">Kepala Badan Narkotika Nasional Kota Tegal</span>--}}
            {{--</div>--}}

            {{--<div align="left" style="margin: 50px "></div>--}}
            {{--<div align="left">--}}
                {{--<span style="font-size: 12px;">Drs. Igor Budi Margiono.</span></div>--}}
        {{--</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
</body>
</html>