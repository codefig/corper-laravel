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

              <li><a href=""><span class='fa fa-book'></span> View Posting Status</a></li>

             <li><a href=""><span class="fa fa-file-text"></span> Extra Information</a></li>

               <li><a href=""><span class="fa fa-upload"></span> My submissions</a></li>

          </ul>
        </div>
    </div>
    <div class="pull-right" id="rightHomeDiv" style="overflow:scroll">

      <div id="sectionBanner" class="container">
      <center>
        <h2> <u> Status </u></h2>



      </center></div>

      {{-- <form method="post" action="{{ route('students.profile.update') }}"> --}}
      <div id="sectionBody">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Record</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Fullname : </td>
              <td>{{ $user->firstname }} {{ $user->lastname }}</td>
            </tr>

            <tr>
              <td>Date of Birth : </td>
              <td>{{ $user->dob }}</td>
            </tr>

             <tr>
              <td>State of Origin : </td>
              <td>{{ $user->stateoforigin()->name }}</td>
            </tr>

            <tr>
              <td>LocaL Government Area: </td>
              <td>{{ $user->dob }}</td>
            </tr>

            <tr>
              <td>Institution Attended : </td>
              <td>{{ $user->institution }}</td>
            </tr>
          </tbody>
        </table>

        <div class="form-group">
          <a href="{{ route('user.posting.apply') }}" class="btn btn-success">Apply for posting</a>
        </div>

        <div class="alert alert-success" style="display:{{ (Session::has('success_message'))? "block":"none" }}">
           <strong>{{ Session::get('success_message') }} </strong>
         </div>

    </div>
  </div>
@endsection()
