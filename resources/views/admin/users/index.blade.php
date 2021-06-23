@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-heading text-center">
            <h2> Users</h2>
        </div>

            <table  class="table ">
                <thead>
                    <th>
                        Image
                    </th>

                    <th>
                    Name
                </th>

                <th>
                    Permission
                </th>

                
                <th>
                    Delete
                </th>

                </thead>
        

            <tbody>


              @if($users->count() > 0)

                    @foreach($users as $user)
                    <tr>
                        <td>
                            <img src="{{ asset( $user->profile->avatar ) }}" alt=""  width="50px" height="50px" style=" border-redius: 50%; ">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                           @if($user->admin)
                           <a href="{{ route('users.not_admin',['id'=>$user->id]) }}" class="btn btn-danger">Remove permissions</a>
                           @else

                           <a href="{{ route('users.admin',['id'=>$user->id]) }}" class="btn btn-success">Make admin</a>

                           @endif

                        
                        </td>

                        <td>
                            @if(Auth::id() !== $user->id)

                            <a href="{{ route('users.delete',['id'=>$user->id]) }}" class="btn btn-danger">delete</a>

                            @endif
                        </td>
                      
                    
                    </tr>
                    @endforeach

              @else

                <tr>
                    <th colspan="5" class="text-center">
                        <h3>No user yet</h3>
                    </th>
                </tr>

              @endif

            
            </tbody>
        </table>

    </div>

                
           

    
@endsection