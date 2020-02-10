@extends('layouts.app')

@section('content')

<div class="container">
  <form action="{{ route('postimage')}}" method="POST" enctype="multipart/form-data" >
    {{csrf_field()}}
    <div class="showcase text-left" >
      <h2>Show case your equipment</h2>
      
    
    </div>
  </div>
<div class="container">
  <form action="{{ route('postimage')}}" method="POST" enctype="multipart/form-data" >
    {{csrf_field()}}
    <!-- Example row of columns -->
    
    <div class="row">
      <div class="col-md-3 m-4   border  text-center" style="height: 80px">
        <h6>Manufacturer</h6>
        <select name="manufacturer"  class=""> 
            <option style="display:none" >Equipment sub-county</option>
         <option value="machinery owner" >John deer</option>
         <option value="machinery hire">mazeei</option>
       
               </select> 
      </div>
      <div class="col-md-3 m-4  border text-center " style="height: 80px">
        <h6>List title</h6>
      
          <input class="input-sm focus"  type="text" name="list_title" placeholder="Harrow" style="height: 30px" >
     
      </div>
      <div class="col-md-3 m-4  border text-center " style="height: 80px">
        <h6>upload equipment image</h6>
       {{-- <div class="input-image">
        <div class="custom-file " style="">
          <input type="file" class="custom-file-input">
          <label for="" class="custom-file-label ">choose image</label>
        </div>
      </div> --}}
      <div class="form-group d-flex flex-column">
       
        <input type="file" name="image" class="py-3">
      </div>
      </div>
      
    </div>
    <div class="row"  >
      
        <div class="col-md-3 m-4  border text-center " style="height: 80px">
          <h6>cost per acres</h6>
        
            <input class="input-sm focus"  type="text" name="name" placeholder="Harrow" style="height: 30px" >
       
        </div>
     
     
    </div>
    <div class="row">
    <div class="listNow" id='post'>
     
      <button type="submit" class="btn btn-danger"> 
          {{ __('submit') }}
      </button> 
      </div>
    </div>
  </form>
  </div> 

    
@endsection