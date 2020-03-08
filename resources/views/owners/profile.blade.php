
@extends('layouts.master')


@section('title')
{{ config('app.name', 'Laravel') }}
@endsection

@section('content')

<main  class="header_nav_class_3 ng-star-insert" id="content">

 <div class="col-md-9"><!----><!---->
   
       
        <div  class="panel view-profile-panel border-danger">
            <div  class="panel-header-sm" style="background: lightgray; height: 50px; margin-top: 50px; ">
            <p >Personal Details</p>
        </div>
<div  class="panel-body padding-5">
    <div  class="row">
        <div  class="col-md-12 text-center">
            <img  alt="User Profile" class="img-responsive view-profile-img" style="margin:auto;" src="https://a0.muscache.com/defaults/user_pic-225x225.png?v=3"><div  class="edit_profile_container text-center"><label  for="profileImage"><a  style="cursor: pointer;">Choose Profile Image </a></label>
                <input  accept="image/*" id="profileImage" name="profileImage" style="display: none;" type="file">
            </div></div>
            <div  class="col-md-6">
                <div  class="home_section_class_13">
                    <div  class="home_section_class_14">
                        <div  class="home_section_class_15">
                            <div  class="home_section_class_16">
                                <span  class="home_section_class_17">First Name</span>
                            </div>
                            <div  class="home_section_class_18">
<div  class="home_section_class_19">
<div  class="home_section_class_20">
<div  class="home_section_class_21">
<label  class="home_section_class_22">
<span  class="home_section_class_23"> location </span>
<div  class="home_section_class_24">
<div  class="home_section_class_25">
<input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" name="query" placeholder="Ex- John" role="combobox" spellcheck="false" type="text" value="">
</div></div></label></div></div></div></div></div></div></div></div>
<div  class="col-md-6 border">
    <div  class="home_section_class_13">
<div  class="home_section_class_14">
    <div  class="home_section_class_15">
    <div  class="home_section_class_16">
        <span  class="home_section_class_17">Last Name</span>
    </div>
    <div  class="home_section_class_18">
        <div  class="home_section_class_19"><div  class="home_section_class_20">
            <div  class="home_section_class_21">
                <label  class="home_section_class_22">
                    <span  class="home_section_class_23"> location </span>
                    <div  class="home_section_class_24">
                        <div  class="home_section_class_25">
                            <input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" name="query" placeholder="Ex- Doe" role="combobox" spellcheck="false" type="text" value="">
</div></div></label></div></div></div></div></div></div></div>
</div>
<div  class="col-md-6">
    <div  class="home_section_class_13">
        <div  class="home_section_class_14">
            <div  class="home_section_class_15">
                <div  class="home_section_class_16">
                    <span  class="home_section_class_17" >Email</span>
                </div>
                <div  class="home_section_class_18">
                    <div  class="home_section_class_19">
                        <div  class="home_section_class_20">
                            <div  class="home_section_class_21">
                                <label  class="home_section_class_22">
                                    <span  class="home_section_class_23"> location </span>
                                    <div  class="home_section_class_24">
                                        <div  class="home_section_class_25">
                                            <input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" name="query" placeholder="Your Email Id" role="combobox" spellcheck="false" type="text" value=""></div></div></label></div></div></div></div></div></div></div></div><div  class="col-md-6"><div  class="home_section_class_13"><div  class="home_section_class_14">
    <div  class="home_section_class_15">
        <div  class="home_section_class_16">
        <span  class="home_section_class_17">Phone No</span>
    </div>
    <div  class="home_section_class_18">
        <div  class="home_section_class_19">
            <div  class="home_section_class_20">
                <div  class="home_section_class_21">
                    <label  class="home_section_class_22">
                        <span  class="home_section_class_23"> location </span>
                        <div  class="home_section_class_24">
                            <div  class="home_section_class_25">
                                <input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-invalid" id="Koan-guided-search-location__input" maxlength="12" minlength="10" name="query" placeholder="Your Mobile No." role="combobox" spellcheck="false" type="text" value="">
                            </div></div></label></div></div></div></div></div></div></div></div>
<div  class="col-md-12">
<button  disabled="" class="disabled custom_button btn btn-danger"> Save </button>
</div>
</div>


</div>
</div>
<div  class="panel">
 <div  class="panel-header-sm" style="background: lightgray; height: 50px; margin-top: 50px; ">
<p >Change Password</p>
</div>
<div  class="panel-body padding-5">
<div  class="row"><div  class="col-md-6 ">
<div  class="home_section_class_13 border-dark">
<div  class="home_section_class_14">
<div  class="home_section_class_15">
<div  class="home_section_class_16">
<span  class="home_section_class_17">Old Password*</span>
</div>
<div  class="home_section_class_18">
<div  class="home_section_class_19">
<div  class="home_section_class_20">
<div  class="home_section_class_21">
<label  class="home_section_class_22">
<span  class="home_section_class_23"> location </span>
<div  class="home_section_class_24">
<div  class="home_section_class_25">
    <input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" name="query" placeholder="" role="combobox" spellcheck="false" type="password" value="">
</div></div></label></div></div></div></div></div></div></div></div>
<div  class="col-md-6"><div  class="home_section_class_13">
    <div  class="home_section_class_14">
        <div  class="home_section_class_15">
            <div  class="home_section_class_16">
                <span  class="home_section_class_17">New Password*</span>
            </div>
            <div  class="home_section_class_18">
                <div  class="home_section_class_19">
                    <div  class="home_section_class_20">
                        <div  class="home_section_class_21">
                            <label  class="home_section_class_22">
                                <span  class="home_section_class_23"> location </span>
                                <div  class="home_section_class_24">
                                    <div  class="home_section_class_25">
                                    <input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description cdk-describedby-message-2" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" mattooltip="Password must be  atleast 8 characters long" name="query" placeholder="" role="combobox" spellcheck="false" type="password" value="" style="touch-action: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" cdk-describedby-host="">
                                </div></div></label></div></div></div></div></div></div></div></div>
                                <div  class="col-md-6">
                                    <div  class="home_section_class_13">
                                        <div  class="home_section_class_14">
                                            <div  class="home_section_class_15">
                                                <div  class="home_section_class_16">
                                                    <span  class="home_section_class_17">Confirm New Password*</span>
</div>
<div  class="home_section_class_18">
<div  class="home_section_class_19">
<div  class="home_section_class_20">
<div  class="home_section_class_21">
<label  class="home_section_class_22">
<span  class="home_section_class_23"> location </span>
<div  class="home_section_class_24">
<div  class="home_section_class_25">
<input  aria-autocomplete="list" aria-describedby="Koan-guided-search-location__description" aria-expanded="false" autocomplete="off" autocorrect="off" class="home_section_class_26 ng-untouched ng-pristine ng-valid" id="Koan-guided-search-location__input" name="query" placeholder="" role="combobox" spellcheck="false" type="password" value="">
</div>
</div>
</label>
</div></div></div></div></div></div></div></div>
<div  class="col-md-12">
<button  disabled="" class="custom_button disabled btn btn-danger"> Update Password
</button></div></div></div></div>
                                                         <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----></div>
</main>
    @endsection