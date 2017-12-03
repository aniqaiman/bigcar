<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          {{ HTML::image('img/a.jpg', 'User Image',  array('class' => 'img-circle')) }}
        </div>
        <div class="pull-left info">
          <p>Aniq Aiman</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in s
      idebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="{{route('campaign')}}">
            <i class="fa fa-files-o"></i><span class="text-info">Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('campaigninfo',['id'=>$campaigns->campaign_id])}}">
            <i class="fa fa-info"></i><span class="text-info">Campaign Info</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('campaigncomment',['campaign_id'=>$campaigns->campaign_id])}}">
            <i class="fa fa-comments-o"></i> <span class="text-info">Campaign Comment</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('campaignnew', ['campaign_id'=>$campaigns->campaign_id])}}">
            <i class="fa fa-newspaper-o"></i> <span class="text-info">Campaign News</span>
          </a>
        </li>

        <li class="treeview">
          <a href="{{route('campaigndonation', ['campaign_id'=>$campaigns->campaign_id])}}">
            <i class=" fa fa-credit-card"></i> <span class="text-info">Campaign Donation</span>
          </a>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>