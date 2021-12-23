@extends('adminlayout')


@section('content')
 <!-- DATA TABLE -->
  
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">All Properties</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
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
                    <th>S.No</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $key=>$item)
                <tr class="tr-shadow">
                    
                    <td>{{$key+1}}</td>
                    <td>{{$item->fname}}</td>
                    <td>{{$item->lname}}</td>
                    <td>
                        <span class="block-email">{{$item->email}}</span>
                    </td>
                    <td class="desc">{{$item->address}}</td>
                    <td>{{$item->gender}}</td>
                    <td>    <img src="{{asset('uploads/students/'.$item->image )}}" height=65; width=65; alt="Loading..."></td>
                    
                    <td>
                        <div class="table-data-feature">
                            
                            <a href="update/{{$item->id}}" > <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button></a>
                            <a href="delete/{{$item->id}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button></a>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                @endforeach  
                
            </tbody>

        </table>
    
    </div>
    <!-- END DATA TABLE -->

@stop