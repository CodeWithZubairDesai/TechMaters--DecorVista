          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="{{route('admin.dashboard')}}" class="logo-dark">
                         <img src="{{ asset('admin_assets/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                         <img src="{{ asset('admin_assets/assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="{{route('admin.dashboard')}}" class="logo-light">
                         <img src="{{ asset('admin_assets/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                         <img src="{{ asset('admin_assets/assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                    <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
               </button>

               <div class="scrollbar" data-simplebar>
                    <ul class="navbar-nav" id="navbar-nav">

                         <li class="menu-title">General</li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text">Gallery Categories </span>
                              </a>
                              <div class="collapse" id="sidebarCategory">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.gallery.categories.index')}}">List</a>
                                        </li>                         
                                        
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.gallery.categories.create')}}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarProductCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProductCategory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text">Product Category </span>
                              </a>
                              <div class="collapse" id="sidebarProductCategory">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.product.categories.index')}}">List</a>
                                        </li>                         
                                        
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.product.categories.create')}}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>


                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarProduct" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProduct">
                                   <span class="nav-icon">
                                   <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text">Product </span>
                              </a>
                              <div class="collapse" id="sidebarProduct">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.products.index')}}">List</a>
                                        </li>                         
                                        
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.products.create')}}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarBlog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBlog">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:pen-new-square-bold"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Blogs </span>
                              </a>
                              <div class="collapse" id="sidebarBlog">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.blogs.index')}}">List</a>
                                        </li>                         
                                        
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="{{route('admin.blogs.create')}}">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Sellers </span>
                              </a>
                              <div class="collapse" id="sidebarSellers">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-details.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-edit.html">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>


                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInventory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Inventory </span>
                              </a>
                              <div class="collapse" id="sidebarInventory">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="inventory-warehouse.html">Warehouse</a>
                                        </li>
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="inventory-received-orders.html">Received Orders</a>
                                             </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Orders </span>
                              </a>
                              <div class="collapse" id="sidebarOrders">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="orders-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-detail.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-cart.html">Cart</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-checkout.html">Check Out</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>



                         
                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:tuning-2-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Contact </span>
                              </a>
                              <div class="collapse" id="sidebarTables">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="tables-gridjs.html">Table</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>



                         <li class="nav-item">
                              <a class="nav-link" href="pages-review.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Reviews </span>
                              </a>
                         </li>
               
                         <li class="nav-item">
                                   @if(Auth::check())  
                                       <a class="nav-link" href="#" onclick="UserLogout('{{ route('auth.logout') }}')" aria-label="logout">
                                           <span class="nav-icon">
                                               <iconify-icon icon="solar:user-bold-duotone"></iconify-icon> <!-- Suitable user icon for logged-in state -->
                                           </span>
                                           <span class="nav-text">Logout</span>
                                       </a>     
                                   @else                                    
                                       <a class="nav-link" href="{{ route('loginForm') }}" aria-label="login">
                                           <span class="nav-icon">
                                               <iconify-icon icon="solar:user-bold-duotone"></iconify-icon> <!-- Same user icon for login state -->
                                           </span>
                                           <span class="nav-text">Login</span>
                                       </a>                                    
                                   @endif                                
                               </li>
                               
                    </ul>
               </div>
          </div>
          <!-- ========== App Menu End ========== -->

          <div class="page-content">