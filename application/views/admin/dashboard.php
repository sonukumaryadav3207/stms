<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Welcome / Profile Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <h2>Welcome, Admin</h2>
                <p class="text-muted">Here is a quick overview of today's stats.</p>
            </div>
            <div class="col-md-4 text-end">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Admin Profile</h5>
                        <p class="mb-1"><strong>Name:</strong> Admin</p>
                        <p class="mb-1"><strong>Role:</strong> Administrator</p>
                        <p class="mb-0"><strong>Email:</strong> admin@example.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        Total Students
                        <h4 class="mt-2">1200</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        Present Today
                        <h4 class="mt-2">1100</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                        Absent Today
                        <h4 class="mt-2">100</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark shadow">
                    <div class="card-body">
                        Total Fee Collected
                        <h4 class="mt-2">₹5,20,000</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notice Board -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Notice Board</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Annual function will be held on 15th May.</li>
                            <li>New admissions are open till 30th May.</li>
                            <li>Teachers' meeting scheduled for Friday.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h5>Monthly Fee Collection</h5>
            </div>
            <div class="card-body">
                <canvas id="feeChart" height="100"></canvas>
            </div>
        </div>

    </div>
</div>
<script>
    const ctx = document.getElementById('feeChart').getContext('2d');
    const feeChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Fees Collected (₹)',
                data: [120000, 150000, 110000, 180000, 200000],
                backgroundColor: 'rgba(54, 162, 235, 0.7)'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>