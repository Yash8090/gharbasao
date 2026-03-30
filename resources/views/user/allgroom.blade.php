@extends('layout.user')
@section('title','Home')
@section('content')
<style>
.custom-col {
    width: 20%;
    /* 100 / 5 = 20% */
}

@media(max-width:992px) {
    .custom-col {
        width: 33.33%;
    }
}

@media(max-width:768px) {
    .custom-col {
        width: 50%;
    }
}

@media(max-width:576px) {
    .custom-col {
        width: 100%;
    }
}

.no-found {
    opacity: 0.8;
}

.form-select {
    font-size: 14px;
}
</style>


<section>
    <div class="container">
        <h2 class="text-center mb-4"> Groom Section</h2>
        <p class="text-center mb-5">
            Our featured Groom section where you can check our elite profiles.
        </p>


        <form action="" method="GET">

            <!-- AGE -->
            <div class="row align-items-end g-2 mb-4">
                <div class="col-md-2">
                    <label class="form-label"> City </label>
                    <select name="city[]" class="form-select">
                        <option value="">Select City</option>
                        @foreach($cities as $city)
                        <option value="{{$city}}" {{in_array($city,request('city',[]))? 'selected': ''}}>{{$city}}
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-2">
                    <label class="form-label">Caste</label>
                    <select name="caste[]" class="form-select">
                        <option value="">Select Caste</option>
                        @foreach($castes as $caste)
                        <option value="{{$caste}}" {{ in_array($caste, request('caste', [])) ? 'selected' : '' }}>
                            {{$caste}}
                        </option>
                        @endforeach

                    </select>
                </div>

                <!-- EDUCATION -->
                <div class="col-md-2">
                    <label class="form-label">Martial Status</label>
                    <select name="marital[]" class="form-select">
                        <option value="">Marital Status</option>
                        @foreach($martials as $marital)
                        <option value="{{$marital}}"{{in_array($marital,request('marital',[])) ? 'selected' : ''}}>{{$marital}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- AGE -->
                <div class="col-md-2">
                    <label class="form-label">Age</label>
                    <select name="age[]" class="form-select">
                        <option value="">Select Age</option>
                        @foreach($ages as $age)
                        <option value="{{$age}}" {{ in_array($age, request('age', [])) ? 'selected' : '' }}>
                            {{$age}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- BUTTONS -->
                <div class="col-md-3 d-flex gap-2">
                    <button class="btn btn-danger w-100">Apply Filter</button>
                    <a href="{{route('groomIndex')}}" class="btn btn-outline-success w-100">
                        Clear Filter
                    </a>
                </div>
            </div>

        </form>

        <hr>

        <!-- Filter Section End -->

        <div class="row">
            @forelse($grooms as $profile)
            <div class="custom-col">

                <x-profile-card
                    image="{{ $profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png') }}"
                    name="{{$profile->user->name}}" age="{{$profile->age}}" city="{{$profile->city}}"
                    state="{{$profile->state}}" education="{{$profile->education}}" about="{{$profile->about}}" :profile="$profile"/>

            </div>
            @empty
            <div class="text-center mt-5">
                <div class="card p-4 shadow-sm">
                    <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" width="150"
                        class="mx-auto no-found">
                    <h5 class="mt-3">No Profiles Found</h5>
                    <p class="text-muted">Try changing your filters</p>
                </div>
            </div>

            @endforelse
        </div>
    </div>
</section>



<div class="mt-4">

</div>
<script>
function toggleDropdown(id) {
    // sab close karo
    document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');

    // selected open karo
    let el = document.getElementById(id);
    el.style.display = 'block';
}

// outside click par close
document.addEventListener('click', function(e) {
    if (!e.target.closest('.filter-item')) {
        document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
    }
});
</script>
@endsection