@include('layouts.app')
<div class="container">
    <div class="card  m-auto" style="width: 40rem;">
        <div class="card-body">
        <h5 class="card-title m-4 text-center">Blog Post</h5>
            <form method="post" action="{{route('posts.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Enter your Title">

                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">Content</label>
                    <input type="text" class="form-control" id="exampleInputContent" name="content" placeholder="Enter your Content">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-outline-success cursor-pointer	">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>