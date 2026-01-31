<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Business Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo2.jpg') }}" type="image/png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
</head>
<body>
    <!-- Main Container -->
    <div class="container-fluid g-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-lg-2 col-md-3 col-12 sidebar">
                <div class="sidebar-header p-4">
                    <h2 class="logo-text">
                        <i class="bi bi-speedometer2"></i>
                        <span class="ms-2">AdminPanel</span>
                    </h2>
                </div>
                
                <div class="sidebar-menu px-3">
                    <ul class="list-unstyled">
                        <li class="menu-item active">
                            <a href="{{route('admin.dashboard')}}">
                                <i class="bi bi-grid-fill"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.enquires')}}">
                                <i class="bi bi-people-fill"></i>
                                <span class="menu-text">Enquires</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.contacts')}}">
                                <i class="bi bi-cart-fill"></i>
                                <span class="menu-text">Contacts</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('admin.newsletters')}}">
                                <i class="bi bi-briefcase-fill"></i>
                                <span class="menu-text">News Letter</span>
                            </a>
                        </li>
                        <!-- <li class="menu-item">
                            <a href="#messages">
                                <i class="bi bi-chat-left-text-fill"></i>
                                <span class="menu-text">Messages</span>
                                <span class="badge bg-warning float-end">5</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#settings">
                                <i class="bi bi-gear-fill"></i>
                                <span class="menu-text">Settings</span>
                            </a>
                        </li> -->
                        <li class="menu-item">

                            <a href="{{route('admin.logout')}}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- <div class="sidebar-footer p-4 mt-5">
                    <div class="card bg-dark-card">
                        <div class="card-body text-center">
                            <h6 class="card-title">Need Help?</h6>
                            <p class="card-text small">Contact support 24/7</p>
                            <button class="btn btn-sm btn-primary">Get Help</button>
                        </div>
                    </div>
                </div> -->
            </nav>
            
            <!-- Main Content -->
            <main class="col-lg-10 col-md-9 col-12 ms-auto main-content">
                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
                    <div class="container-fluid">
                        <!-- Sidebar Toggle Button for Mobile -->
                        <button class="btn sidebar-toggle" id="sidebarToggle">
                            <i class="bi bi-list"></i>
                        </button>
                        
                        <!-- Navbar Content -->
                        <div class="d-flex align-items-center ms-auto">
                            <!-- Notifications -->
                            <div class="dropdown me-4">
                                <button class="btn position-relative" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-bell fs-5"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        3
                                    </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                                    <li><h6 class="dropdown-header">Notifications</h6></li>
                                    <li><a class="dropdown-item" href="#">New order received</a></li>
                                    <li><a class="dropdown-item" href="#">System updated</a></li>
                                    <li><a class="dropdown-item" href="#">New user registered</a></li>
                                </ul>
                            </div>
                            
                            <!-- User Profile Dropdown -->
                            <div class="dropdown">
                                <button class="btn d-flex align-items-center" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar me-2">
                                        <img src="https://ui-avatars.com/api/?name=Admin+User&background=4e73df&color=ffffff" alt="Admin User" class="rounded-circle" width="40">
                                    </div>
                                    <div class="d-none d-md-block">
                                        <span class="fw-medium">Admin User</span>
                                        <i class="bi bi-chevron-down ms-1"></i>
                                    </div>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="#profile"><i class="bi bi-person me-2"></i>Profile</a></li>
                                    <li><a class="dropdown-item" href="#settings"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#logout"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                
                <!-- Page Content -->
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js for Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom JS -->
    <script src="{{asset('admin/script.js')}}"></script>
</body>
</html>