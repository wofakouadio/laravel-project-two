
<x-blog-body>

        <div class="page-breadcrumb mb-3">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">New Blog</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/blog/create">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New</li>
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
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <form class="form-group" method="post" action="/blog/new" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control form-control-lg" value="{{old('title')}}"/>
                                @error('title')
                                    <p class="badge badge-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control form-control-lg" cols="10" rows="5">{{old('content')}}</textarea>
                                @error('content')
                                    <p class="badge badge-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control form-control-lg">
                                    @if(old('category') != '')
                                    <option value="">Choose</option>
                                    <option value="{{old('category')}}" selected>{{old('category')}}</option>
                                    <option value="General">General</option>
                                    <option value="Religion">Religion</option>
                                    <option value="Politics">Politics</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Music">Music</option>
                                    <option value="Movies">Movies</option>
                                    <option value="IT">IT</option>
                                    @else
                                        <option value="">Choose</option>
                                        <option value="General">General</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Politics">Politics</option>
                                        <option value="Entertainment">Entertainment</option>
                                        <option value="Music">Music</option>
                                        <option value="Movies">Movies</option>
                                        <option value="IT">IT</option>
                                    @endif
                                </select>
                                @error('category')
                                    <p class="badge badge-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" name="tags" class="form-control form-control-lg" value="{{old('tags')}}"/>
                                @error('tags')
                                    <p class="badge badge-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" name="img" class="form-control form-control-lg"/>
                                @error('img')
                                    <p class="badge badge-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary waves-effect waves-dark">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-6">
{{--                        @props(['blog'])--}}
                        <h5>My blogs</h5>
                        @if(count($blogs) != 0)
                            <div class="row el-element-overlay">
                                @foreach($blogs as $blog)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1">
                                                    <img src="{{ asset('storage/'.$blog->img)}}" alt="user" /></div>
                                                <div class="el-card-content">
                                                    <h5 class="m-b-0">{{$blog->title}}</h5>
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
                </div>
            </div>
        </div>

    </div>
</x-blog-body>

