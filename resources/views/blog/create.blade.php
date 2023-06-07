
<x-layout-home>
    <x-slot:header_one>
        <x-header-one/>
    </x-slot>

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
                        <form class="form-group" method="post" action="/blog/addnew" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control form-control-lg" value="{{old('title')}}"/>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control form-control-lg" cols="10" rows="5">{{old('content')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category" class="form-control form-control-lg">
                                    <option value="">Choose</option>
                                    {{old('category')}}
                                    <option value="General">General</option>
                                    <option value="Religion">Religion</option>
                                    <option value="Politics">Politics</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Music">Music</option>
                                    <option value="Movies">Movies</option>
                                    <option value="IT">IT</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" name="tags" class="form-control form-control-lg" value="{{old('tags')}}"/>
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" name="img" class="form-control form-control-lg"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary waves-effect waves-dark">Create</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <h5>My blogs</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout-home>

