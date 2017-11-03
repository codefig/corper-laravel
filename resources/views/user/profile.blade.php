@extends('layouts.header')


@section('styles')
   <style>
       #homeBody{
        /*background-color:red;*/
        height:600px;
        margin-top:30px;
        padding:20px;
        border-radius:5px;
        border:1px solid #00b294;
       }
       #leftHomeDiv{
        /*background-color:green;*/
        width:30%;
        height: 100%;
        padding:10px;
       }
       #rightHomeDiv{
        /*background-color:#4c4a48;*/
        width:65%;
        height:100%;
        border:1px solid #00b294;
        border-radius: 3px;
        /*color:#fff;*/
        padding:10px;
       }

       #picturePane{
        border-radius:5px;
        /*background-color:#fff;*/
        height:50%;
        margin-bottom: 5px;
       }

       #linksPane{
        border-radius:5px;
          background-color:#4c4a48;
       }

       a:hover{
          background-color:#00b294 !important;
       }
      #sectionBanner {
        margin-bottom:5px;
        /*background-color:#4c4a48;*/
        font-family: "Lato Bold";
      }


   </style>
@endsection


@section('title')
   Corper's  DashBoard
@endsection


@section('firstLink')
  <a href="" id="studentLogin"><span class='fa fa-user-o'></span> Logout</a>
@endsection

