@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img src="https://scontent-sin2-2.cdninstagram.com/vp/c88f0cc97185aa6d9a1ff7ce69b00c45/5D86693E/t51.2885-19/s150x150/49622765_358871694905259_1855250538422075392_n.jpg?_nc_ht=scontent-sin2-2.cdninstagram.com&_nc_cat=103"
      class="rounded-circle">
    </div>
    <div class="col-9 pt-5">
    <div class="d-flex justify-content-between align-items-baseline">
      <h1>{{ $user->username }}</h1>

      @can('update', $user->profile)
        <a href="/p/create">Add New Post</a>      
      @endcan
      
    </div>
    @can('update', $user->profile)
      <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
    @endcan    
    <div class="d-flex">
      <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
      <div class="pr-5"><strong>23k</strong> followers</div>
      <div class="pr-5"><strong>212</strong> following</div>
    </div>
    <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href={{ $user->profile->url }} target="_blank">{{ $user->profile->url }}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    @foreach($user->posts as $post)
      <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">
          <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </a>
      </div>
    @endforeach        
  </div>
</div>
@endsection
