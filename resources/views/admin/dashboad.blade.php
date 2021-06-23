@extends('layouts.app')

@extends('layouts.bootstrap3')
  

@section('content')
<div class="container">
   <div class="col-lg-3">
    <div class="panel panel-info">
        <div class="panel-heading text-center">
           PUBLISHED POSTS
        </div>
            <div class="panel-body">
               <h1 class="text-center">{{$post_count}}</h1>
            </div>
       
      </div>
   </div>

   <div class="col-lg-3">
    <div class="panel panel-danger">
        <div class="panel-heading text-center">
           TRASHED POSTS
        </div>
            <div class="panel-body">
               <h1 class="text-center">{{$trashed_count}}</h1>
            </div>
       
      </div>
   </div>

   <div class="col-lg-3">
    <div class="panel panel-success">
        <div class="panel-heading text-center">
           USER
        </div>
            <div class="panel-body">
               <h1 class="text-center">{{$user_count}}</h1>
            </div>
       
      </div>
   </div>

   <div class="col-lg-3">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
           CATEGORIES
        </div>
            <div class="panel-body">
               <h1 class="text-center">{{$categories_count}}</h1>
            </div>
       
      </div>
   </div>
</div>
@endsection 
