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
           Update setting
        </div>

        <div class="card card-body">

            <form action="{{ route('settings.update') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                     <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Contact Number</label>
                     <input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                     <input type="text" name="contact_email" value="{{$settings->contact_email}}" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">Adress</label>
                     <input type="text" name="address" value="{{$settings->address}}" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="name">About</label>
                     <input type="text" name="about" value="{{$settings->about}}" class="form-control"> 
                </div>
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        update setting
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    
@endsection