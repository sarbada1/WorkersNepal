@include('layouts.header', ['title' => 'WorkerNepal - Register'])

<body class="bg-dark">
    <div class="container mt-5 ">
        <div class="row justify-content-center mt-5">

            <div class="col-md-6 mt-5">
                <div class="card mt-5">
                    <div class="card-header py-3 ">
                        <h4 class="text-center"> <a href="/" class="text-decoration-none">Workers Nepal</a> </h4>
                        <p class="text-center"><strong>Enter your details to sign up</strong></p>
                    </div>
                    <div class="card-body py-5">
                        <form action="{{ route('register.user') }}" method="POST">
                            @if (session('message'))
                                <div class="alert alert-{{ session('status') }} alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            @csrf
                            <div class="form-group">
                                <label for="username">Username<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ old('username') }}">
                                <span class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="mobile" name="mobile_no"
                                    value="{{ old('mobile_no') }}">
                                <span class="text-danger">
                                    @error('mobile_no')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="password">Password<span class="text-danger">*</span></label>
                                <div class="password-container position-relative">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <i class="fa fa-eye" onclick="togglepassword(this)"
                                        style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
                                </div>
                                <span class="text-danger" id="password-error">
                                    <!-- Your server-side error message will be displayed here -->
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                <div class="password-container position-relative">

                                    <i class="fa fa-eye" onclick="togglepassword(this)"
                                        style="position: absolute; right: 10px; top: 10px; cursor: pointer;"></i>
                                    <span class="text-danger">
                                        @error('confirmPassword')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info mx-2">Sign up</button>
                        </form>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('auth.signin') }}" class="mt-3 text-decoration-none me-4 mb-2 ">Sign in
                                Here</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')

</body>

</html>
