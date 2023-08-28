@include('layouts.app')

<div class="container">
    <div class="card  m-auto" style="width: 40rem;">
    <h5 class="card-title text-center mt-4">Blog Post</h5>
        <div class="card-body">
            <div>
                <h6 class="text-decoration-underline">{{$post->title}}</h6>
                
            </div>
            <div>
            <p>content : {{$post->content}}</p>
                
            </div>
        </div>
    </div>
</div>
