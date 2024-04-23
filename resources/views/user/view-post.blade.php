@extends('layouts/user-layout')
@section('space-work')
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/' .$post_data->photo) }}"  alt="" class="card-img-top">
                        <div class="row my-2">
                            <div class="col-xl-6">
                                {{-- here we will pass on which day the post was published --}}
                                <i class="bi bi-calendar"></i>
                                <span class="text-muted">{{date('d-m-Y h:i',strtotime($post_data->created_at))}}</span> <br>
                                <livewire:profile-image :userId="$post_data->user_id" />
                                <span class="text-capitalized">{{$post_data->name}}</span>
                                <livewire:follow-component :followedId="$post_data->user_id" />
                            </div>
                            {{-- let's shift this div to like component & let's pass post_id to this component --}}
                            <livewire:like-component :postId="$post_data->id" />
                        </div>
                        <h2 class="text-primary">{{$post_data->post_title}}</h2>
                        <p>{{$post_data->content}}</p>
                        <hr>
                        <h6 class="card-title">Leave a comment</h6>
                        <livewire:post-comment :postId="$post_data->id"/>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body pb-0">
              <h5 class="card-title">Related Posts</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h6><a href="#">Nihil blanditiis at in nihil autem</a></h6>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>


              </div><!-- End sidebar recent posts-->

            </div>
                </div>
            </div>
        </div>
    </div>
@endsection