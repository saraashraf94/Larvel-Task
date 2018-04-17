@extends('layouts.app')

@section('content')
<div class="container">

    <form  action="/Add" method="post" class="Add-Form" style="margin-left: 40%" enctype="multipart/form-data">
        {{csrf_field()}}
     User Name   <input type="text" placeholder="userName" class="form-control col-sm-5" name="user" required="required">
      First Name  <input type="text" placeholder="firstName" class="form-control col-sm-5" required="required" name="firstname">
        Last Name<input type="text" placeholder="lastName" class="form-control col-sm-5" required="required" name="lastname">
       Email <input type="email" placeholder="Email" class="form-control col-sm-5" required="required" name="email">
       Password <input type="password" placeholder="Password" class="form-control col-sm-5" required="required" name="password">
       JOb <input type="text" placeholder="Job Title" class="form-control col-sm-5" required="required" name="job">
    
    Image
        <input type="file" name="photo" >
        <input type="text" placeholder="location" class="form-control col-sm-5" name="location">

        <select name="status" class="form-control col-sm-5" >
            <option value="1">Active</option>
            <option value="0">DisActive</option>
        </select>

        <input type="submit" value="Add" class="btn btn-success">

    </form>


</div>
@endsection
