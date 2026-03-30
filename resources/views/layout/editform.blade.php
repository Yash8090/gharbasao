<style>
.profile-section {
    padding: 20px 0;
    background: #f8fafc;
}

.profile-title {
    font-weight: 700;
    margin-bottom: 30px;
}

.profile-card {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 20px;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
}

.profile-card h4 {
    font-weight: 600;
    margin-bottom: 20px;
}

.form-control {
    border-radius: 6px;
    margin-bottom: 15px;
    padding: 10px;
}

.form-control:focus {
    border-color: #dc2626;
    box-shadow: none;
}

.profile-btn {
    background: #dc2626;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 6px;
    font-weight: 600;
}

.profile-btn:hover {
    background: #b91c1c;
}

.profile-upload {

    text-align: center;

}

.profile-upload img {

    width: 120px;

    height: 120px;

    border-radius: 50%;

    object-fit: cover;

    border: 4px solid #f3f4f6;

    margin-bottom: 10px;

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);

}

.upload-btn {

    display: inline-block;

    background: #dc2626;

    color: #fff;

    padding: 6px 15px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 14px;

}

.upload-btn:hover {

    background: #b91c1c;

}

#profileImage {

    display: none;

}
</style>



                <div class="dashboard-content">

                    
                    @if ($errors->any() || session('success'))

                    @if(session('success'))
                    <div class="alert alert-success">
                        <li>{{ session('success') }}</li>
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="alert alert-danger">

                        <ul class="mb-0">


                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach

                        </ul>
                    </div>
                    @endif
                    @endif


                    <form method="POST" action="{{ route('userEditSuccess')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- PROFILE IMAGE -->
                        <div class="profile-card">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Name</h4>
                                    <input type="text" value="{{$profile->user->name}}" name="name"
                                        class="form-control">

                                </div>
                                <div class="col-md-6">
                                    <h4>Profile Photo</h4>

                                    <div class="profile-upload">

                                        <img id="previewImage"
                                            src="{{$profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png')}}">

                                        <input type="file" name="profile_image" id="profileImage">

                                        <label for="profileImage" class="upload-btn">
                                            Upload Photo
                                        </label>

                                    </div>
                                </div>

                            </div>



                            <!-- BASIC DETAILS -->

                            <div class="profile-card">

                                <h4>Basic Details</h4>

                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="">Select</option>
                                            <option value="male" @selected($profile->gender == 'male')>Male
                                            </option>
                                            <option value="female" @selected($profile->gender =='female')>
                                                Female
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" value="{{$profile->dob}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Height</label>
                                        <input type="text" name="height" class="form-control"
                                            value="{{$profile->height}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <input type="text" name="age" class="form-control" value="{{$profile->age}}">
                                    </div>

                                </div>

                            </div>


                            <!-- PERSONAL DETAILS -->

                            <div class="profile-card">

                                <h4>Personal Details</h4>
                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Phone No</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{$profile->user->phone}}" disabled>
                                    </div>

                                    <div class=" col-md-6">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{$profile->user->email}}" disabled>
                                    </div>


                                </div>


                                <div class="row">

                                    <div class="col-md-6">
                                        <label>Religion</label>
                                        <input type="text" name="religion" class="form-control"
                                            value="{{$profile->religion}}">
                                    </div>

                                    <div class=" col-md-6">
                                        <label>Caste</label>
                                        <input type="text" name="caste" class="form-control"
                                            value="{{$profile->caste}}">
                                    </div>


                                </div>

                            </div>


                            <!-- LOCATION -->

                            <div class="profile-card">

                                <h4>Location</h4>

                                <div class="row">

                                    <div class="col-md-4">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{$profile->address}}">
                                    </div>

                                    <div class="col-md-4">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control"
                                            value="{{$profile->state}}">
                                    </div>

                                    <div class="col-md-4">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" value="{{$profile->city}}">
                                    </div>

                                </div>

                            </div>


                            <!-- EDUCATION -->

                            <div class="profile-card">

                                <h4>Education & Career</h4>

                                <div class="row">

                                    <div class="col-md-4">
                                        <label>Education</label>
                                        <input type="text" name="education" class="form-control"
                                            value="{{$profile->education}}">
                                    </div>

                                    <div class=" col-md-4">
                                        <label>Profession</label>
                                        <input type="text" name="profession" class="form-control"
                                            value="{{$profile->profession}}">
                                    </div>

                                    <div class="col-md-4">
                                        <label>Income</label>
                                        <input type="text" name="income" class="form-control"
                                            value="{{$profile->income}}">
                                    </div>

                                </div>

                            </div>


                            <!-- ABOUT -->

                            <div class=" profile-card">

                                <h4>About Yourself</h4>

                                <textarea name="about" rows="4" class="form-control">{{$profile->about}}</textarea>

                            </div>


                            <button class="profile-btn">
                                Update Profile
                            </button>

                    </form>

      
<script>
document.getElementById("profileImage").onchange = function(evt) {

    const [file] = this.files;

    if (file) {

        document.getElementById("previewImage").src = URL.createObjectURL(file);

    }

};
</script>