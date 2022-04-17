<section id="header__nav">
    <div class="content" style="justify-content: center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark header__nav">
            <div class="container-fluid py-3" style="width: 1555px">
                <a class="navbar-brand me-5" href="{{ url('/') }}"
                    style="font-family: 'Ubuntu', sans-serif; font-size: 1.5rem">RP Project</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item navdrop">
                            {{-- @if (session('user')[0]['role'] == 'Develop')
                                <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                            @endif --}}
                        </li>
                        
                        <li class="nav-item dropdown navdrop">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                Aplicaiton
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="dd1">
                                <li><span class="dropdown-item-text"> <b> Aplication System </b></span></li>
                                <li><span class="dropdown-item-text"> <b> <hr> </b></span></li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Website Laravel</a></li>
                                        <li><a class="dropdown-item" href="#">Website UI HTML-CSS-JS</a></li>
                                        <li><a class="dropdown-item" href="#">Android Programming</a></li>
                                    </div>
                                    <div class="col-sm-4">
                                        <li><a class="dropdown-item" href="#">Website React</a></li>
                                        <li><a class="dropdown-item" href="#">Website Custome CSS-JS Animation</a></li>
                                        <li><a class="dropdown-item" href="#">Website Profile Custome Portofolio</a></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Dekstop Aplicaiton</a></li>
                                    </div>
                                </div>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown navdrop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Design
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" id="dd2">
                                <li><span class="dropdown-item-text"> <b> Design and UI </b></span></li>
                                <li><span class="dropdown-item-text"> <b> <hr> </b></span></li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">UI Prototype Andorid</a></li>
                                        <li><a class="dropdown-item" href="#">UI Prototype Website</a></li>
                                        <li><a class="dropdown-item" href="#">Banners Design</a></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Logo Design</a></li>
                                        <li><a class="dropdown-item" href="#">MockUp Product Design</a></li>
                                        <li><a class="dropdown-item" href="#">Design Interior</a></li>
                                    </div>
                                    <div class="col-sm-3">
                                        
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown navdrop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Editing
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" id="dd3">
                                <li><span class="dropdown-item-text"> <b> Design and Editing </b></span></li>
                                <li><span class="dropdown-item-text"> <b> <hr> </b></span></li>
                                <li><a class="dropdown-item" href="#">VideoGrafi</a></li>
                                <li><a class="dropdown-item" href="#">Photo Editing</a></li>
                                <li><a class="dropdown-item" href="#">3D Modelling Maya</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown navdrop">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown" id="dd4">
                                <li><span class="dropdown-item-text"> <b> More Important About Us </b></span></li>
                                <li><span class="dropdown-item-text"> <b> <hr> </b></span></li>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Experience</a></li>
                                        <li><a class="dropdown-item" href="#">Partner</a></li>
                                        <li><a class="dropdown-item" href="#">We Are StartUp</a></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Daftar Sebagai Freelance</a></li>
                                        <li><a class="dropdown-item" href="#">Inside With Us</a></li>
                                        <li><a class="dropdown-item" href="#">About Us</a></li>
                                    </div>
                                    <div class="col-sm-3">
                                        <li><a class="dropdown-item" href="#">Contact Us</a></li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="{{ url('/dashboard') }}" class="btn tombol-white text-white"><i class="uil uil-user"></i></a>
                    </div>
                </div>
            </div>
        </nav>
</section>
