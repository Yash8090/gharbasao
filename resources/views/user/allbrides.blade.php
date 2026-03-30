@extends('layout.user')
@section('title','Home')
@section('content')
<style>
.form-select {
    font-size: 14px;
}
</style>


<section>
    <div class="container">
        <h2 class="text-center mb-4"> Brides Section</h2>
        <p class="text-center mb-5">
            Our featured Bride section where you can check our elite profiles.
        </p>

        <form method="GET" action="">

            <div class="row align-items-end g-2 mb-4">

                <!-- CITY -->
                <div class="col-md-2">
                    <label class="form-label">City</label>
                    <select name="city[]" class="form-select">
                        <option value="">Select City</option>
                        @foreach($cities as $city)

                        <option value="{{$city}}" {{in_array($city,request('city',[]))? 'selected': ''}}>{{$city}}
                        </option>
                        @endforeach

                    </select>
                </div>

                <!-- STATE -->
                <div class="col-md-2">
                    <label class="form-label">Caste</label>
                    <select name="caste[]" class="form-select">
                        <option value="">Select Caste</option>
                        @foreach($castes as $caste)
                         <option value="{{$caste}}" {{in_array($caste,request('caste',[]))? 'selected': ''}}>{{$caste}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- EDUCATION -->
                <div class="col-md-2">
                    <label class="form-label">Marital Status</label>
                    <select name="marital[]" class="form-select">
                        <option value="">Select Marital Status</option>
                        
                         <option value="" ></option>
                        
                    </select>
                </div>

                <!-- AGE -->
                <div class="col-md-2">
                    <label class="form-label">Age</label>
                    <select name="age[]" class="form-select">
                        <option value="">Choose Age</option>
                        @foreach($ages as $age)
                         <option value="{{$age}}" {{in_array($age,request('age',[]))? 'selected': ''}}>{{$age}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- BUTTONS -->
                <div class="col-md-2 d-flex gap-2">
                    <button class="btn btn-danger w-100">Apply </button>
                    <a href="{{route('groomIndex')}}" class="btn btn-success w-100">
                        Clear
                    </a>

                </div>

            </div>

        </form>

        <div class="row">
            @foreach($bride as $profile)
            <div class="col custom-col">

                <x-profile-card
                    image="{{ $profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png') }}"
                    name="{{$profile->user->name}}" age="{{$profile->age}}" city="{{$profile->city}}"
                    state="{{$profile->state}}" education="{{$profile->education}}" about="{{$profile->about}}" />

            </div>
            @endforeach
        </div>
    </div>
</section>



<div class="mt-4">

</div>
@endsection