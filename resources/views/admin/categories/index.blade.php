@extends('layouts.app')

@section('content')

    

    <div class="card card-default">
        <div class="card-heading text-center">
            <h2> All category</h2>
        </div>

            <table  class="table ">
                <thead>
                    <th>
                        Category Name
                    </th>

                    <th>
                    Editing
                </th>

                <th>
                    Deleting
                </th>
                </thead>
        

            <tbody>
                @if($categories->count() > 0)
                @foreach($categories as $category)
                <tr>
                    
                    <td>
                    
                            {{$category->name}}
                        
                    </td>
                    <td>
                        <a href="{{ route('category.edit',['id'=> $category->id ]) }}" class="btn btn-info btn-sm">
                            <span class="glyphicon glyphicon-pencil">Edit</span>
                        </a>
                    </td>

                    <td>
                        <a href="{{ route('category.delete',['id'=> $category->id ]) }}" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-pencil">Delete</span>
                        </a>
                    </td>
                
                </tr>
                @endforeach

                @else
                    <tr>
                        <th colspan="5" class="text-center">
                            <h3>No category published yet</h3>
                        </th>
                    </tr>

                @endif

            
            </tbody>
        </table>

    </div>

                
           

    
@endsection