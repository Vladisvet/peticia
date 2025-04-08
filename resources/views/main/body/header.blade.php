    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-primary py-2 d-none d-sm-block">

          <div class="container">
            <div class="row">
                <div class="col-auto d-none d-lg-block">
                    <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>Sme v BETA štádiu vytvárania stránky </span></p>
                  </div>
              {{-- <div class="col-auto d-none d-lg-block">
                <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>1600 Amphitheatre Parkway, CA 94043 </span></p>
              </div>
              <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                <ul class="list-unstyled list-inline my-2">
                  <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-f text-900"></i></a></li>
                  <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-pinterest text-900"></i></a></li>
                  <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter text-900"></i></a></li>
                  <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram text-900"> </i></a></li>
                </ul>
              </div>
              <div class="col-auto">
                <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-900" href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
              </div>--}}
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand d-flex " href="{{ url('/') }}">

                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-1x"></i>
                    </div>
                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-1x"></i>
                    </div>
                    <div class="navbar-brand-text text-light  mr-0 ml-0 mt-0"><sub>
                            <h4>.peticia</h4>
                        </sub></div>
                    <div class="navbar-brand-text text-light  mr-0 ml-0 mt-2"><sub>
                        <h6>.org</h6>
                    </sub></div>
                </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
              <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Hlavná stránka - peticia.org ">
                  <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">DOMOV</a></li>
                </span>

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Zoznam všetkých petícií ">
                  <li class="nav-item px-2 "><a class="nav-link" aria-current="page" href="{{url('/zoznam')}}">ZOZNAM</a></li>
                </span>

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom" data-bs-content="Prečo je stránka petícia.org výnimočná">
                  <li class="nav-item px-2 pe-6"><a data-bs-toggle="modal"
                    data-bs-target="#staticBackdropPreco" class="nav-link" aria-current="page" href="#">PREČO</a></li>
                </span>
                </ul>

                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Na vytvorenie petície sa musíte najskôr zaregistrovať. Celý proces je intuitívne jednoduchý a priehľadný.">
                <a class="btn btn-outline-primary order-1 order-lg-0 ms-2" href="{{url('/register')  }}"><i class="bi bi-pencil-square me-2"></i>Registrácia</a></span>
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="bottom" data-bs-content="Tu sa môžete prihlásiť do vášho už zaregistrovaného účtu na vytvorenie petície.">
                    <a class="btn btn-outline-secondary order-1 order-lg-0 ms-2" href="{{url('/login')  }}"><i class="fa fa-user fa-fw me-1"></i>Prihlásenie</a></span>
                {{-- <form class="d-flex my-3 d-block d-lg-none">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <div class="dropdown d-none d-lg-block">
                  <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
                  <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px">
                    <form>
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                    </form>
                  </ul>
                </div> --}}
                {{-- <a class="btn btn-primary order-1 order-lg-0"  href="{{route('admin.logout')  }}>Registrácia</a> --}}
                {{-- <form class="d-flex my-3 d-block d-lg-none">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>--}}
                {{-- <div class="dropdown d-none d-lg-block">
                  <button class="btn btn-outline-light ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-800"></i></button>
                  <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" style="top:55px"> --}}
                    {{-- <form>
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search" /> </ul>
                    </form></div>--}}


              </div>
            </div>
          </nav>





<!-- ZACIATOK -->
<!-- Modal na Prečo -->
@include('main.modal.modal_preco')
<!-- KONIeC -->
<!-- Modal na Prečo -->
