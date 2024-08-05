@extends('layout.master')
@section('title','Gallery')
@section('gallery','active')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row no-gutters col-14">
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div>
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div>
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div> 
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div>
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div> 
        <div class="col-4  my-2">
            <img src="/img/abc.jpg" width="290px" class="img-thumbnail img-fluid" >
        </div>
    </div>
</div>

@endsection

</body>
</html>