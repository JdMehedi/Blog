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
           <h2>Edit the post</h2>
        </div>

        <div class="card card-body">

            <form action="{{ route('post.update',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                     <input type="text" name="title" class="form-control" value="{{ $post->title }}"> 
                </div> 
                <div class="form-group">
                    <label for="content">Content</label>
                     <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea> 
                </div>
                <div class="form-group">
                    <label for="Featured">Featured Image</label>
                     <input type="file" name="featured" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="category"> Select a category</label>
                     <select name="category_id" id="category" class="form-control">
                         @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                                @if($post->category->id ==$category->id)
                                    selected
                                @endif
                                
                                > {{$category->name}} </option>
                         @endforeach
                     </select>
                </div>

                <div class="form-group">
                    <label for="tag">Select tag</label>

                  @foreach($tags as $tag)

                  <div class="form-check">
                    <input class="form-check-input" name="tags[]" type="checkbox" value="{{ $tag->id }}" 
                    @foreach($post->tags as $post_tag)

                        @if($tag->id == $post_tag->id)
                            checked
                        @endif

                    @endforeach
                    
                    id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$tag->tag}}
                    </label>
                  </div>
                  @endforeach

                </div>

                <div class="form-group">
                  <div class="">
                    <button class="btn btn-success" type="submit">
                        Update Post
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    
@endsection