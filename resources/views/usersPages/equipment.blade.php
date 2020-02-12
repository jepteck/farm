@include('layouts.app')

@section('')
<div class="container">
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
    </div>
</div>
@endsection