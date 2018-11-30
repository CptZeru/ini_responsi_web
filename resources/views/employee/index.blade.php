@extends('master')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-danger">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <hr>
  <br>
  <br>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No.</td>
          <td>Name</td>
          <td>Username</td>
          <td>Password</td>
          <td>Company E-mail</td>
        </tr>
    </thead>
    <tbody>
		@php $no = 1; @endphp
        @foreach($items as $i)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->username}}</td>
            <td>{{$i->password}}</td>
            <td>{{$i->companyEmail}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection