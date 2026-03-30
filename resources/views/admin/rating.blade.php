@extends('layout.admin')
@section('content')

<h2>Review & Rating Section </h2>

<div class="row mt-4">
    <div class="col-md-6 offset-md-3">
        <div class="card p-4">
            <form method="POST" action="{{route('reviewSubmit')}}">
                @csrf

                <label for="" class="form-label">Full Name</label>
                <input type="text" name="name" placeholder="Your Name" class="form-control mb-2">

                <label for="" class="form-label">Select Rating</label>
                <select name="rating" class="form-control mb-2">
                    <option value="5">5 Star</option>
                    <option value="4">4 Star</option>
                    <option value="3">3 Star</option>
                </select>

                <label for="" class="form-label" >Title</label>
                <input type="text" name="title" class="form-control mb-3" placeholder="e.g. Trusted by Thousands">

                <label for="" class="form-label">Message </label>
                <textarea name="comment" class="form-control mb-2"></textarea>

                <button class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>





@endsection