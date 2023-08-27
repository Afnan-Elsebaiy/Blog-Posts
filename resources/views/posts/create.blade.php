@include('layouts.app')
<div class="container">
    <div class="card  m-auto" style="width: 40rem;">
        <div class="card-body">
            <form method="post" action="{{route('post.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter your Title">

                </div>
                <div class="mb-3">
                    <label for="exampleInputContent" class="form-label">Content</label>
                    <input type="text" class="form-control" id="exampleInputContent" placeholder="Enter your Content">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-outline-success">Apply</button>
                </div>
            </form>
        </div>
    </div>
</div>