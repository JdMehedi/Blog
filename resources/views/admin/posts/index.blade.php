@extends('layouts.app')

@section('content')

    {{-- @if(count($errors) > 0 )
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{$error}}
            </li>
            @endforeach
    </ul>
    @endif --}}

    <div class="card card-default">
        <div class="card-heading text-center">
            <h2> All Post</h2>
        </div>

            <table  class="table ">
                <thead>
                    <th>
                        Image
                    </th>

                    <th>
                    Title
                </th>

                <th>
                    Editing
                </th>

                
                <th>
                    Trash
                </th>

                </thead>
        

            <tbody>


              @if($posts->count() > 0)

                    @foreach($posts as $post)
                    <tr>
                        
                        <td><img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px%" height="50px"></td>
                        <td>{{ $post->title }}</td>
                        <td>
                        <a href="{{route('post.edit',['id'=>$post->id])}}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <a href="{{route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">Trashed</a>
                        </td>
                    
                    </tr>
                    @endforeach

              @else

                <tr>
                    <th colspan="5" class="text-center">
                        <h3>No post published yet</h3>
                    </th>
                </tr>

              @endif

            
            </tbody>
        </table>

    </div>

                
           

    
@endsection