@section('pageBody')


  <div class="container" id="homeBody">
    <div class="pull-left" id="leftHomeDiv">
        <div id="picturePane">

          <img id="user-profile" src="{{ URL::to($user->photo->server_filename) }}" class="img-responsive img-rounded" alt="Image">
        </div>

       <div id="linksPane">
            <ul class="nav nav-pills nav-stacked">

              <li><a href=""><span class='fa fa-book'></span> Home </a></li>
              <li><a href="{{ route('user.profile') }}"><span class='fa fa-book'></span> Profile
                @if ($user->is_updated==0)
                  <span class="label label-danger">Not Updated </span>
                @else
                  <span class="label label-primary">Updated </span>
                @endif
              </a></li>

              <li><a href="{{ route('user.status') }}"><span class='fa fa-book'></span> View Posting Status</a></li>

             <li><a href=""><span class="fa fa-file-text"></span> Extra Information</a></li>

               <li><a href=""><span class="fa fa-upload"></span> My submissions</a></li>
          </ul>
        </div>
    </div>
    <div class="pull-right" id="rightHomeDiv" style="overflow:scroll">

      <div id="sectionBanner" class="container">
      <center>
        <h2> <u> My Profile </u></h2>
      </center></div>

      {{-- <form method="post" action="{{ route('students.profile.update') }}"> --}}
      <div id="sectionBody">

        <form method="post" action="{{ route('user.profile.update') }}">
         <div class="form-group">
          <label> Firstname </label>
          <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}"/>
        </div>

         <div class="form-group">
          <label> lastname </label>
          <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}"/>
        </div>

        <div class="form-group">
          <label>Date of Birth eg. (20-13-1990)</label>
          <input type="text" class="form-control" id="dob" name="dob" value="{{ $user->dob }}" />
        </div>
        <div class="form-group">
          <label>Local Government Area </label>
          <input type="text" class="form-control" id="lga" name="lga" value="{{ $user->lga }}"/>
        </div>

        <div class="form-group">
          <label>State of Origin</label>
               <select name="state_id" id="state_id" class="form-control">
                @if (count($states) > 0)
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ ($user->state_id == $state->id) ? "selected" : "" }}> {{ $state->name}}</option>
                  @endforeach
                @endif
              </select>
        </div>

        <div class="form-group">
          <label>Religion </label>
          <input type="text" class="form-control" id="religion" name="religion" value="{{ $user->religion }}" />
        </div>

            <div class="form-group">
               <label>Matric Number: </label>
               <input type="text" class="form-control" id="matricno" name="matricno" value="{{ $user->matricno }}"/>
            </div>

            <div class="form-group">
               <label for="department">Department</label>
               <input type="text" class='form-control' name="department" id="department" value="{{ $user->department }}">
            </div>

            <div class="form-group">
              <label>Name of Institution </label>
              <input type="text" class="form-control" name="institution" id="institution" value="{{ $user->institution }}"/>
            </div>


            <div class="form-group">
              <label> Institution State </label>
              <select class="form-control" name="sch_state_id">
                @if (count($states) > 0)
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ ($user->state_id == $state->id) ? "selected" : "" }}> {{ $state->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>

            <div class="form-group">
              <label>Hobbies </label>
              <input type="text" class="form-control" name="hobbies" id="hobbies" value="{{ $user->hobbies }}"/>
            </div>


            <div class="form-group">
              <label>First State of Choice </label>
              <select class="form-control" name="first_state_id" id="first_state_id">
             @if (count($states) > 0)
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ ($user->first_state_id == $state->id) ? "selected" : "" }}> {{ $state->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>

            <div class="form-group">
              <label>Second State of Choice </label>
              <select class="form-control" name="second_state_id" id="second_state_id">
                  @if (count($states) > 0)
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ ($user->second_state_id == $state->id) ? "selected" : "" }}> {{ $state->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>

            <div class="form-group">
              <label>Third State of Choice </label>
              <select class="form-control" name="third_state_id" id="third_state_id">
              @if (count($states) > 0)
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}" {{ ($user->third_state_id == $state->id) ? "selected" : "" }}> {{ $state->name}}</option>
                  @endforeach
                @endif
              </select>
            </div>


            <div class="form-group">
              <input type="hidden" name="_token" value="{{ Session::token() }}" />
              <input type="submit" name="submit" style="display:none;" class="btn btn-primary" id="updateFormSubmit">
            </div>

          </form>
            <div class="MyContainer">
              <div id="nextContainer">
                <div class="well" id="wellHeader">Update Profile Picture
                &nbsp;
                </div> <!--end of wellHeader -->

                 <center>
                 <span id="loader" style="display:none"><img src="{{URL::to('images/loader.gif')}}" height="16" width="16">Loading...</span>
                 <div id="picFrame" class="alert alert-danger"></div><!--end of the #picframe -->
                  <form style="display:none" id="pictureForm" class="form" method="post" action="{{ route('user.passport.update') }}" enctype="multipart/form-data">
                      <input type="file" id="imageInput" accept="image/*" name="images"/>
                      <input type="hidden" name="_token" id="token" value='{{ Session::token() }}'>
                      <input type="submit" name="imageSubmit" id="imageinputSubmit" value="upload"/>
                  </form>
                      <button type="" style="width:100%;margin-bottom:10px;" class="btn btn-success" name="imageSubmit" id="imageSubmit">
                        <span class="fa fa-photo"></span> Upload Passport Image
                      </button>
                      <br/>
                  </center>

            </div><!--end of nextContainer-->


            <div class="form-group">
               <input type="submit" style="width:100%" id='updateBtn' class="btn btn-info" value="Update"/>
            </div>


         </div>
         {{-- </form> --}}

         <div id="validation-errors" class="alert alert-danger" style="display:{{ (count($errors) > 0) ? "block":"none" }};">
          @if(count($errors)> 0)
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          @endif
         </div>


         <div class="alert alert-success" style="display:{{ (Session::has('success_message'))? "block":"none" }}">
           <strong>{{ Session::get('success_message') }} </strong>
         </div>




    </div>
  </div>
<script type="text/javascript">
$('document').ready(function()
{

var uploadbtn = $('#imageSubmit');
var fileinput = $('#imageInput');
var formsubmit = $('#imageinputSubmit');
var loader = $('#loader');
var output = $('#picFrame');
// var form = $('form');
var form = $('#pictureForm');
output.hide();
// form.hide();
uploadbtn.click(function(e)
{
   fileinput.click();
})

fileinput.change(function(e)
{
    var value = $(this).val();
    if(value != ''){
      formsubmit.click();
      console.log("nice value");
    }
    else{
      e.preventDefault();
    }
})


formsubmit.on('click', function(e){
  // e.preventDefault();
  console.log("that clicked event");
    form.ajaxForm({

      beforeSend: function(){

        loader.show();
        $('#imageinputSubmit').attr('disabled','disabled');
      },
      success: function(result){
        // $('#picFrame').result();
        console.log(result);
        if(result['images'])
        {
          output.html(result['images']);
        }
        else{

         $('#user-profile').attr('src', result);
          output.html(result);
          loader.hide();
          form.resetForm();
          formsubmit.removeAttr('disabled');
          // uploadbtn.hide()
        }

      },

      error: function(err){
        output.html("Error: " + err);
       formsubmit.removeAttr('disabled');
       console.log(err);
      },

    })
})


$('#updateBtn').click(function(event){


    $('#updateFormSubmit').click();

})

})

</script>
@endsection()

