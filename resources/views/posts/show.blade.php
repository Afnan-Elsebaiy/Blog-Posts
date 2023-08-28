@include('layouts.app')

<div class="container">
    <div class="card  m-auto" style="width: 40rem;">
    <h5 class="card-title m-auto">Blog Post</h5>
        <div class="card-body">
            <div>
                <p>Title : {{$post->title}}</p>
                
            </div>
            <div>
            <p>content : {{$post->content}}</p>
                
            </div>
        </div>
    </div>
</div>
