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
            <h2> All Tag</h2>
        </div>

            <table  class="table ">
                <thead>
                    <th>
                        Tag Name
                    </th>

                    <th>
                    Editing
                </th>

                <th>
                    Deleting
                </th>
                </thead>
        

            <tbody>
                @if($tags->count() > 0)
                @foreach($tags as $tag)
                <tr>
                    
                    <td>
                    
                            {{$tag->tag}}
                        
                    </td>
                    <td>
                        <a href="{{ route('tag.edit',['id'=> $tag->id ]) }}" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-pencil">Edit</span>
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('tag.delete',['id'=> $tag->id ]) }}" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-pencil">Delete</span>
                        </a>
                    </td>
                
                </tr>
                @endforeach

                @else
                    <tr>
                        <th colspan="5" class="text-center">
                            <h3>No tag published yet</h3>
                        </th>
                    </tr>

                @endif

            
            </tbody>
        </table>

    </div>

                
           

    
@endsection