@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-specializations-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-specializations-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-specializations-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">Bdoctors</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Complete an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                {{-- FORM --}}
                                <form action="{{ route('users.store') }}" method="POST" class="row g-3 needs-validation"
                                    enctype="multipart/form-data">

                                    @csrf
                                    {{-- IMAGE --}}
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="file" name="name" class="form-control" id="yourName" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    {{-- PHONE --}}
                                    <div class="col-12">
                                        <label for="phone" class="form-label">phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone" required>
                                        <div class="invalid-feedback">Metti il tuo numero</div>
                                    </div>

                                    {{-- INDIRIZZO --}}
                                    <div class="col-12">
                                        <label for="address" class="form-label">Your address</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="address" class="form-control" id="address"
                                                required>
                                        </div>
                                        <div class="invalid-feedback">Please insert your adddress!</div>
                                    </div>

                                    {{-- SPECIALIZATIONS --}}
                                    <div class="mb-3">
                                        <div class="form-group mt-5">
                                            <h5>Select specializations:</h5>
                                            <div class="row mt-3">
                                                @foreach ($specializations as $specialization)
                                                    <div class="col-3"> <!-- Colonna per ogni checkbox -->
                                                        <div class="form-check @error('specializations') is-invalid @enderror">
                                                            <input type="checkbox" class="form-check-input" name="specializations[]"
                                                                value="{{ $specialization->id }}">
                                                                {{ in_array($specialization->id, old('specializations', [])) ? 'checked' : '' )}}
                                                            <label class="form-check-label fw-bold ">
                                                                {{ $specialization->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                     {{-- PERFORMANCE --}}
                                     <div class="col-12">
                                        <label for="performance" class="form-label">Your performance</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="performance" class="form-control" id="performance"
                                                required>
                                        </div>
                                        <div class="invalid-feedback">Please insert your adddress!</div>
                                    </div>





                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value=""
                                                id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a
                                                    href="#">terms and conditions</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a>
                                        </p>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
