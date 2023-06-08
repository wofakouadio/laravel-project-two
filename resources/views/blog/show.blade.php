
<x-blog-body>

    <div class="container-fluid">
{{--        @props('blog')--}}
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row p-20">
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-uppercase">{{$blog->title}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center p-20">
                            <img src="{{asset('storage/'.$blog->img)}}" alt="user" width="50%"/>
                        </div>
                        <p class="text-justify">{{$blog->content}}</p>
                        <div class="">
                            <h6>Source : {{$blog->author_name}}</h6>
                            <h6>Date : {{$blog->created_at}}</h6>
                            <h6>Category : <a href="?/category={{$blog->category}}">{{$blog->category}}</a></h6>
                            <h6>Tags : <x-tags :Tags="$blog->tags"/></h6>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Updates</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-blog-body>

