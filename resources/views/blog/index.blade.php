<x-blog-body>
    <x-page-title/>
    <div class="container-fluid my-5">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        @if(count($blogs) != 0)
        <div class="row el-element-overlay">
            @foreach($blogs as $blog)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('storage/'.$blog->img)}}" alt="user" /></div>
                            <div class="el-card-content">
                                <h5 class="m-b-0">{{$blog->title}}</h5>
                                <a class="btn btn-primary btn-outline el-link" href="/blog/{{$blog->id}}/show"><i class="mdi mdi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @else
            <h4>No Blog found</h4>
        @endif
        <div class="mt-6 p-4">
            {{$blogs->links()}}
        </div>
    </div>
</x-blog-body>
