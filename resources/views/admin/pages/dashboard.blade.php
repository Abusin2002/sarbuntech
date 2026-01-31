@extends('admin.layouts.app')

@section('content')
<div class="container-fluid p-4" id="pageContent">
                    <!-- Page Title -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3 mb-0">Dashboard</h1>
                        <div class="d-flex">
                            <button class="btn btn-primary me-2">
                                <i class="bi bi-plus-circle me-1"></i> Add New
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-calendar me-1"></i> This Month
                            </button>
                        </div>
                    </div>
                    
                    <!-- Stats Cards -->
                    <div class="row mb-4">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle text-muted">Total Users</h6>
                                            <h2 class="card-title mb-0">1,254</h2>
                                        </div>
                                        <div class="stat-icon bg-primary">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-success"><i class="bi bi-arrow-up"></i> 12.5%</span>
                                        <span class="text-muted"> from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle text-muted">Total Orders</h6>
                                            <h2 class="card-title mb-0">568</h2>
                                        </div>
                                        <div class="stat-icon bg-success">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-success"><i class="bi bi-arrow-up"></i> 8.2%</span>
                                        <span class="text-muted"> from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle text-muted">Total Revenue</h6>
                                            <h2 class="card-title mb-0">$24,580</h2>
                                        </div>
                                        <div class="stat-icon bg-warning">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-success"><i class="bi bi-arrow-up"></i> 15.3%</span>
                                        <span class="text-muted"> from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card stat-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-subtitle text-muted">Active Services</h6>
                                            <h2 class="card-title mb-0">42</h2>
                                        </div>
                                        <div class="stat-icon bg-info">
                                            <i class="bi bi-briefcase"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span class="text-danger"><i class="bi bi-arrow-down"></i> 2.1%</span>
                                        <span class="text-muted"> from last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Charts Section -->
                    <div class="row mb-4">
                        <div class="col-lg-8 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Revenue Overview</h5>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="revenueChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Traffic Sources</h5>
                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="trafficChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Orders Table -->
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Recent Orders</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD-7841</td>
                                            <td>John Smith</td>
                                            <td>Apr 15, 2023</td>
                                            <td>$245.99</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-7840</td>
                                            <td>Emma Johnson</td>
                                            <td>Apr 14, 2023</td>
                                            <td>$128.50</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-7839</td>
                                            <td>Michael Brown</td>
                                            <td>Apr 13, 2023</td>
                                            <td>$367.20</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-7838</td>
                                            <td>Sarah Davis</td>
                                            <td>Apr 12, 2023</td>
                                            <td>$89.99</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-7837</td>
                                            <td>Robert Wilson</td>
                                            <td>Apr 11, 2023</td>
                                            <td>$156.75</td>
                                            <td><span class="badge bg-info">Shipped</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Footer -->
                    <footer class="mt-5 pt-3 border-top">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted">&copy; 2023 AdminPro. All rights reserved.</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <p class="text-muted">Dashboard v1.0.0</p>
                            </div>
                        </div>
                    </footer>
                </div>


@endsection