@extends('layout3')

@section('content3')
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
          <td>Food Name</td>
          <td>Food Type</td>
          <td>Food Color</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
         @foreach($foods as $food)
            <tr>
                <td>{{$food->id}}</td>
                <td>{{$food->name}}</td>
                <td>{{$food->type}}</td>
                <td>{{$food->color}}</td>
                <td>BUTTON
                </td>
            </tr>
         @endforeach
    </tbody>
  </table>
<div>
@endsection