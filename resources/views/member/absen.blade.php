@extends('layouts.member') 

@section('content')

<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                
                {{
                    Carbon\Carbon::now()->format('l')
                }}
                <small>Pelajaran Hari Ini</small>
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a
                        href="javascript:void(0);"
                        class="dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="true">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="body">
            <table class="table table-bordered">
                    <tr>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Hari</th>
                        <th>NIK Guru</th>
                        <th>Nama Guru</th>
                        <th>Tlpn Guru</th>
                        <th>Pelajaran</th>
                        <th>Absen</th>
                    </tr>
                    @foreach ($sekarang as $item)
                    <tr>
                        <td>{{$item->jam_mulai}}</td>
                        <td>{{$item->jam_berakhir}}</td>
                        <td>{{$item->hari}}</td>
                        <td>{{$item->nikGuru}}</td>
                        <td>{{$item->namaGuru}}</td>
                        <td>{{$item->tlpnGuru}}</td>
                        <td>{{$item->bidangStudi}}</td>
                        <td>

                        </td>

                    </tr>
                    @endforeach
                </table>
                
        </div>
    </div>
</div>

@endsection

