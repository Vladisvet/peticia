      <!-- ============================================-->
      <!-- <section> begin ============================-->

        <section class="bg-secondary">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
                <a class="text-decoration-none navbar-brand d-flex mb-3" height="51" alt="" href="{{ url('/') }}">

                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-1x"></i>
                    </div>
                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="navbar-brand-icon">
                        <i class="fas fa-users fa-1x"></i>
                    </div>
                    <div class="navbar-brand-text mr-0 ml-0 mt-0"><sub>
                            <h4 class="text-light">.peticia</h4>
                        </sub></div>
                    <div class="navbar-brand-text mr-0 ml-0 mt-2"><sub>
                        <h6 class="text-light">.org</h6>
                    </sub></div>
                </a>

              <p class="text-light">
                <i class="fas fa-envelope me-3"> </i>
                <!-- Font Awesome fontawesome.com -->
                <script>eval(unescape("%7a%78%63%6f%6d%38%33%3d%5b%27%25%37%30%25%36%35%25%37%34%25%36%39%25%36%33%25%36%39%25%36%31%25%32%65%25%36%66%25%37%32%25%36%37%27%2c%5b%27%25%36%33%25%36%66%25%36%64%27%2c%27%25%36%37%25%36%64%25%36%31%25%36%39%25%36%63%27%5d%2e%72%65%76%65%72%73%65%28%29%2e%6a%6f%69%6e%28%27%2e%27%29%5d%2e%6a%6f%69%6e%28%27%40%27%29%3b%66%67%69%62%67%34%34%3d%27%70%65%74%69%63%69%61%2e%6f%72%67%40%67%6d%61%69%6c%2e%63%6f%6d%27%3b%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%66%67%69%62%67%34%34%2e%6c%69%6e%6b%28%27%6d%61%69%27%2b%27%6c%74%6f%3a%27%2b%7a%78%63%6f%6d%38%33%29%29%3b"));</script>
              </p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              {{-- <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Informácie</h5> --}}
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200" data-bs-toggle="modal"
                    data-bs-target="#staticBackdropOnas" class="nav-link" aria-current="page" href="{{url('/onas')}}">O&nbsp;nás</a>
                </li>

                <li class="lh-lg"><a class="text-200" data-bs-toggle="modal"
                    data-bs-target="#staticBackdropOtazky" class="nav-link" aria-current="page" href="{{url('/otazky')}}">Najčastešie&nbsp;otázky</a>
                </li>

                <li class="lh-lg"><a class="text-200" data-bs-toggle="modal"
                    data-bs-target="#staticBackdropKontakt" class="nav-link" aria-current="page" href="{{url('/kontakt')}}">Kontakt</a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2 offset-lg-1 offset-md-1 offset-sm-1>
              {{-- <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Dokumenty</h5> --}}
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200" href="#!">Terms</a></li>
                    <li class="lh-lg"><a class="text-200" href="#!">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
        <!-- <section> close ============================-->

      <section class="py-0" style="margin-top: -5.8rem;">
        <div class="container bg-primary">
          <div class="row justify-content-md-between justify-content-evenly py-2">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 ms-2 fw-bold">Všetky práva &copy; peticia.org - 2023</p>
            </div>
          </div>
        </div>
      </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->


        </main>
        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

        <!-- ZACIATOK -->
        <!-- Modal na onas -->
        @include('main.modal.modal_onas')
        <!-- KONIeC -->
        <!-- Modal na onas -->

        <!-- ZACIATOK -->
        <!-- Modal na otazky -->
        @include('main.modal.modal_otazky')
        <!-- KONIeC -->
        <!-- Modal na otazky -->

        <!-- ZACIATOK -->
        <!-- Modal na kontakt -->
        @include('main.modal.modal_kontakt')
        <!-- KONIeC -->
        <!-- Modal na kontakt -->
