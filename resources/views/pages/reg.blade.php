@extends('layouts.app')

@section('content')
<div class="box-content">
    <form class="form-hosrizontal" action=" {{ url('reg_data')}} " method="POST">
        @csrf
<fieldset>
    <div class="control-group">
        <label class="control-label" for="focused input">Full Name</label>
        <div class="controls">
            <input class="input-xlarge focus" id="focusedInput" type="text" name="name" placeholder="name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="focused input">Email</label>
        <div class="controls">
            <input class="input-xlarge focus" id="focusedInput" type="text" name="email" placeholder="email">
        </div>
        <div class="form-actions">
            <button  type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</fieldset>

    </form>
</div>
    
@endsection