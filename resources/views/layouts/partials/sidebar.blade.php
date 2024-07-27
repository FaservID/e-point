   <!-- ========== Left Sidebar Start ========== -->
   <div class="leftside-menu">

       <!-- Brand Logo Light -->
       <a href="index.html" class="logo logo-light">
           <span class="logo-lg">
               <img src="{{ asset('assets') }}/images/logo.png" alt="logo">
           </span>
           <span class="logo-sm">
               <img src="{{ asset('assets') }}/images/logo-sm.png" alt="small logo">
           </span>
       </a>

       <!-- Brand Logo Dark -->
       <a href="index.html" class="logo logo-dark">
           <span class="logo-lg">
               <img src="{{ asset('assets') }}/images/logo-dark.png" alt="dark logo">
           </span>
           <span class="logo-sm">
               <img src="{{ asset('assets') }}/images/logo-dark-sm.png" alt="small logo">
           </span>
       </a>

       <!-- Sidebar Hover Menu Toggle Button -->
       <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
           <i class="ri-checkbox-blank-circle-line align-middle"></i>
       </div>

       <!-- Full Sidebar Menu Close Button -->
       <div class="button-close-fullsidebar">
           <i class="ri-close-fill align-middle"></i>
       </div>

       <!-- Sidebar -left -->
       <div class="h-100" id="leftside-menu-container" data-simplebar>
           <!-- Leftbar User -->
           {{-- <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{asset('assets')}}/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div> --}}

           @if (auth()->user()->type == 'admin')
               <!--- Sidemenu -->
               <ul class="side-nav">

                   <li class="side-nav-title">Navigation</li>

                   <li class="side-nav-item">
                       <a href="{{ route('home') }}" class="side-nav-link">
                           <i class="uil-home-alt"></i>
                           <span> Dashboards </span>
                       </a>
                   </li>

                   <li class="side-nav-title">Menus</li>

                   <li class="side-nav-item">
                       <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                           aria-controls="sidebarEcommerce" class="side-nav-link">
                           <i class="uil-store"></i>
                           <span> Master Data </span>
                           <span class="menu-arrow"></span>
                       </a>
                       <div class="collapse" id="sidebarEcommerce">
                           <ul class="side-nav-second-level">
                               <li>
                                   <a href="{{ route('data-guru.index') }}">Data Guru</a>
                               </li>
                               <li>
                                   <a href="{{ route('data-kelas.index') }}">Data Kelas</a>
                               </li>
                               <li>
                                   <a href="{{ route('data-siswa.index') }}">Data Siswa</a>
                               </li>
                           </ul>
                       </div>
                   </li>

                   <li class="side-nav-item">
                       <a data-bs-toggle="collapse" href="#dataKategori" aria-expanded="false"
                           aria-controls="dataKategori" class="side-nav-link">
                           <i class="uil-store"></i>
                           <span> Data Kategori </span>
                           <span class="menu-arrow"></span>
                       </a>
                       <div class="collapse" id="dataKategori">
                           <ul class="side-nav-second-level">
                               <li>
                                   <a href="{{ route('kategori-pelanggaran.index') }}">Kategori Pelanggaran</a>
                               </li>
                               <li>
                                   <a href="{{ route('jenis-sanksi.index') }}">Jenis Sanksi</a>
                               </li>
                               <li>
                                   <a href="{{ route('list-pelanggaran.index') }}">List Pelanggaran</a>
                               </li>
                           </ul>
                       </div>
                   </li>

                   <li class="side-nav-item">
                       <a href="#" class="side-nav-link">
                           <i class="uil-rss"></i>
                           <span> Laporan </span>
                       </a>
                   </li>
                   <li class="side-nav-item">
                       <a href="#" class="side-nav-link">
                           <i class="mdi mdi-progress-clock"></i>
                           <span> Manajemen Akun </span>
                       </a>
                   </li>
                   {{-- <li class="side-nav-item">
                <a href="{{ route('results.index') }}" class="side-nav-link">
                    <i class="mdi mdi-note-multiple-outline"></i>
                    <span> Hasil </span>
                </a>
            </li> --}}

               </ul>
               <!--- End Sidemenu -->
           @endif

           @if (auth()->user()->type == 'guru')
               <!--- Sidemenu -->
               <ul class="side-nav">

                   <li class="side-nav-title">Navigation</li>

                   <li class="side-nav-item">
                       <a href="{{ route('home') }}" class="side-nav-link">
                           <i class="uil-home-alt"></i>
                           <span> Dashboards </span>
                       </a>
                   </li>

                   <li class="side-nav-title">Menus</li>

                   <li class="side-nav-item">
                       <a href="{{route('guru.data-siswa.index')}}" class="side-nav-link">
                           <i class="mdi mdi-progress-clock"></i>
                           <span> Data Siswa </span>
                       </a>
                   </li>

                   <li class="side-nav-item">
                       <a href="{{route('guru.kategori-pelanggaran.index')}}" class="side-nav-link">
                           <i class="uil-rss"></i>
                           <span> Kategori Pelanggaran </span>
                       </a>
                   </li>
                   <li class="side-nav-item">
                       <a href="{{route('guru.jenis-sanksi.index')}}" class="side-nav-link">
                           <i class="uil-rss"></i>
                           <span> Jenis Sanksi </span>
                       </a>
                   </li>
                   <li class="side-nav-item">
                       <a href="{{route('guru.list-pelanggaran.index')}}" class="side-nav-link">
                           <i class="uil-rss"></i>
                           <span> List Pelanggaran </span>
                       </a>
                   </li>

                   {{-- <li class="side-nav-item">
            <a href="{{ route('results.index') }}" class="side-nav-link">
                <i class="mdi mdi-note-multiple-outline"></i>
                <span> Hasil </span>
            </a>
        </li> --}}

               </ul>
               <!--- End Sidemenu -->
           @endif

           <div class="clearfix"></div>
       </div>
   </div>
   <!-- ========== Left Sidebar End ========== -->
