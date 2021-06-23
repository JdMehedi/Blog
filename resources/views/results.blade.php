
@extends('layouts.frontend')

@section('content')

<div class="content-wrapper">

        <div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Search results: {{ $query }}</h1>
            </div>
        </div>
      




        {{-- main --}}

        <div class="container">
            <div class="row medium-padding120">
                <main class="main">
                    
                   @if($post->count() > 0)

                        <div class="row">
                            @foreach($post as $post)
                                <div class="case-item-wrap">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="case-item">
                                            <div class="case-item__thumb">
                                                <img src="{{ $post->featured }}" alt="our case">
                                            </div>
                                            <h6 class="case-item__title"><a href="{{ route('post.single', ['slug' =>$post->slug ]) }}">{{$post->title}}</a></h6>
                                        </div>
                                    </div>
                            @endforeach
                        
                        </div>

                   @else

                        <h2 class="text-center">No post found</h2>
                   @endif
        
                    <!-- End Post Details -->
                    <br>
                    <br>
                    <br>
                    <!-- Sidebar-->
        
                        </aside>
                    </div>
        
                    <!-- End Sidebar-->
        
                </main>
            </div>
        </div>
        
    
@endsection