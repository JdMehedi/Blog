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
            Create new tag
        </div>

        <div class="card card-body">

            <form action="{{ route('tag.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Name</label>
                     <input type="text" name="tag" class="form-control"> 
                </div>
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        Store tag
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    
@endsection