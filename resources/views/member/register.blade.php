@extends('layouts.auth')

@section('container')
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-header" style="background-color: #f7ea39c7">
                            {{-- <div class="avatar-lg col-xl-3">
                                <img class="rounded-circle img-thumbnail" src="assets/images/top-fit.jpg" alt="">
                            </div> --}}

                            <h1 class="text-dark text-center">
                                Register
                            </h1>
                        </div>

                        <form action="{{ url('register-post') }}" id="multiStepForm" method="post" enctype="multipart/form-data">
                        @csrf

                            <div class="row card-body">
                                <!-- Step 1 -->
                                <div class="col-xl-10 offset-xl-1 mt-2">
                                    <div class="step active">
                                        <div class="text-center">
                                            <div class="profile-user position-relative d-inline-block mx-auto mb-2">
                                                <img src="assets/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image">

                                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                    <input id="profile-img-file-input" name="profile-img" type="file" class="profile-img-file-input" required>

                                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="ri-camera-fill"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class="fs-16 mb-1">Tambah Foto Profil <small class="text-danger"> *</small></h5>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="col-form-label fw-bold">Nama <small class="text-danger"> *</small></label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="gender" class="col-form-label fw-bold">Jenis Kelamin <small class="text-danger"> *</small></label>

                                            <select name="gender" id="gender" class="form-select" aria-label=".form-select-sm example" required>
                                                <option value="" disabled selected>- Pilih -</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="col-form-label fw-bold">Alamat <small class="text-danger"> *</small></label>
                                            <input type="text" id="address" name="address" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_number" class="col-form-label fw-bold">Nomor HP <small class="text-danger"> *</small></label>

                                            <div class="input-group">
                                                <span class="input-group-text" id="inputGroup-sizing-default">+62 </span>

                                                <input name="phone_number" id="phone_number" type="number" class="form-control" aria-describedby="inputGroup-sizing-default" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="weight" class="col-form-label fw-bold">Berat Badan <small class="text-muted"> (kg)</small> <small class="text-danger"> *</small></label>
                                            <input type="number" id="weight" name="weight" class="form-control" placeholder="Tulis angka saja. Contoh : 50" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="height" class="col-form-label fw-bold">Tinggi Badan <small class="text-muted"> (cm)</small> <small class="text-danger"> *</small></label>
                                            <input type="number" id="height" name="height" class="form-control" placeholder="Tulis angka saja. Contoh : 160" required>
                                        </div>

                                        <div class="d-flex mt-4" style="justify-content: flex-end">
                                            <button type="button" class="btn" style="background-color: #f7ea39c7" onclick="nextStep()">Selanjutnya <i class="ri-arrow-right-fill me-1 align-bottom"></i> </button>
                                        </div>

                                    </div>
                                </div>

                                <!-- Step 2 -->
                                <div class="col-xl-10 offset-xl-1">
                                    <div class="step">
                                        <div class="form-group">
                                            <label for="bust" class="col-form-label fw-bold">Lingkar Dada <small class="text-muted"> (cm)</small></label>
                                            <input type="number" id="bust" name="bust" class="form-control" placeholder="Tulis angka saja. Contoh : 90">
                                        </div>

                                        <div class="form-group">
                                            <label for="abdomen" class="col-form-label fw-bold">Lingkar Perut <small class="text-muted"> (cm)</small></label>
                                            <input type="number" id="abdomen" name="abdomen" class="form-control" placeholder="Tulis angka saja. Contoh : 70">
                                        </div>

                                        <div class="form-group">
                                            <label for="hip" class="col-form-label fw-bold">Lingkar Pinggul <small class="text-muted"> (cm)</small></label>
                                            <input type="number" id="hip" name="hip" class="form-control" placeholder="Tulis angka saja. Contoh : 90">
                                        </div>

                                        <div class="form-group">
                                            <label for="thigh" class="col-form-label fw-bold">Lingkar Paha <small class="text-muted"> (cm)</small></label>
                                            <input type="number" id="thigh" name="thigh" class="form-control" placeholder="Tulis angka saja. Contoh : 50">
                                        </div>

                                        <div class="d-flex mt-4" style="justify-content: space-between">
                                            <button type="button" class="btn btn-light waves-effect" onclick="prevStep()"><i class="ri-arrow-left-fill me-1 align-bottom"></i> Sebelumnya</button>

                                            <button type="button" class="btn" style="background-color: #f7ea39c7" onclick="nextStep()">Selanjutnya <i class="ri-arrow-right-fill me-1 align-bottom"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Step 3 -->
                                <div class="col-xl-10 offset-xl-1">
                                    <div class="step">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label fw-bold">Email <small class="text-danger"> *</small></label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="col-form-label fw-bold">Password <small class="text-danger"> *</small></label>

                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" id="password" name="password" class="form-control password-input" onpaste="return false" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password harus terdiri dari minimal 8 karakter, termasuk huruf besar, huruf kecil, dan angka." required>

                                                <div class="invalid-feedback">
                                                    Password harus terdiri dari minimal 8 karakter, termasuk huruf besar, huruf kecil, dan angka.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="confirm_pw" class="col-form-label fw-bold">Ulangi Password <small class="text-danger"> *</small></label>

                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" id="confirm_pw" name="confirm_pw" class="form-control password-input" onpaste="return false" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

                                                <div class="invalid-feedback">
                                                    Tolong masukkan password yang sama
                                                </div>
                                            </div>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light rounded">
                                            <h5 class="fs-13">Password must contain:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                        </div>

                                        <div class="d-flex mt-4" style="justify-content: space-between">
                                            <button type="button" class="btn btn-light waves-effect" onclick="prevStep()"><i class="ri-arrow-left-fill me-1 align-bottom"></i> Sebelumnya</button>

                                            <button type="submit" class="btn" style="background-color: #f7ea39c7">Buat Akun</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-footer" style="background-color: #f7ea39c7"></div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->
@endsection

@push('script')
    <script>
        // Step
        let currentStep = 0;
        const steps = $(".step");

        function showStep(step) {
            steps.removeClass("active").eq(step).addClass("active");
        }

        function validateInputs() {
            let isValid = true;
            steps.eq(currentStep).find('input[required], select[required]').each(function() {
                if (!this.value) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                    alert(`Kolom ${$(this).attr('name')} harus diisi.`);
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            return isValid;
        }

        function nextStep() {
            if (validateInputs()) {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Show the first step initially
        showStep(currentStep);

        // Password & Confirm Password
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            const passwordInput = document.getElementById("password");
            const confirmPwInput = document.getElementById("confirm_pw");
            const invalidFeedback = confirmPwInput.nextElementSibling;

            form.addEventListener("submit", function(event) {
                if (passwordInput.value !== confirmPwInput.value) {
                    event.preventDefault(); // Mencegah pengiriman form
                    confirmPwInput.setCustomValidity("Passwords do not match");
                    invalidFeedback.style.display = "block";
                } else {
                    confirmPwInput.setCustomValidity(""); // Reset custom validity
                }
            });

            confirmPwInput.addEventListener("input", function() {
                if (passwordInput.value === confirmPwInput.value) {
                    confirmPwInput.setCustomValidity(""); // Passwords match
                    invalidFeedback.style.display = "none";
                } else {
                    confirmPwInput.setCustomValidity("Passwords do not match");
                    invalidFeedback.style.display = "block";
                }
            });
        });

    </script>
@endpush
