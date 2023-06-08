<x-layout-home>
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
        <div class="auth-box bg-dark border-top border-secondary">
            <div>
                <div class="text-center p-t-20 p-b-20">
                    <span class="db"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></span>
                </div>
                <!-- Form -->
                <form class="form-horizontal m-t-20" action="/users/authentication" method="post">
                    @csrf
                    <div class="row p-b-30">
                        <div class="col-12">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{old('email')}}" >
                            </div>
                            @error('email')
                                <p class="badge badge-danger">{{$message}}</p>
                            @enderror
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" value="{{old('password')}}">
                            </div>
                            @error('password')
                                <p class="badge badge-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row border-top border-secondary">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="p-t-20">
                                    <button class="btn btn-block btn-lg btn-info" type="submit">Login</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="p-t-20">
                                    <a href="/register" class="btn btn-info float-left">Register</a>
                                    <a href="/" class="btn btn-info float-right">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout-home>
