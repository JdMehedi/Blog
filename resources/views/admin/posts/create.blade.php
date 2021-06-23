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
            Create new post
        </div>

        <div class="card card-body">

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                     <input type="text" name="title" class="form-control"> 
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                   <textarea name="content" id="summernote" cols="6" rows="6" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="Featured">Featured Image</label>
                     <input type="file" name="featured" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="category"> Select a category</label>
                     <select name="category_id" id="category" class="form-control">
                         @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{$category->name}} </option>
                         @endforeach
                     </select>
                </div>

                <div class="form-group">
                    <label for="tag">Select tag</label>

                  @foreach($tags as $tag)

                  <div class="form-check">
                    <input class="form-check-input" name="tags[]" type="checkbox" value="{{ $tag->id }}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$tag->tag}}
                    </label>
                  </div>
                  @endforeach

                </div>

                <div class="form-group">
                  <div class="">
                    <button class="btn btn-success " type="submit">
                        Store Post
                    </button>
                  </div>
                </div>

            </form>

        </div>

    </div>

    @section('styles')

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection



@section('scripts')


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

    
@endsection

    
@endsection

