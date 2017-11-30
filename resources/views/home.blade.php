@extends('main')

@section("title","Welcome Home")

@section("maincontainer")
@parent
<p>Welcome home sir</p>
<p ng-bind-html="backend | trust"></p>
@endsection
