<style>
    .image-upload-section {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.upload-box {
    width: 120px;
    height: 120px;
    border: 2px dashed #ccc;
    border-radius: 10px;
    position: relative;
    cursor: pointer;
    overflow: hidden;
}

.upload-box input {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}

.upload-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.upload-box span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 30px;
    color: #aaa;
}
</style>


<div class="container mt-4">
    <div class="card p-4 shadow">

        <h3> User Registration</h3>

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


        <form method="POST" action="{{isset($profile) ? route('updateUser',$profile->id) : route('adminUserAdded')}}" enctype="multipart/form-data">
            @csrf

            <div class="row">

            @php
$selectedProfileFor = old('profile_for', $profile->user->profile_for ?? '');
@endphp
            <div class="col-md-6 mb-3">
                <label for="">Profile For</label>
                <select  name="profile_for" class="form-control">
                    <option value="" >Choose Profile</option>  
                  <option value="groom" {{ $selectedProfileFor == 'groom' ? 'selected' : '' }}>Groom</option>
                    <option value="bride" {{ $selectedProfileFor == 'bride' ? 'selected' : '' }}>Bride</option>
                </select>
            </div>

                <div class="col-md-6 mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name',$profile->user->name ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email',$profile->user->email ?? '')}}">
                </div>

                    @php
                    $selectedProfileFor = old('gender', $profile->gender ?? '');
                @endphp
                <div class="col-md-6 mb-3">
                    <label>Gender</label>
                    <select name="gender" class="form-control"  >
                        <option value="" >Choose Gender</option>  
                       <option value="male" {{ $selectedProfileFor == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $selectedProfileFor == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                   @error('gender')
    <span style="color:red; font-size:12px;">
        {{ $message }}
    </span>
@enderror
                </div>

                
                <div class="col-md-6 mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{old('phone',$profile->user->phone ?? '')}}">
                </div>

                  <div class="col-md-6 mb-3">
                    <label>Height</label>
                    <input type="text" name="height" class="form-control" value="{{old('height',$profile->height ?? '')}}">
                </div>
                
                <div class="col-md-12 mb-3">
                    <div class="row">

    <!-- DAY -->

    <div class="col-md-4">
        <label>Date</label>
        <select name="day" class="form-control"  >
            <option value="" >Select Date</option>  
            @for($i=1; $i<=31; $i++)
                <option value="{{ $i }}"
                    {{ (isset($profile) && date('d', strtotime($profile->dob)) == $i) ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>

    <!-- MONTH -->
     @php
$months = [
    1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',
    5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',
    9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec'
];
@endphp
    <div class="col-md-4">
        <label>Month</label>
        <select name="month" class="form-control"  >
            <option value="" >Choose Month</option>  
          @foreach($months as $key => $month)

    <option value="{{ $key }}"
        {{ old('month', isset($profile->dob) ? date('m', strtotime($profile->dob)) : '') == $key ? 'selected' : '' }}>
        
        {{ $month }}
    </option>

@endforeach
        </select>
    </div>

    <!-- YEAR -->
    <div class="col-md-4">
        <label>Year</label>
        <select name="year" class="form-control"  >
            <option value="" >Choose Year</option>  
            @for($i=date('Y'); $i>=1980; $i--)
                <option value="{{ $i }}"
                    {{ (isset($profile) && date('Y', strtotime($profile->dob)) == $i) ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
    </div>

</div>
                </div>
                
              
                
                <div class="col-md-6 mb-3">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" value="{{old('age',$profile->age ?? '')}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Religion</label>
                    <input type="text" name="religion" class="form-control" value="{{old('religion',$profile->religion ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Caste</label>
                    <input type="text" name="caste" class="form-control" value="{{old('caste',$profile->caste ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Education</label>
                    <input type="text" name="education" class="form-control" value="{{old('education',$profile->education ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Profession</label>
                    <input type="text" name="profession" class="form-control" value="{{old('profession',$profile->profession ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Annual Income</label>
                    <input type="text" name="income" class="form-control" value="{{old('income',$profile->income ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" value="{{old('state',$profile->state ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="{{old('city',$profile->city ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="{{old('address',$profile->address ?? '')}}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Interested To</label>
                    <input type="text" name="interested" class="form-control" value="{{old('intersted',$profile->interested_to ?? '')}}">
                </div>

                    @php
                    $selectedProfileFor = old('marital_status', $profile->marital_status ?? '');
                    @endphp
                 <div class="col-md-6 mb-3">
                    <label class="form-label">Marital Status</label>
                    <select name="marital_status" class="form-control"  >
                    <option value="" >Choose Status</option> 
                       <option value="unmarried" {{ $selectedProfileFor == 'unmarried' ? 'selected' : '' }}>Unmarried</option>
                        <option value="married"{{ $selectedProfileFor == 'married' ? 'selected' : '' }}>Married</option>
                        <option value="divorced"{{ $selectedProfileFor == 'divorced' ? 'selected' : '' }}>Divorced</option>
                        <option value="widowed"{{ $selectedProfileFor == 'widowed' ? 'selected' : '' }}>Widowed</option>
                        
                    </select>
                </div>

                 <div class="col-md-6 mb-3">
                    <label>Father Name</label>
                    <input type="text" name="fathername" class="form-control" value="{{old('fathername',$profile->father ?? '')}}">
                </div>
                

                <div class="col-md-6 mb-3">
                    <label>About</label>
                    <textarea name="about"  rows="4" class="form-control">{{old('about',$profile->about ?? '')}}</textarea>
                </div>


                <div class="col-md-6 mb-3">
                 <div class="image-upload-section">

                     @for($i = 1; $i <= 4; $i++)
                        <div class="upload-box">
                            

                         <input type="file" name="image{{ $i }}" accept="image/*" onchange="previewImage(event, {{ $i }})">
            
                             <img id="preview{{ $i }}" src="{{ isset($profile) && $profile->{'image'.$i} ? asset('uploads/images/'.$profile->{'image'.$i}) : '' }}">
            
                                <span>+</span>
                            </div>
                            @endfor
                            <label class="form-label">Upload Image</label>
                         </div>
   

</div>


            </div>
                <div class="text-center">
                    <button class="btn btn-danger w-50">Add User</button>
                </div>

        </form>

    </div>
</div>
<script>

function previewImage(event, index){
    let reader = new FileReader();

    reader.onload = function(){
        document.getElementById('preview'+index).src = reader.result;
    }

    reader.readAsDataURL(event.target.files[0]);
}

</script>