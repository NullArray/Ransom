<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div> Modular Admin </div>
        </div>
        <nav class="menu">
            <ul class="nav metismenu" id="sidebar-menu">
                <li class="active">
                    <a href="index.html"> <i class="fa fa-home"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ action('AdminController@getKeys') }}"> <i class="fa fa-key"></i> {{ __("RSA Keys") }} </a>
                </li>
                <li>
                    <a href=""> 
                        <i class="fa fa-th-large"></i> Items Manager <i class="fa arrow"></i> 
                    </a>
                    <ul class="collapse">
                        <li> 
                            <a href="items-list.html">
                                Items List
                            </a> 
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>