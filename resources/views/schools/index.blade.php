@extends('layout2')

@section('content2')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>School Name</td>
          <td>School Address</td>
          <td>School Phone</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
         @foreach($schools as $school)
            <tr>
                <td>{{$school->id}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->address}}</td>
                <td>{{$school->phone}}</td>
                <td>BUTTON
                </td>
            </tr>
         @endforeach
    </tbody>
  </table>
<div>
@endsection