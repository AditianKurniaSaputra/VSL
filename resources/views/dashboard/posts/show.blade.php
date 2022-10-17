@extends('dashboard.layouts.main')


@section('container')
<div class="container">
   <div class="row my-3">
       <div class="col-lg-8">
           <h1 class="mb-3">{{ $post->title }}</h1>


           @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
           @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
           @endif
          
 
       <article class="my-3 fs-5">
           {!! $post->body !!}
       </article>
<br>
       <a href="/dashboardvl/posts" class="btn btn-dark"><span data-feather="corner-down-left"></span> Back to Admin post</a>
       <a href="/dashboardvl/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit-3"></span> Edit</a>
       <form action="/dashboardvl/posts/{{ $post->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan Menghapusnya?')"><span data-feather="trash-2"></span> Delete</button>

                  </form>
       </div>
   </div>
</div>
@endsection