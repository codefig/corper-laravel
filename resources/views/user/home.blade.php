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
  <a href="{{ route('user.logout') }}" id="studentLogin"><span class='fa fa-user-o'></span> Logout</a>
@endsection

@section('pageBody')


  <div class="container" id="homeBody">
    <div class="pull-left" id="leftHomeDiv">
        <div id="picturePane" >

         <center> <img id="user-profile" src="{{ URL::to($user->photo->server_filename) }}" class="img-responsive img-rounded" alt="Image"></center>
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
        <h2> <u> My DashBoard </u></h2>
      </center></div>

      {{-- <form method="post" action="{{ route('students.profile.update') }}"> --}}
      <div id="sectionBody">


        <br>

       <center><h3>For a successful Application process the following are the steps to follow </h3></center>


       <ul class="list-group">
         <li class="list-group-item"><strong>1. Update Your profile Information with the valid details and passport photograph</strong></li>
         <li class="list-group-item"><strong>2. Click on the Apply link to send an application request </strong></li>
         <li class="list-group-item"><strong>3. Copy your <strong>Token</strong> and await your Batch information and posted State </strong></li>
       </ul>

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
var form = $('form');
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

   var fullname = $('#fullname').val();
   var matricno = $('#matricno').val();
   var email = $('#email').val();
   var department_id = $('#department_id').val();
   var token = "{{ Session::token() }}";
   var route = "";

   //then perform the ajax request to update the profile
   $.post(route,
    {
      _token : token,
      fullname : fullname,
      email : email,
      department_id : department_id,
      matricno : matricno,
    }, function(result)
   {
       console.log(result);

       if(result['errors']){
          console.log('there was an error');
          console.log(result['errors'].toString());
          $('#validation-errors').addClass('alert-danger');
          $('#validation-errors').html(result['errors'].toString());
       }
       $('#validation-errors').addClass('alert-success');
       $('#validation-errors').html(result['success'].toString());

   })
})

})

</script>
@endsection()

