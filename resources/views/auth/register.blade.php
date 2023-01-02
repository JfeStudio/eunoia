<x-guest>
    <div class="row flex-grow">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                    <img src="{{ asset('template') }}/images/logo.svg" alt="logo">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
                <form class="pt-3" {{ route('register') }} method="post">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="username" class="form-control form-control-lg border-left-0"
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-email-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="email" name="email" class="form-control form-control-lg border-left-0"
                                placeholder="Email">
                        </div>
                        @error('email')
                            <small class='text-danger'>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-account-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="text" name="name" class="form-control form-control-lg border-left-0"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <span class="input-group-text bg-transparent border-right-0">
                                    <i class="mdi mdi-lock-outline text-primary"></i>
                                </span>
                            </div>
                            <input type="password" name="password" class="form-control form-control-lg border-left-0"
                                id="exampleInputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                I agree to all Terms & Conditions
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit"
                            class="btn btn-block btn-primary btn-sm px-4 text-white  font-weight-medium auth-form-btn"
                            href="#">SIGN
                            UP</button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                        Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020
                All rights reserved.</p>
        </div>
    </div>
</x-guest>
