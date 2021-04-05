 <div id="sidebar" class="active">
     <div class="sidebar-wrapper active">
         <div class="sidebar-header">
             <div class="d-flex justify-content-between">
                 <div class="logo">
                     {{-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a> --}}
                     <p>{{ auth()->user()->name }}</p>
                 </div>
                 <div class="toggler">
                     <a href="{{ url('dashboard') }}" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                 </div>
             </div>
         </div>
         <div class="sidebar-menu">
             <ul class="menu">
                 <li class="sidebar-title">Menu</li>

                 <li class="sidebar-item {{ request()->is('dashboard')?"active":""}} ">
                     <a href="{{ url('dashboard') }}" class='sidebar-link'>
                         <i class="bi bi-grid-fill"></i>
                         <span>Dashboard</span>
                     </a>
                 </li>


                 <li class="sidebar-title">Forms &amp; Tables</li>


                 <li class="sidebar-item  {{ request()->is('create-data')?"active":""}}">
                     <a href="{{ url('create-data') }}" class="sidebar-link ">
                         <i class="bi bi-file-earmark-medical-fill"></i>
                         <span>Add Data</span>
                     </a>
                 </li>



                 <li class="sidebar-item  {{ request()->is('list-data')?"active":""}}">
                     <a href="{{ url('list-data') }}" class='sidebar-link '>
                         <i class="bi bi-grid-1x2-fill"></i>
                         <span>List Data</span>
                     </a>
                 </li>

                <li class="sidebar-item  {{ request()->is('create-user')?"active":""}}">
                     <a href="{{ url('create-user') }}" class="sidebar-link ">
                         <i class="bi bi-file-earmark-medical-fill"></i>
                         <span>Add User</span>
                     </a>
                 </li>



                 <li class="sidebar-item  {{ request()->is('list-user')?"active":""}}">
                     <a href="{{ url('list-user') }}" class='sidebar-link '>
                         <i class="bi bi-grid-1x2-fill"></i>
                         <span>List User</span>
                     </a>
                 </li>


                 <li class="sidebar-item  ">
                     <a href="{{ url('logout-user') }}" class='sidebar-link'>
                         <i class="bi bi-box-arrow-right"></i>
                         <span>Log Out</span>
                     </a>
                 </li>


             </ul>
         </div>
         <button class="sidebar-toggler btn x"><i data-feather="x"> </i></button>
     </div>
 </div>
