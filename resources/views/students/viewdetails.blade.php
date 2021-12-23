@extends('adminlayout')


@section('content')
 <!-- DATA TABLE -->
   
    <div class="table-data__tool">
        <div class="table-data__tool-left">
           
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Today</option>
                    <option value="">3 Days</option>
                    <option value="">1 Week</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            
        </div>
        <div class="table-data__tool-right">
            <a href="#" > <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                <i class="zmdi zmdi-plus"></i>add item</button></a>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2" id="search">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Biology</th>
                    <th>Math</th>
                    <th>Psychology</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr class="tr-shadow">
                    
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->physics}}</td>
                    <td>{{$item->chemistry}} </td>
                    <td >{{$item->biology}}</td>
                    <td>{{$item->math}}</td>
                    <td>{{$item->psychology}}</td>

                    <td>
                   
                        <div class="table-data-feature">
                            
                            <a href="#" > <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button></a>
                            <a href="#"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button></a>
                            <a href="/students_chart/{{$item->id}} "><button class="item" data-toggle="tooltip" data-placement="top" title="chart">
                                <i class="zmdi zmdi-chart"></i>
                            </button></a>
                        </div>
                    </td>
                </tr>
                
                @endforeach  
                
            </tbody>

        </table>
    </div>
    <!-- END DATA TABLE -->

@stop