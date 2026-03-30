@extends('layout.user')
@section('title','Home')

@section('content')

<section class="profile-section">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('layout.userSidebar')
            </div>
<div class="col-md-9">
@include('layout.editform');
          </div>
            </div>
        </div>

</section>

            
@endsection