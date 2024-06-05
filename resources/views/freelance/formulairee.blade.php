<div class="col-xl-9 col-lg-8">
    <div class="pro-pos">
        <div class="setting-content employee-profile-new">
            <!-- Formulaire de mise à jour -->
            <form method="POST"
            action="{{ isset($freelance) ? route('freelance.update', $freelance->id) : route('freelance.save') }}">
            @csrf
                @method('PUT')

                <!-- Champs du formulaire avec informations du freelance pré-remplies -->
                <div class="card">
                    <div class="pro-head">
                        <h3>Profile Setting</h3>
                    </div>
                    <div class="pro-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row pro-pad pt-0 ps-0">
                                    <div class="input-block col-md-6 pro-pic">
                                        <h4 class="mb-3">Personal Information</h4>
                                        <label class="form-label">Profile Picture</label>
                                        <div class="d-flex align-items-center">
                                            <div class="upload-images">
                                                <img src="assets/img/img-02.jpg" alt="Image" id="blah">
                                            </div>
                                            <div class="ms-3">
                                                <label class="file-upload image-upbtn ms-0">
                                                    Upload Image <input type="file" id="imgInp">
                                                </label>
                                                <p>Max Image size 300*300</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                        value="{{ isset($freelance) ? $freelance->first_name : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        value="{{ isset($freelance) ? $freelance->last_name : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number"
                                        value="{{ isset($freelance) ? $freelance->phone_number : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="email_address"
                                        value="{{ isset($freelance) ? $freelance->email_address : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card text-end border-0">
                    <div class="pro-body">
                        <button class="btn btn-secondary click-btn btn-plan">Cancel</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
