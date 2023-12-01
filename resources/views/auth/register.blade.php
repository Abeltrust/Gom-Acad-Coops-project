@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-3 mb-3"><h3>{{ __('Register') }}</h3></div>

                    <!-- Navigation Bar with Section Tracker -->
                    <ul class="nav nav-pills mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" id="personal-tab" data-bs-toggle="pill" href="#personal">Personal Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="work-tab" data-bs-toggle="pill" href="#work">Work Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="kin-tab" data-bs-toggle="pill" href="#kin">Next of Kin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="password-tab" data-bs-toggle="pill" href="#password">Password</a>
                        </li>
                    </ul>

                    <!-- Form Sections -->
                    <div class="tab-content">
                        <!-- Personal Information Section -->
                        <div class="tab-pane fade show active " id="personal">
                            <h5>Personal Information</h5>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="name" class="form-label">{{ __('Name') }} <span class="text-danger">*</span></label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="email" class="form-label">{{ __('Email Address') }} <span class="text-danger">*</span></label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="phoneNumber">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber">
                                        @error('phoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
                                        <label for="gender">Gender <span class="text-danger">*</span></label>
                                        <select class="form-control" id="gender" name="gender">
                                             <option value="" selected disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> 
                                <div class="row mb-3">
                                    <div class="form-group col-md-6 mb-2">
                                        <label for="maritalStatus">Marital Status <span class="text-danger">*</span></label>
                                        <select class="form-control" id="maritalStatus" name="maritalStatus">
                                            <option value="" selected disabled>Select marital status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                        </select>
                                        @error('maritalStatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 mb-2">
                                            <label for="userImage">Upload Image<span class="text-danger">*</span> <span><strong>(not larger than 3mb) </strong></strong></span></label>
                                            <input type="file" class="form-control-file" id="userImage" name="userImage">
                                            @error('userImage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           @enderror
                                    </div>
                                </div>

                                <!-- Next Button -->
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary w-100" onclick="nextSection('work-tab')">Next</button>
                                </div>
                            </form>
                        </div>

                        <!-- Work Information Section -->
                        <div class="tab-pane fade" id="work">
                            <h5>Work Information</h5>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="staffId">Staff ID <span class="text-danger">*</span></label>
                                        <input type="text" disabled class="form-control" id="staffId" name="staffId">
                                        @error('staffId')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="Department">Department <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="Department" name="Department">
                                        @error('Department')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 mb-2">
                                            <label for="monthlyDeduction">Amount to be Deducted Monthly <span class="text-danger">*</span> <span>minimum 2,000</span></label>
                                            <input type="number" class="form-control" id="monthlyDeduction" min="2000" name="monthlyDeduction">
                                            @error('monthlyDeduction')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                           @enderror
                                    </div>
                                </div>
                                <!-- Add more work-related fields here -->

                                <!-- Previous and Next Buttons -->
                                <div class="mb-3">
                                    <button type="button" class="btn btn-secondary" onclick="prevSection('personal-tab')">Previous</button>
                                    <button type="button" class="btn btn-primary" onclick="nextSection('kin-tab')">Next</button>
                                </div>
                            </form>
                        </div>

                        <!-- Next of Kin Section -->
                        <div class="tab-pane fade" id="kin">
                            <h5>Next Of Kin Information</h5>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label for="nextOfKinFullName">Next of Kin's Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('nextOfKinFullName') is-invalid @enderror" id="nextOfKinFullName" name="nextOfKinFullName">
                                        @error('nextOfKinFullName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="nextOfKinPhoneNumber">Next of Kin's Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control @error('nextOfKinPhoneNumber') is-invalid @enderror" id="nextOfKinPhoneNumber" name="nextOfKinPhoneNumber">
                                        @error('nextOfKinPhoneNumber')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label for="nextOfKinAddress">Next of Kin's Address <span class="text-danger">*</span></label>
                                            <textarea type="text" class="form-control" id="nextOfKinAddress" name="nextOfKinAddress"></textarea>
                                            @error('nextOfKinAddress')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                               </div>

                                <!-- Previous and Next Buttons -->
                                <div class="mb-3">
                                    <button type="button" class="btn btn-secondary" onclick="prevSection('work-tab')">Previous</button>
                                    <button type="button" class="btn btn-primary" onclick="nextSection('password-tab')">Next</button>
                                </div>
                            </form>
                        </div>

                        <!-- Password Section -->
                        <div class="tab-pane fade" id="password">
                            <h5>Password</h5>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="password" class="form-label">{{ __('Password') }} <span class="text-danger">*</span></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                 </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                   <div class=" col-md-6 ">
                                     <div class="form-check">
                                        <input class="form-check-input" requiered type="checkbox" name="rememb"  {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rememb">
                                            {{ __('I agree to terms and conditions.') }}
                                        </label>
                                     </div>
                                  </div>
                                    <div class="col-md-6">
                                        Have an account?   <a class="" href="{{ route('login') }}">{{ __('Login Here...') }}</a>
                                    </div>
                                </div>
                                <!-- Add more password-related fields here -->

                                <!-- Previous and Submit Buttons -->
                                <div class="row mb-3 d-flex justify-content-between flex-sm-row">
                                    <div class="col-md-12 ">
                                        <button type="button" class="btn btn-secondary mb-1" onclick="prevSection('kin-tab')">Previous</button>
                                        <button type="submit" class="btn btn-primary mb-1">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- JavaScript to switch tabs -->
                    <script>
                        function nextSection(tabId) {
                            $(`#${tabId}`).tab('show');
                        }

                        function prevSection(tabId) {
                            $(`#${tabId}`).tab('show');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
