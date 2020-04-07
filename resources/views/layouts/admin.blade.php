<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $title }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Summernote Style -->
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('images/admin/logo.png') }}" alt="Andrew Auxilio Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('images/avatars/avatar_cartoon.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Blog Controls
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="fas fa-clipboard-list nav-icon"></i>
                                        <p>Blog Posts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-plus-circle nav-icon"></i>
                                        <p>New Blog Post</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('admin-content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/summernote.min.js') }}" defer></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
    <div class="note-popover popover in note-link-popover bottom">  <div class="arrow"></div>  <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span><div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Edit" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Unlink" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div></div></div>
    <div class="note-popover popover in note-image-popover bottom">  <div class="arrow"></div>  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize full" data-original-title="Resize full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize half" data-original-title="Resize half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Resize quarter" data-original-title="Resize quarter"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Original size" data-original-title="Original size"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Float Left" data-original-title="Float Left"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Float Right" data-original-title="Float Right"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove float" data-original-title="Remove float"><i class="note-icon-rollback"></i></button></div><div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-light btn-sm" role="button" tabindex="-1" title="" aria-label="Remove Image" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div></div></div>
    <div class="note-popover popover in note-table-popover bottom">  <div class="arrow"></div>  <div class="popover-content note-children-container"><div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add row below" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add row above" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add column left" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Add column right" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div><div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete row" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete column" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" role="button" tabindex="-1" title="" aria-label="Delete table" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div></div></div>
</body>

</html>