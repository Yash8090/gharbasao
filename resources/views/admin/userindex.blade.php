@extends('layout.admin')

@section('content')
<style>
.table-hover tbody tr:hover {

    background: #f9fafb;
    cursor: pointer;

}

.card-box {

    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

}

</style>
<div class="page-title">
    <h3>Users Management</h3>
</div>

<div class="card-box">

    <table class="table table-hover">

        <thead>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Profile For</th>
                <th>Created</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody>

            @foreach($users as $user)

            <tr>

                <td>{{ $user->id }}</td>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>{{ $user->phone }}</td>

                <td>{{ ucfirst($user->profile_for) }}</td>

                <td>{{ $user->created_at->format('d M Y') }}</td>
                <td>

                    @if($user->status == 1)

                    <span class="badge bg-success">Active</span>

                    @else

                    <span class="badge bg-danger">Blocked</span>

                    @endif

                </td>

                <td>

                    <a href="{{route('editUser',$user->profile->id)}}" class="btn btn-sm btn-info">View</a>

                    <a href="{{route('adminUserStatus',$user->id)}}" class="btn btn-sm btn-warning">
                        @if($user->status == 1)

                        Block

                        @else

                        Unblock

                        @endif

                    </a>

                    <a href="#" class="btn btn-sm btn-danger">Delete</a>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>
  
</div>
  <div class="mt-3 w-50">

        {{ $users->links() }}

    </div>


@endsection