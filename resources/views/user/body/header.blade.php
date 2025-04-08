      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="bg-primary py-2 d-none d-sm-block">

            {{-- <div class="container">
              <div class="row align-items-center">
                <div class="col-auto d-none d-lg-block">
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
                </div>
              </div>
            </div>--}}
            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->


          <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
              <a class="navbar-brand d-flex   " href="{{ url('/') }}">

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
                            <h4>.PETICIA</h4>
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
                  <li class="nav-item px-2 pe-6"><a class="nav-link" aria-current="page" href="{{url('/zoznam')}}">ZOZNAM</a></li>
                </span>
                </ul>

                <a class="btn btn-primary order-1 order-lg-0" href="{{route('admin.logout')  }}"data-bs-toggle="modal" data-bs-target="#logoutModal">Odhlásenie</a>
                    </form>
                  </ul>
                </div>
              </div>
            </div>
          </nav>


          <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chcete sa odhlásiť?</h5>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Zvoľte "ÁNO, odhlásiť" v prípade, že ste sa tak skutočne rozhodli</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">NIE</button>
            <a class="btn btn-primary" href="{{ route('admin.logout') }}">ÁNO, odhlásiť</a>
        </div>
    </div>
</div>
</div>
