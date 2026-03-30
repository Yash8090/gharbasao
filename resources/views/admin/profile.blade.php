@extends('layout.admin')

@section('content')
<style>
    .admin-card {
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.admin-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.img-box img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 15px;
}

.card-body h5 {
    font-weight: 600;
    margin-bottom: 5px;
}
.no-data-card {
    background: #f8f9fa;
    border-radius: 12px;
    border: 2px dashed #ddd;
}
</style>
<div class="container py-4">
    <h3>Pending Profiles</h3>

                 <div class="d-flex flex-nowrap gap-3 overflow-auto">
                        @forelse($profiles as $profile)

                        <div style="width:25%;">
                            <x-profile-card
                                image="{{ $profile->profile_image ? asset('uploads/images/'.$profile->profile_image) : asset('images/default-ma.png') }}"
                                name="{{$profile->user->name}}" age="{{$profile->age}}" city="{{$profile->city}}"
                                state="{{$profile->state}}" education="{{$profile->education}}"
                                about="{{$profile->about}}" />
                                
                                <div class="mt-2 d-flex gap-2">
                                    <a href="{{ route('approveUser', $profile->id) }}" 
                   class="btn btn-success btn-sm w-50">
                    ✔ Approve
                </a>

                <a href="{{ route('rejectUser', $profile->id) }}" 
                   class="btn btn-danger btn-sm w-50">
                    ✖ Reject
                </a>
                                </div>
                        </div>

                        @empty
                        <div class="col-12">
        <div class="no-data-card text-center p-5">

            <h4>No Requests Found 😔</h4>
            <p class="text-muted">Abhi koi new profile approval ke liye nahi hai</p>

        </div>
    </div>

@endforelse
    
                    </div>
            </div>
@endsection