
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
                                @foreach( $posts as $post)
                              
                                <tr  class="cursor-pointer ng-star-inserted">
                                    <td >
                                        <div  class="p-5 fs-13 text-center">
                                        <img  class="img-responsive order_list_img"  src="{{ asset ('uploads/post/' . $post->image )}}" alt="undefined">
                                            <p >
                                                <small > </small>
                                            </p>
                                        </div>
                                    </td>
                                    <td >
                                                    <div  class="p-5 fs-13"><p >
                                                        <span > {{$post->manufacturer }} </span></p>
                                                        <h6  class="mb-0">{{$post->equipment_type}}</h6>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div  class="p-5 fs-13">
                                                        <p > Equipment location </p>
                                                        <h6  class="mb-0 font-100"><i  class="fa fa-map-marker"></i> {{$post->sub_county}}</h6>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div  class="p-5 fs-13"><p >Added on</p><h6  class="font-100">{{$post->created_at}}
                                                    </h6>
                                                </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                                    <div  class="row m-0"><div  class="col-md-12"> <a href="owners" class="active">
                                                        <button  class="btn btn-success"> Add Another Equipment </button> </a> 
                </div></div></div>
            </div>      
    </div>
    
    </div>
    </div>
{{-- 
<div ass="panel view-profile-panel">
    <div ass="panel-header" >
        <p  >
            My Equipment
        </p>
        
    </div>
    <div  class="panel-body pt-0">
        <div  class="table-responsive ng-star-inserted">
            <table  class="table table-requirements-noborder table-hovered">
                <tbody >
                    <tr  class="cursor-pointer ng-star-inserted">
                        <td >
                            <div  class="p-5 fs-13 text-center">
                                <img  class="img-responsive order_list_img" alt="undefined" src="https://s3.ap-south-1.amazonaws.com/www.beroni.in/farmease-app/products/featured/web-1581432650822.jpeg">
                                <p >
                                    <small > FE-38246837 </small></p></div></td><td >
                                        <div  class="p-5 fs-13"><p >
                                            <span > John Deere </span></p>
                                            <h6  class="mb-0">harrow</h6></div></td>
                                            <td >
                                              <div  class="p-5 fs-13"><p >Equipment Address</p><h6  class="mb-0 font-100"><i  class="fa fa-map-marker"></i> California, USA</h6></div></td><td ><div  class="p-5 fs-13"><p >Added on</p><h6  class="font-100">February 11, 2020
                                        </h6></div></td></tr>
                                    </tbody></table></div>
                                        <div  class="row m-0"><div  class="col-md-12">
                                        <a href="" class="btn btn-success">  Add Another Equipment</a>
                                            
    </div></div></div>
</div>       --}}




@endsection