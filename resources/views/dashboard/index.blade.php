@extends('layout.layoutDashboard')
@section('content')
<!-- Dashboard Cards -->
<div class="cards">
    <div class="card">
        <div class="card-header">
            <h3>Total Sales</h3>
            <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="card-content">
            <h2>$1,200</h2>
            <p>Last 24 hours</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>New Users</h3>
            <i class="fas fa-user-plus"></i>
        </div>
        <div class="card-content">
            <h2>58</h2>
            <p>Last 24 hours</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Page Views</h3>
            <i class="fas fa-eye"></i>
        </div>
        <div class="card-content">
            <h2>3,200</h2>
            <p>Last 24 hours</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Support Requests</h3>
            <i class="fas fa-life-ring"></i>
        </div>
        <div class="card-content">
            <h2>12</h2>
            <p>Open tickets</p>
        </div>
    </div>
</div>

@endsection