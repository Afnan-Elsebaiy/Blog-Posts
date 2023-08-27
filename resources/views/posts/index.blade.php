@include('layouts.app')
<div class="container">
    <a type="button" class="btn btn-outline-info m-2" href="{{route('posts.create')}}">New Post</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Blog Post</h5>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>
                            {{$post->id}}
                        </td>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{$post->content}}
                        </td>
                        <td>
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-outline-primary">Edit</a>
                            <a href="{{route('posts.show',$post->id)}}" class="btn btn-outline-success">View</a>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>