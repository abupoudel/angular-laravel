@extends('main')

@section("title","View")

@section("maincontainer")
<p>Welcome to view page</p>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Percentage</th>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="student in students">
            <td>@{{student.id}}</td>
            <td>@{{student.name}}</td>
            <td>@{{student.percent}}</td>
        </tr>
    </tbody>
</table>
@endsection
