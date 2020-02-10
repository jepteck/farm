@extends('layouts.app')

@section('content')
<form action="{{ route('postimage')}}" method="POST" enctype="multipart/form-data" >
    {{csrf_field()}}
<div class="jumbotron">
<div id="container" style="text-align: left" >
      
    <div class="row" style="text-align: left">
        <div class="showcase text-left" >
            <h2>Earn from your idle machinery to day</h2>
            
          
          </div>
    </div>
   

<div class="row">
    <div class="col-md-4 m-4   border  text-center" style="height: 80px; ">
        <select name="equipment_type" id="user" class="form-control m-4 border" style="width: 250px" >
            <option style="display:none" > Equipment type</option>        
                 <option value="Tractors" >Tractors</option>
                 <option value="Tillage_Equipment">Tillage Equipment</option>
                 <option value=" Landscaping_Equipment" >Landscaping Equipment</option>
                 <option value="Seeding_Equipment">Seeding Equipment</option>
                       </select> 
    </div>
    <div class="col-md-4 m-4  border text-center " style="height: 80px">
        <select name="sub_county" id="user" class="form-control m-4 border" style="width: 250px"> 
            <option style="display:none" >Equipment sub-county</option>
         <option value="machinery owner" >Ainabkoi</option>
         <option value="machinery hire">Kapseret</option>
         <option value="machinery owner" >Kesses</option>
         <option value="machinery hire">Moiben</option>
         <option value="machinery owner" >Soy</option>
         <option value="machinery hire">Turbo</option>
               </select>
    </div>
   
  </div>
  
</div>
</div>
<div class="jumbotron-fluid">
    <div class="container">
    
        <div class="showcase text-left text-danger" >
          <h5>show case your equipment</h5>
      </div>
        
       
        
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
                        <div class="form-group d-flex flex-column" >
                         
                          <input type="file" name="image" class="py-3" >
                        </div>
                        </div>
                        
                      </div>
                      <div class="showcase text-left text-danger" >
                        <h5>Price</h5>
                    </div>
      
                        <div class="col-md-3 m-4  border text-center " style="height: 80px">
                          <h6>cost per acres</h6>
                        
                            <input class="input-sm focus"  type="text" name="cost" placeholder="ksh" style="height: 30px" >
                       
                       
                     
                     
                    </div>
                    <div class="row">
                        <div class="listNow" id='post'>
                         
                          <button type="submit" class="btn btn-danger"> 
                              {{ __('submit') }}
                          </button> 
                          </div>
                        </div>
                   
                    </div>
               
                
            </div>
</form>
    <script > 
    $(document).ready(function(e){
e.preventDefault();
    
    $('ul #post a').click(function(f){
        var page=$(this).attr('href');
        $('#data').load('post');
        f.preventDefault();
      
        
    });

    });
    </script>
   
@endsection