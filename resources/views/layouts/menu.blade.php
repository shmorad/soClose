<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li> 
                 <li class="nav-item mt-3">ADMIN</li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-item active">
                        <a class="nav-link nav-font" href="{{url('/')}}"><span> <i class="fas fa-home"></i> </span> Home </a>
                    </li>
                    <li class="nav-devider mt-0" style="margin-bottom: 5px"></li>
                    <li> <a href="{{url('/dashboard')}}" ><span> <i class="fas fa-home"></i> </span><span class="hide-menu">Dashboard</span></a></li>
                    <li> <a href="{{route('category.index')}}" ><span> <i class="fas fa-blog"></i> </span><span class="hide-menu">Category</span></a></li>
                    <li> <a href="{{route('categoryImage.index')}}" ><span> <i class="fas fa-image"></i> </span><span class="hide-menu">Category Image</span></a></li>
                </ul>
            </nav>
        </div>
    </aside>
<div class="page-wrapper">