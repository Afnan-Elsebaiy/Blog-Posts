@include('layouts.app')
<div class="container">

    <div class="card  m-auto" style="width: 50rem;">
  
        <div class="card-body">
            <h5 class="card-title text-center">Blog Post</h5>
            <a type="button" class="btn btn-outline-info m-2 cursor-pointer" href="{{route('posts.create')}}">New Post</a>
            <table class="table table-hover text-center" >
                <thead  class="table-dark" >
                    <tr class="">
                        <th >#</th>
                        <th >Title</th>
                        <th >Content</th>
                        <th  colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr class="">
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
                            <a href="{{route('posts.edit',$post->id)}}" class=" "><i class="fa-regular fa-pen-to-square text-info"></i></a>
                            <a href="{{route('posts.show',$post->id)}}" class=" mx-2"><i class="fa-regular fa-eye text-secondary "></i></a>
                        
                            <form action="{{route('posts.destroy',$post->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button  class="btn" onclick="return confirm('Are You Sure You Want To Proceed With The Current Request!')" type="submit" style="border:0; background:0;" ><i class="fa-regular fa-trash-can text-danger cursor-pointer"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>