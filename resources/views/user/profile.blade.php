@extends('layout.user')
@section('title','Home')
@section('content')
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

<section class="profile-section">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layout.userSidebar')
            </div>


            <div class="col-md-9">

                <div class="dashboard-content">

                    <h2 class="profile-title">
                        Dashboard
                    </h2>

                    <p>Welcome to our GharBasao dashboard</p>
                    @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach


                    </div>
                    @endif


                    <form method="POST" action="{{route('userProfileStore')}}" enctype="multipart/form-data">
                        @csrf

                        <!-- PROFILE IMAGE -->

                        <div class="profile-card">

                            <h4>Profile Photo</h4>

                            <div class="profile-upload">

                                <img id="previewImage" src="/images/default-user.png">

                                <input type="file" name="profile_image" id="profileImage">

                                <label for="profileImage" class="upload-btn">
                                    Upload Photo
                                </label>

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
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>

                                <div class=" col-md-6">
                                    <label>Height</label>
                                    <input type="text" name="height" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control">
                                </div>

                            </div>

                        </div>


                        <!-- PERSONAL DETAILS -->

                        <div class=" profile-card">

                            <h4>Personal Details</h4>

                            <div class="row">

                                <div class="col-md-6">
                                    <label>Religion</label>
                                    <input type="text" name="religion" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Caste</label>
                                    <input type="text" name="caste" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label>Marital Status</label>
                                    <input type="text" name="caste" class="form-control">
                                </div>


                            </div>

                        </div>


                        <!-- LOCATION -->

                        <div class="profile-card">

                            <h4>Location</h4>

                            <div class="row">

                                <div class="col-md-4">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>

                            </div>

                        </div>


                        <!-- EDUCATION -->

                        <div class="profile-card">

                            <h4>Education & Career</h4>

                            <div class="row">

                                <div class="col-md-4">
                                    <label>Education</label>
                                    <input type="text" name="education" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Profession</label>
                                    <input type="text" name="profession" class="form-control">
                                </div>

                                <div class="col-md-4">
                                    <label>Income</label>
                                    <input type="text" name="income" class="form-control">
                                </div>

                            </div>

                        </div>


                        <!-- ABOUT -->

                        <div class="profile-card">

                            <h4>About Yourself</h4>

                            <textarea name="about" rows="4" class="form-control"></textarea>

                        </div>


                        <button class="profile-btn">
                            Save Profile
                        </button>

                    </form>

                </div>
            </div>
        </div>

</section>
<script>
document.getElementById("profileImage").onchange = function(evt) {

    const [file] = this.files;

    if (file) {

        document.getElementById("previewImage").src = URL.createObjectURL(file);

    }

};
</script>
@endsection