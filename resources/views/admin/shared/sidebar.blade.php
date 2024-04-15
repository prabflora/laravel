            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                          

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                         
                            </li>

                           

                            <li class="menu-title" key="t-apps">Catalogue</li>

                

                            <li>
                            <a href="{{  url('admin/category') }}" class="waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-chat">Category</span>
                                </a>
                                 
                            </li>

                            <li>
                                <a href="{{  url('admin/product') }}" class="waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-chat">Products</span>
                                </a>
                            </li>


                            <li class="menu-title" key="t-apps">Sections</li>
 
<li>
<a href="chat.html" class="waves-effect">
        <i class="bx bx-receipt"></i>
        <span key="t-chat">Pages</span>
    </a>
     
</li>

<li>
    <a href="chat.html" class="waves-effect">
        <i class="bx bx-briefcase-alt-2"></i>
        <span key="t-chat">Slider</span>
    </a>
</li>

 
<li class="menu-title" key="t-apps">Settings</li>                             
<li>
<form method="POST" action="{{ route('logout') }}">
                            @csrf
<a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="waves-effect">
        <i class="bx bx-power-off "></i>
       

        <span key="t-chat">Logout</span>

    </a>
    </form> 
</li>
                         
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
