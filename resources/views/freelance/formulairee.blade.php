<div class="col-xl-9 col-lg-8">
    <div class="pro-pos">
        <div class="setting-content employee-profile-new">
            <form method="POST" action="{{ isset($freelance) ? route('freelance.update', $freelance->id) : route('freelance.save') }}" enctype="multipart/form-data">
                @csrf
                @if (isset($freelance))
                    @method('PUT')
                @endif
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
                                                <img src="{{ isset($freelance) && $freelance->profile_picture ? asset('storage/' . $freelance->profile_picture) : asset('assets/img/img-02.jpg') }}" alt="Image" id="blah">
                                            </div>
                                            <div class="ms-3">
                                                <label class="file-upload image-upbtn ms-0">
                                                    Upload Image <input type="file" id="imgInp" name="profile_picture">
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
                                    <input type="text" class="form-control" name="first_name" value="{{ isset($freelance) ? $freelance->first_name : '' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ isset($freelance) ? $freelance->last_name : '' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone_number" value="{{ isset($freelance) ? $freelance->phone_number : '' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control" name="email_address" value="{{ isset($freelance) ? $freelance->email_address : '' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Sex</label>
                                    <div>
                                        <input type="radio" id="male" name="sex" value="male" {{ isset($freelance) && $freelance->sex == 'male' ? 'checked' : '' }}>
                                        <label for="male">Male</label>
                                        <input type="radio" id="female" name="sex" value="female" {{ isset($freelance) && $freelance->sex == 'female' ? 'checked' : '' }}>
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Profession</label>
                                    <select class="form-control" name="profession" required>
                                        <option value="">Select Profession</option>
                                        <option value="Web Developer" {{ isset($freelance) && $freelance->profession == 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                                        <option value="Graphic Designer" {{ isset($freelance) && $freelance->profession == 'Graphic Designer' ? 'selected' : '' }}>Graphic Designer</option>
                                        <option value="Data Scientist" {{ isset($freelance) && $freelance->profession == 'Data Scientist' ? 'selected' : '' }}>Data Scientist</option>
                                        <option value="Project Manager" {{ isset($freelance) && $freelance->profession == 'Project Manager' ? 'selected' : '' }}>Project Manager</option>
                                        <option value="Content Writer" {{ isset($freelance) && $freelance->profession == 'Content Writer' ? 'selected' : '' }}>Content Writer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Upload PDF</label>
                                    <input type="file" class="form-control" name="freelance_pdf" accept="application/pdf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card text-end border-0">
                    <div class="pro-body">
                        <button class="btn btn-secondary click-btn btn-plan">Cancel</button>
                        <button type="submit" class="btn btn-primary">{{ isset($freelance) ? 'Update' : 'Save' }}</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
