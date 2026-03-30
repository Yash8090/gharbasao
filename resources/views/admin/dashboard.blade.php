@extends('layout.admin')

@section('content')
<style>
.dashboard-header h2 {
    font-weight: 700;
}

.dashboard-header p {
    color: #6b7280;
    margin-bottom: 20px;
}

.stats {
    margin-top: 20px;
}

.stat-card {
    padding: 25px;
    border-radius: 12px;
    color: #fff;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    transition: .3s;
}

.stat-card:hover {
    transform: translateY(-6px);
}

.stat-card i {
    font-size: 24px;
    margin-bottom: 10px;
}

.red {
    background: linear-gradient(135deg, #ef4444, #dc2626);
}

.orange {
    background: linear-gradient(135deg, #f59e0b, #fbbf24);
}

.blue {
    background: linear-gradient(135deg, #6366f1, #4f46e5);
}

.green {
    background: linear-gradient(135deg, #10b981, #059669);
}

.card-box {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.profile-list {
    list-style: none;
    padding: 0;
}

.profile-list li {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.interest-list {
    list-style: none;
    padding: 0;
}

.interest-list li {
    margin-bottom: 8px;
}
</style>
<div class="dashboard-header">
    <h2>Admin Dashboard</h2>
    <p>Welcome back 👋 Here’s your platform overview</p>
</div>

<div class="row stats">

    <div class="col-md-3">
        <div class="stat-card red">
            <i class="bi bi-people"></i>
            <h3>125</h3>
            <p>Total Users</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card orange">
            <i class="bi bi-person"></i>
            <h3>98</h3>
            <p>Total Profiles</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card blue">
            <i class="bi bi-heart"></i>
            <h3>45</h3>
            <p>Total Interests</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card green">
            <i class="bi bi-person-plus"></i>
            <h3>12</h3>
            <p>New Registrations</p>
        </div>
    </div>

</div>


<div class="row mt-4">

    <div class="col-md-8">

        <div class="card-box">

            <h4>User Growth</h4>

            <canvas id="userChart"></canvas>

        </div>

    </div>


    <div class="col-md-4">

        <div class="card-box">

            <h4>Pending Profile Approval</h4>

            <ul class="profile-list">

                <li>
                    Rahul Sharma
                    <button class="btn btn-success btn-sm">Approve</button>
                </li>

                <li>
                    Priya Singh
                    <button class="btn btn-success btn-sm">Approve</button>
                </li>

                <li>
                    Amit Verma
                    <button class="btn btn-success btn-sm">Approve</button>
                </li>

            </ul>

        </div>

    </div>

</div>


<div class="row mt-4">

    <div class="col-md-6">

        <div class="card-box">

            <h4>Latest Interests</h4>

            <ul class="interest-list">

                <li>Rahul sent interest to Neha</li>
                <li>Amit sent interest to Riya</li>
                <li>Vikas sent interest to Pooja</li>

            </ul>

        </div>

    </div>


    <div class="col-md-6">

        <div class="card-box">

            <h4>Recent Users</h4>

            <table class="table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Rahul</td>
                        <td>rahul@gmail.com</td>
                    </tr>

                    <tr>
                        <td>Neha</td>
                        <td>neha@gmail.com</td>
                        <td>Delhi</td>
                    </tr>

                    <tr>
                        <td>Amit</td>
                        <td>amit@gmail.com</td>
                        <td>Lucknow</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('userChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],

        datasets: [{

            label: 'User Growth',

            data: [10, 25, 40, 60, 80, 100],

            borderColor: '#dc2626',

            backgroundColor: 'rgba(220,38,38,0.2)',

            tension: 0.4

        }]

    }

});
</script>
@endsection