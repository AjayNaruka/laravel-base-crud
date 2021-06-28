@extends('layouts.mainlayout')
@section('content')
<h1>CREATE</h1>
<form action="{{route('comics.store')}}" method="POST">
@csrf
@method('POST')
<div>
  <label for="title"></label>
</div>
</form>
@endsection