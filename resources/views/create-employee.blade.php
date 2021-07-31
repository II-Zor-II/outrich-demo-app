<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Employee List</title>
</head>
<body>
<div class="container">
    <div class="row text-center">
        <h1 class="card-header">
            @if ($is_update)
                Update Employee
            @else
                Add New Employee
            @endif
        </h1>
    </div>
    <hr>
    <div>
        @if ($is_update)
            <form method="POST" action="/update-employee">
                @method('PUT')
                <input type="hidden" name="id" value="{{$id}}">
                @else
                    <form method="POST" action="/create-employee">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                   value="{{$first_name ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                   value="{{$last_name ?? ''}}">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Date of birth</label>
                            <input type="date" class="form-control" id="birthday" name="date_of_birth"
                                   value="{{$date_of_birth ?? ''}}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script type="text/javascript" src="{{asset('js/utils/request.js')}}"></script>
<script type="text/javascript" src="{{asset('js/models/employee.js')}}"></script>
</body>
</html>
