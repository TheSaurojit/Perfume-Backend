<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>

    <meta charset="utf-8" />

    <title>@yield('title', env("APP_NAME"))</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">



    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- App js -->
    <script src="/assets/js/plugin.js"></script>


    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />


    @yield('head-section')

    <style>
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .custom-toast {
            padding: 12px;
            margin-bottom: 10px;
            min-width: 250px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            opacity: 0;
            transform: translateX(100%);
            animation: fadeIn 0.3s ease forwards;
        }

        .custom-toast.success {
            background-color: #4CAF50;
        }

        .custom-toast.error {
            background-color: #f44336;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateX(100%);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(100%);
            }
        }
    </style>


</head>

<body data-sidebar="dark">

    <div class="toast-container" id="toastContainer"></div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        {{-- <a href="/" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo.svg" alt="" height="17">
                            </span>
                        </a>

                        <a href="/" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/assets/images/logo.svg" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="/assets/images/logo.svg" alt="" height="19">
                            </span>
                        </a> --}}
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->


                </div>

                <div class="d-flex">



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="https://www.shutterstock.com/image-vector/user-account-avatar-icon-pictogram-600nw-1860375778.jpg"
                                alt="Header Avatar">

                            {{-- <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->email }}</span> --}}
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->

                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item text-danger">
                            @csrf
                            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                            <button class="btn-danger" type="submit" key="t-logout">Logout</button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">

                    <li>
                            <a href="/">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Home </span>
                            </a>
                        </li>

                        {{-- <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-authentication">Categories</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('category.all') }}" key="t-register">All Categories</a></li>

                                <li><a href="{{ route('category.create') }}" key="t-register">Create Category</a></li>
                            </ul>
                        </li> --}}

                     
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-authentication">Products</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('products.all') }}" key="t-register">All Products</a></li>

                                <li><a href="{{ route('products.create') }}" key="t-register">Create Product</a></li>


                            </ul>
                        </li>

                         <li>
                            <a href="{{ route('contact.all') }}">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Leads</span>
                            </a>
                        </li>



                        <li>
                            <a href="{{ route('orders.all') }}">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Orders </span>
                            </a>
                        </li>
                       
                         <li>
                            <a href="{{ route('settings') }}">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Settings </span>
                            </a>
                        </li>
                    

                        <li>
                            <a href="{{ route('change-password') }}">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Change Password </span>
                            </a>
                        </li>



                        {{-- <li>
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-dashboards">Dashboard </span>
                            </a>
                            </li>

                            --}}

                      



                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @yield('body-section')

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirm Deletion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this item?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger"
                                        onclick="confirmDelete()">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->


    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>

    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/jszip/jszip.min.js"></script>
    <script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>


    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


    <!-- Datatable init js -->
    <script src="/assets/js/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

    @yield('script-section')

    <script>
        window.onload = function() {
            @if (session('success'))

                showToast('success', "{{ session('success') }}");
            @endif

            @if (session('error'))

                showToast('error', "{{ session('error') }}");
            @endif


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    showToast('error', "{{ $error }}");
                @endforeach
            @endif

        };

        function showToast(type, message) {

            const toastContainer = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.classList.add('custom-toast', type);
            toast.innerText = message;
            toast.style.marginBottom = "10px";
            toast.style.fontSize = "12px";

            toastContainer.appendChild(toast);

            setTimeout(() => {
                toast.style.animation = "fadeOut 0.3s ease forwards";
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }
    </script>

    {{-- script for delete modal --}}
    <script>
        let deleteUrl = null;


        function showDeleteModal(url) {
            deleteUrl = url;
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }


        function confirmDelete() {
            console.log("Deleting item with ID:", deleteUrl);

            window.location.href = deleteUrl;

            const modalEl = document.getElementById('deleteModal');
            const modal = bootstrap.Modal.getInstance(modalEl);
            modal.hide();
        }
    </script>


</body>



</html>
