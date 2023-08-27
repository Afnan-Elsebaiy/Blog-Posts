@include('layouts.app')
<div class="container">
    <div class="card  m-auto" style="width: 40rem;">
        <div class="card-body">
            <form method="post" action="">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{$post->title}}" placeholder="Enter your Title">

                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">Content</label>
                    <input type="text" class="form-control" id="exampleInputContent" name="content" value="{{$post->content}}" placeholder="Enter your Content">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-outline-success">Apply Change</button>
                </div>
            </form>
        </div>
    </div>
</div>