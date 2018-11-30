@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{ route('employee.store') }}">
  @csrf
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Name" name="nama">
      </div>
    </div>
	<div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Username" name="username">
      </div>
    </div>
	<div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="password">
      </div>
    </div>
	<div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">E-mail</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="E-mail" name="email">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection