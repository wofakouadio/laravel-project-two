
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
                        <div class="text">
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
                    <div class="card-body">
                        @unless($blogs->isEmpty())
                            @foreach($blogs as $blog)
                                <div class="text">
                                    <a href="/blog/{{$blog->id}}">{{$blog->title}} </a> <br/>
                                    <small>Posted by {{$blog->author_name}}</small> <br/>
                                    <small>Posted on the {{date('l, j F, Y H:i:s', strtotime($blog->created_at))}}</small>
                                </div>
                            @endforeach
                        @else
                            <p>Not available</p>
                        @endunless
                    </div>
                    <div class="mt-6 p-4">
                        {{$blogs->links()}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Search</h4>
                    </div>
                    <div class="card-body">
                        @include('partials._search')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-blog-body>

