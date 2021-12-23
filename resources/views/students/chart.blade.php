@extends('adminlayout')


@section('content')

    <div class="row-md">
        
        <div class="col-md-4">
            <div class="au-card m-b-30">
                <div class="au-card-inner">
                    <h3 class="title-2 m-b-40">students chart</h3>
                    <canvas id="team-chart"></canvas>
                </div>
            </div>
        </div>
        
    </div>

    <td>{{$data->physics}}</td>
    <td>{{$data->chemistry}}</td>
    <td>{{$data->biology}}</td>
    <td>{{$data->math}}</td>
    <td>{{$data->psychology}}</td>
@endsection

