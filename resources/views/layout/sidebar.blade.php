<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Blog Posts</span>
            <span class="pull-right-container">
             
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('newposts') }}"><i class="fa fa-circle-o"></i>New Post</a></li>
            <li><a href="{{ route('allpost') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
            </ul>
        </li>
        
       
    
      
        <li class="treeview">
            <li><a onclick="bringOutModalMain('.logout')"><i class="fa fa-circle-o"></i> Logout</a></li>
        </li>
      
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>