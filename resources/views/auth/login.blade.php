
@include('layouts.header',['title'=>'WorkerNepal - Login'])

<body class="bg-dark">

<div class="container mt-5">
    <div class="row justify-content-center mt-5">
       
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header py-3 ">
                    <h4 class="text-center"> <a href="/" class="text-decoration-none">Workers Nepal</a> </h4>
                <p class="text-center"><strong>Enter your details to sign in</strong></p>
                </div>
                <div class="card-body py-5">
                    <form action="{{route('login.user')}}" method="POST">     
                        @if (session('message'))
                        <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    @endif
                    
                    @csrf                 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}"  >
                        <span class="text-danger">@error('email')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>   
                          <div class="password-container position-relative">
                            <input type="password" class="form-control" id="password" name="password">
                            <i class="fa fa-eye" onclick="togglepassword(this)"
                                style="position: absolute; right: 10px; top: 10px; cursor: pointer;" ></i>
                        </div>
                        <span class="text-danger" id="password-error">
                            <!-- Your server-side error message will be displayed here -->
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="register" class="mt-3 text-decoration-none">Forgot password?</a>
                        
                    </div>
                </div>
                        <button type="submit" class="btn btn-info mx-2">Sign in</button>
                    </form>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('auth.signup')}}" class="mt-3 text-decoration-none me-4 mb-2 ">Sign up Here</a>
                        
                    </div>
                    
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

</body>
</html>