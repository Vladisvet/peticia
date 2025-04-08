<div class="modal fade" id="staticBackdropOtazky" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-6">
        <div class="modal-content rounded-0">
            <div class="modal-header container-fluid bg-light">
               <div class="row">
               <h3 class="modal-title m-4 ps-4 pt-1 col-12" id="staticBackdropLabel">Najčastejšie kladené otázky</h3>
                </div>

                <div class="card pt-2 me-4">
                <span class="d-inline-block pe-0 me-2" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="left" data-bs-content="Kliknutím zavriete okno">
                <button type="button" class="btn-close btn-primary fad fa-times fa-2x" data-bs-dismiss="modal" id="close"
                aria-label="Close" ></button>
                </span></div>
            </div>

            <div class="modal-header container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                </ul>
            </div>


        <div class="modal-body container-fluid">
           <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <section class="pb-1">

            <div class="accordion" id="accordionExample">

                {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

                <div class="accordion-item">
                  <h2 class="accordion-header border border-dark mx-4" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>Vytvorenie petície</strong>&nbsp; na vašej platforme je <strong>&nbsp;zadarmo?</strong>
                    </button>
                  </h2>
                 <div id="collapseOne" class="accordion-collapse collapse show  border border-light border-4 mx-4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Vytvorenie petície je bez poplatkov.</strong> Nemusíte sa báť, tvorca stránky verí, že takáto stránka pomôže zlepšiť komunikáciu v našej spoločnosti tým, že každá petičná/spoločenská idea, aby mala úspech, sa prezentuje ako recionálna a teda široko diskutovateľná idea.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header border border-dark mx-4" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse  border border-light border-4 mx-4" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header border border-dark mx-4" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse  border border-light border-4 mx-4" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>

              </div>

            </section>
        </div>
     </div>


           </div>
    </div>
  </div>
</div>


