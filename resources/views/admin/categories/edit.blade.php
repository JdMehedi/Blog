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
            Edit Category
        </div>

        <div class="card card-body">

            <form action="{{ route('category.update',['id'=> $category->id ]) }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                     <input type="text" name="name" value="{{ $category->name }}" class="form-control"> 
                </div>
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        Update Category
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    
@endsection