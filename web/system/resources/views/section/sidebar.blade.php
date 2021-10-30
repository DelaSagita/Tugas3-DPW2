<aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">DS.WOMEN'S SHOES</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="nav-item active" >
                    <a class="sidenav-item-link" href="{{url('beranda')}}">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Beranda</span> 
                    </a>
                 
                  </li>

                  <li  class="nav-item active" >
                    <a class="sidenav-item-link" href="{{url('produk')}}">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Produk</span> 
                    </a>
                 
                  </li>

                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="{{ url('kategori') }}">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Kategori</span> 
                    </a>
                 
                  </li>

                  <li  class="nav-item active" >
                    <a class="sidenav-item-link" href="{{url('user')}}">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">user profil</span> 
                    </a>
                 
                  </li>


                
              </ul>

            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>
