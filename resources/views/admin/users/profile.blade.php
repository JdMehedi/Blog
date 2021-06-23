@extends('layouts.app')

@section('content')

        @if(count($errors) > 0 )
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif


    <div class="card card-default">

        <div class="card-heading my-2 text-center">
            Create your profile
        </div>
    
        <div class="card card-body">

            @if($user->admin)

            <form action="{{ route('users.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">User Name</label>
                     <input type="text" name="name" value="{{$user->name}}" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="name">Emil</label>
                     <input type="email" name="email" value="{{$user->email}}" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                     <input type="text" name="password"  class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Upload an avatar</label>
                     <input type="file" name="avatar" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Facebook profile</label>
                     <input type="text" name="facebook" value="{{$user->profile->facebook }}" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="name">Youtube profile</label>
                     <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="name">About</label>
                     <textarea name="about" id="ABOUT" cols="6" rows="5"  class="form-control">{{ $user->profile->about }}</textarea> 
                </div>
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        Update user profile
                    </button>
                  </div>
                </div>

            </form>

            @else

            <h2 class="text-center">You do not have permissions to update your profile</h2>

            @endif

        </div>

        
    </div>

    
@endsection