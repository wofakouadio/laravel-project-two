<x-blog-body>

    <div class="page-breadcrumb mb-3">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">My Blogs</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="/blog/manage">Manage</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="card p-20">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Featured Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Category</th>
                            <th scope="col">Post Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @unless($blogs->isEmpty())
                        @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <img class="img rounded" width="70px" src="{{ asset('storage/'.$blog->img)}}" alt="user"/>
                                </td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->author_name}}</td>
                                <td>{{$blog->category}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>
                                    <a href="/blog/{{$blog->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                    <form action="/blog/{{$blog->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No blog found</td>
                        </tr>
                    @endunless
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{$blogs->links()}}
            </div>
        </div>


    </div>

</x-blog-body>
