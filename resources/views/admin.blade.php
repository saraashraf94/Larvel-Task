@extends('layouts.app')

@section('content')
<div class="container">

    {{--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

<div class="card-header">Dashboard</div>

    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                            </div>
        </div>
    </div>

                --}}

Admin






            <h1 class="text-center" style="margin-bottom:25px">Hello Admin Page</h1>
            <form action="">
                <input type="text" class="form-control offset-3 col-sm-6" >
                <input type="submit" class="btn btn-success " value="search">

            </form>



            <div class="table-responsive text-center">
                <table class="main-table table table-bordered">
                    <tr style="background-color: #333;
    color: white;
    text-align: center;">
                        <td>#First Name</td>
                        <td>#Last Name</td>
                        <td>#Username</td>
                        <td>#Mail</td>
                        <td>#Job Title</td>
                        <td>#Image</td>
                        <td>other</td>
                    </tr>


                        @foreach($employees as $employee)

                        <tr>

                                <td>{{$employee->firstName}}</td>
                                <td>{{$employee->lastName}}</td>
                                <td>{{$employee->user->name}}</td>
                                <td>{{$employee->user->email}}</td>
                                <td>{{$employee->jobTitle}}</td>
                                <td><img src ="{{ Storage::url($employee->image)}}" width="100" height="100"/></td>
                                <td>
                                    <a href="/Delete/{{$employee->user->id}}/{{$employee->id}}"
                                       class="btn btn-danger" style="margin-left:5px ;margin-bottom: 7px">
                                        <i class="fa fa-trash" style="margin-right: 3px   "></i>Delete</a>
                                    <a href="/update/{{$employee->id}}"
                                       class="btn btn-success" style="margin-left:5px ;margin-bottom: 7px">
                                        <i class="fa fa-edit" style="margin-right: 3px" ></i>Update</a>
                                    @if($employee->status == 0)

                                        <a href="/disactive/{{$employee->id}}"
                                           style="margin-left:5px ;margin-bottom: 7px"
                                           class="btn Disactive btn-primary "><i class="fa fa-ban"
                                                                                 style="margin-left:5px "></i>

                                            DisActive</a>

                                    @else
                                        <a href='/active/{{$employee->id}}' class='btn  btn-primary'
                                           style="margin-left:5px ;margin-bottom: 7px"> <i class="fa fa-check"
                                        style="margin-right: 3px"></i>Active</a>

                                    @endif
                                </td>


                        </tr>
                        @endforeach

                </table>
            </div>

            <a href="/Add"
               class="btn btn-success col-sm-1">
                <i class="fa fa-plus" style="margin-right: 3px"></i>Add</a>





</div>
@endsection
