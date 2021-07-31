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
        <h1 class="card-header">Employees</h1>
    </div>
    <hr>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Birthday</th>
            </tr>
            </thead>
            <tbody id="employee-list-table">
                {{-- APPEND EMPLOYEE LIST HERE --}}
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary" id="create-employee-btn">Add New Employee</button>
    <button class="btn btn-success" id="reload-btn">Refresh</button>
</div>
<script type="text/javascript" src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script type="text/javascript" src="{{asset('js/utils/request.js')}}"></script>
<script type="text/javascript" src="{{asset('js/models/employee.js')}}"></script>
<script type="text/javascript" src="{{asset('js/list.js')}}"></script>
</body>
</html>
