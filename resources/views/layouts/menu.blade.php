<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      @if(Auth::user()->is_admin)
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('admin.profile.index')}}"><i class="fa fa-link"></i> <span>My Users</span></a></li>
        <li><a href="{{route('admin.loan.index')}}"><i class="fa fa-link"></i> <span>Loan Request</span></a></li>
        <li class="active"><a href="{{route('admin.category.index')}}"><i class="fa fa-link"></i> <span>Loan Category</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      @else
        <li class="active"><a href="{{url('profile')}}"><i class="fa fa-link"></i> <span>My Profile</span></a></li>
        <li class="active"><a href="{{url('document')}}"><i class="fa fa-link"></i> <span>My Documents</span></a></li>
        <li class="active"><a href="{{route('loan.index')}}"><i class="fa fa-link"></i> <span>My Loans</span></a></li>
      @endif
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>