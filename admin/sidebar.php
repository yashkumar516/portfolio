<!-- Sidebar  -->
<style>
.account
{
  width: 150px;
  height: auto;
  background-color: transparent;
  font-size: 14px;
  float: right;
  margin-top: -40px;
  list-style-type: none;
  box-shadow: 0px 0px 2px 0.1px lightgray;
}
.account li
{
    width: 100%;
    height: auto;
    padding-top: 5px;
}
.account a
{
    list-style-type: none;
    width: 100%;
    color: navy;
  
}
</style>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h6>Ahmdabad Road Lines</h6>
                <str>ARL</str>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="AdminPanel.php">Dashboard</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-arrow-circle-right"></i>                     
                        Index Management
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="admin_header_manager.php">Header Management</a>
                        </li>
                        <li>
                            <a href="admin_banner_content_manage.php">Banner Management</a>
                        </li>
                      
                        <li>
                            <a href="quick_link_manage.php">Quick Link Management</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="menu_management.php">
                    <i class="fas fa-heading"></i>
                        menu Management
                    </a>
                </li>
                <li>
                    <a href="submenu_mgt.php">
                    <i class="fas fa-heading"></i>
                        submenu Management
                    </a>
                </li>
                <!-- <li>
                    <a href="quick_link_manage.php">
                    <i class="fas fa-heading"></i>
                        Quick link
                    </a>
                </li>s -->
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary" style="background-color: #d64161!important;">
                        <i class="fas fa-align-left"></i>                        
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active ac_menu">
                                <a class="nav-link" href="#">Account</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="account">
                <ul>
                    <a href="logout.php"><li><i class="fas fa-arrow-circle-right"></i>Logout</li></a>
                </ul>
            </div>
<script>
    $(document).ready(function(){
        $('.account').hide();
    });
    $('.ac_menu').click(function(){
        $('.account').toggle();
    });
</script>