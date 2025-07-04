        <div class="page-header">
             <div class="header-wrapper row m-0">
                  <form class="form-inline search-full col" action="#" method="get">
                       <div class="form-group w-100">
                            <div class="Typeahead Typeahead--twitterUsers">
                                 <div class="u-posRelative">
                                      <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus>
                                      <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div><i class="close-search" data-feather="x"></i>
                                 </div>
                                 <div class="Typeahead-menu"> </div>
                            </div>
                       </div>
                  </form>
                  <div class="header-logo-wrapper col-auto p-0">
                       <div class="logo-wrapper">
                            <a href="index.html">
                                 <img class="img-fluid for-light" style="width: 50px;" src="{{ asset('backend/images/logo/logo_dark.png') }}" alt="logo-light">
                                 <img class="img-fluid for-dark" style="width: 50px;" src="{{ asset('backend/images/logo/logo.png') }}" alt="logo-dark">
                            </a>
                       </div>
                       <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
                  </div>
                  <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                       <ul class="nav-menus">

                            <li>
                                 <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                            </li>
                            <li class="profile-nav onhover-dropdown">
                                 <div class="media profile-media"><img class="b-r-10" src="{{ asset('backend/images/dashboard/profile.png') }}" alt="">
                                      <div class="media-body d-xxl-block d-none box-col-none">
                                           <div class="d-flex align-items-center gap-2"> <span>Alex Mora </span><i class="middle fa fa-angle-down"> </i></div>
                                           <p class="mb-0 font-roboto">Admin</p>
                                      </div>
                                 </div>
                                 <ul class="profile-dropdown onhover-show-div">
                                      <!-- <li><a href="user-profile.html"><i data-feather="user"></i><span>My Profile</span></a></li> -->
                                      <li>
                                           <form action="{{ route('admin.do.logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-pill btn-outline-primary btn-sm">Log Out</button>
                                           </form>
                                      </li>
                                 </ul>
                            </li>
                       </ul>
                  </div>
                  <script class="result-template" type="text/x-handlebars-template">
                       <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details"> 
            <div class="ProfileCard-realName"></div>
            </div> 
            </div>
          </script>
                  <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
             </div>
        </div>