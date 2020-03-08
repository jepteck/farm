@extends('layouts.master')


@section('title')
{{ config('app.name', 'Laravel') }}
@endsection

@section('content')

<main  class="header_nav_class_3 ng-star-insert" id="content" tabindex="-1">

    <div  class="container p_large_device" >
    <div  class="row" style="margin-top: 90px">
    
    
    <div  class="col-md-12">
          
            <div ass="panel view-profile-panel">
                <div ass="panel-header" >
                    <p >
                        My Equipment
                    </p>
                    
                </div>
                <div  class="panel-body pt-0">
                    <div  class="table-responsive ng-star-inserted">
                        <table  class="table table-requirements-noborder table-hovered">
                            <tbody >
                                @foreach ($posts as $data)
                                    
                                
                                <tr  class="cursor-pointer ng-star-inserted">
                                    <td >
                                        <div  class="p-5 fs-13 text-center">
                                         <div  class="p-5 fs-13 text-center">
                                        <img  class="img-responsive order_list_img"  src="{{ asset ('uploads/post/' . $data->image )}}" alt="undefined">
                                            <p >
                                                <small > </small>
                                            </p>
                                        </div>
                                                </td>
                                                <td >
                                                    <div  class="p-5 fs-13"><p >
                                                        <span > {{$data->manufacturer }} </span></p>
                                                        <h6  class="mb-0">{{$data->equipment_type}}</h6>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div  class="p-5 fs-13">
                                                        <p > Equipment location </p>
                                                        <h6  class="mb-0 font-100"><i  class="fa fa-map-marker"></i> {{$data->sub_county}}</h6>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div  class="p-5 fs-13"><p >Added on</p><h6  class="font-100">{{$data->created_at}}
                                                    </h6>
                                                </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                                    <div  class="row m-0">
                                                    <div  class="col-md-12"> <a href="owners" class="active">
                                                        <button  class="btn btn-success"> Add Another Equipment </button> <a>
                </div>
                </div></div>
            </div>      
    </div>
    
    </div>
    </div>



@endsection