

@extends('user.user_master')
@section('user')

@php
$petition = DB::table('petitions')->where('user_id',Auth::user()->id)->get();
//$url = route({{$petition->subdomain}}.'.peticia.org');
//$livetv = DB::table('livetvs')->where('user_id',Auth::user()->id)->get();
//dd($petition,$livetv);
$status_petition = DB::table('status_petitions')->where('user_id',Auth::user()->id)->get();

$i = 1;

//dd($petition);

$sign = DB::table('sign_petitions')
->where('user_id', Auth::user()->id)
->orderBy('id', 'asc')
->get();
//dd($sign);
//dd($petition);
//dd($status_petition);
@endphp

<main class="bg-200">


    <!-- <section> begin ============================-->

    <section class="container">
        <section style="margin-top:-10.5rem">
            <div class="row mt-5">
        <div class="row">
            <div class="col-12">
                <div class=" mb-3">
                  <div class="col-xl-8 mb-3"><h1><i class="fas fa-user text-primary me-2"></i>Vítajte {{Auth::user()->name }}</h1>&nbsp;

                    <ul class="list-unstyled ">
                        <li class="mb-3"> <i class="fas fa-check text-info me-2"></i><strong>Tu môžete vytvoriť,</strong>&nbsp; upraviť, prípaden zmazať vašu petíciu. Môžete si pozrieť zoznam ľudí, ktorí podpísali, stiahnuť zoznam aj vytlačiť ho pre účely doručenia dokumentov príslušnej autorite.</li>
                    <li class="mb-3"> <i class="fas fa-check text-info me-2"></i> <strong>Samostatná webová stránka,</strong>&nbsp; tak sa stránka bude javiť - bude mať svoju vlastnú jedinečnú adresu. Systém vám dokonca dovolí stránku optimalizovať pre vyhladávače, môžete vytvoriť tzv. SEO (search engine optimization) pozri <a class="" href="https://sk.wikipedia.org/wiki/Optimaliz%C3%A1cia_pre_vyh%C4%BEad%C3%A1va%C4%8De">Wikipedia</a>.

                    </li>
    {{-- <a> W</a> --}}
                        </ul>
                </div>
            </div>
            </div>
            </div>
        </div>

    </section>



    <section style="margin-top:-8rem">
            <div class="row mt-0 col-xl-8">

                <h2><i class="fas fa-tasks text-primary me-2 mb-1 "></i>Čo musíte urobiť pre začatie petície?</h2>
                <ul class="list-unstyled ">
                    <li class="mb-0 mt-4"> <i class="fas fa-check text-info me-2"></i><strong>Vytvorte petíciu.</strong>&nbsp;Po kliknutí tlačítka sa vám otvorí pomocné okno, kde nájdete všetky potrebné položky na vytvorenie vašej kampane. Odporúčame starostlilvo vyplniť všetko - vaša kampaň bude takto plnohodnotná. Po uložení sa tlačítko znefunkční, budete mať však ešte možnosť úpravy, ak nebudete s niečim spokojná/ý.</li>

                <!-- Button trigger Vytvoriť modal -->
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group col-md-9 col-12 mb-2">
                                @if ($countPetition === 1)
                                <span class="" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-placement="bottom" data-bs-content="Disabled popover">
                                    <button type="button" class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" disabled>
                                        Petícia je vytvorená
                                    </button></span>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Jeden užívateľ može utvoriť len jednu petíciu. Ak chcete utvoriť novú petíciu, musíte sa znova zaregistrovať, môžete použiť ten istý mail (lepšie je však použiť iný, aby sa vám petície nemýlili), zmeňte si len prihlasovacie meno.
                                TERAZ môžete petíciu iba upravovať.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>



            @foreach ($petition as $row)
            <div class="col-md-12 col-12 mt-1  mb-6 float-start">  <a class="btn btn-outline-dark col-6" href="{{ URL::to($row->subdomain.'.peticia.org') }}">Link na vašu stránku</a></div>
            @endforeach


                         @else
                            <div class="row">
                            <div class="col-12">
                            <div class="form-group col-md-12 col-12 mb-6">
                                <button type="button" class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Vytvorte vašu petíciu
                                </button>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                    data-bs-content="Po klilknutí môžete vytvoriť vašu petíciu a nasledne ju uložiť, v ďalších krokoch aj upraviť a definitívne publikovať.">
                                    <a type="" class="bi bi-question-square  m-1 " disabled>
                                    </a>
                                </span>
                            </div>
                            </div>
                            </div>


                        @endif
                                {{-- @endforeach --}}

                            </div>
                        </div>
                    </div>


                    <li class="mb-0"> <i class="fas fa-check text-info me-2"></i><strong>Pridajte video, text, upravte a aktivujte.</strong>&nbsp;Po kliknutí sa otvorí pomocné okno, kde môžete skontrolovať váš petičný text a upraviť ho. Následne ho môžete aktivovať - tým sa na vašej stránke zobrazí podpisový formulár a môžete začať zbierať podpisy. Tu môžete tiež pridať video - určite tak urobte, obyčajné video natočené hoci aj vaším mobilom výrazne zvýši emočný obsah a príťažlivosť hodnôt, ktoré zastávate. Tu tiež môžete pridať tzv. motivačný text - môžete ním komunukovať na vašej stránke, čo uznáte za vhodné.</li>

                <!-- Button trigger Upraviť modal -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-9 col-12 mb-6">
                            <button type="button" class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                     data-bs-target="#staticBackdrop1">
                                Pridajte video, text, upravte a aktivujte
                            </button>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Po kliknutí môžete pridať video, upraviť vašu petíciu a finálne ju aktivovať">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>



                    <li class="mb-0"> <i class="fas fa-check text-info me-2"></i><strong>Vymazanie petície.</strong>&nbsp; Ak z nejakého dôvodu chcete vymazať petciu, otvorte pomocné okno a urobte tak. Proces je nevratný.
                    </li>
                <!-- Button trigger Delete modal -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-9 col-12 mb-6">
                            <button class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop2">
                                Vymažte vašu petíciu
                            </button>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="POZOR! Touto akciou vymažere vašu petíciu a zároveň aj údaje osôb, ktoré petíciu podpísali. Akcia je NEZVRATNÁ! Ubezpečte sa, že ste si podpisový hárok stiahli a máte ho bezpečne uložený.">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                        </div>


                    <li class="mb-0"> <i class="fas fa-check text-info me-2"></i><strong>Zoznam podpisov.</strong>&nbsp;Zobrazí sa vám tabuľka s údajmy ľudí, ktorí podpísali petíciu. Ste zodpovedný za získané údaje, pracujte s nimi zodpovedne a v rámci platných legislatívnych úprav.</li>

                <!-- Button trigger Zoznam podpisanych cely -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-9 col-12 mb-6">
                            <button type="button" class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop_zoznam_cely">
                                Pozrite si úplný zoznam podpisov
                            </button>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Po kliknutí si môžete prezrieť úplný zoznam ľudí, ktorí podpísali vašu petíciu.">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>

                <li class="mb-0"> <i class="fas fa-check text-info me-2"></i><strong>Píšte stúpencom.</strong>&nbsp;Na to, aby ste mohli písať stúpencom, potrebujete zoznam mailov ľudí, ktorí začiarkli, že chcú dostávať informácie. Po zakliknutí ich nájdete vyselektované. Určite im píšte, zdielate s nimi nielen hodnoty, ale aj odvahu.</li>



                <!-- Button trigger Zoznam mien a emailov ľudí, ktorí zaklikli povolenie -->
                <div class="row">
                    <div class="col-12">
                        <div class="form-group col-md-9 col-12 mb-6">
                            <button type="button" class="btn btn-primary float-start col-6" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop_zoznam_mailov">
                                Najaktívnejších ľudia a ich maily
                            </button>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                                data-bs-content="Po kliknutí sa vám zobrazí úplný zoznam ľudí spolu s ich mailami, ktorí pri podpise zaklikli, že chcú mailom dostávať informáciu o kampani.">
                                <a type="" class="bi bi-question-square  m-1 " disabled>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </ul>

            </div>
            </div>
            </div>
            <!-- end of .container-->

    </section>






















            <!DOCTYPE html>
            <html>
              <head>

















<!-- ============================================-->
    <!-- <section> begin ============================-->
    {{-- <section class="container">
        <div class="row">

            </div>
    </section> --}}
</main>
    <!-- ============================================-->
    <!-- <section> begin ============================-->



        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->

        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->

        <!-- <section> close ============================-->
        <!-- ============================================-->




<!-- ZACIATOK -->
<!-- Modal na vytvorenie petície -->
@include('user.index.modal_vytvorit')
<!-- KONIeC -->
<!-- Modal na vytvorenie petície -->


<!-- ZACIATOK -->
<!-- Modal na upravenie petície -->
@include('user.index.modal_upravit')
<!-- KONIeC -->
<!-- Modal na upravenie petície -->


<!-- START -->
<!-- Modal na vymazanie petície -->

@include('user.index.modal_vymazat')
<!-- END -->
<!-- Modal na vymazanie petície -->


<!-- START -->
<!-- Modal na LiveTV -->
@include('user.index.modal_livetv')
<!-- END -->
<!-- Modal na LiveTV -->

<!-- START -->
<!-- Modal zoznam cely podpisanych -->
@include('main.modal.modal_zoznam_cely')
<!-- Modal zoznam cely podpisanych -->
<!-- END -->

<!-- START -->
<!-- Modal zoznam cely podpisanych -->
@include('main.modal.modal_zoznam_mailov')
<!-- Modal zoznam cely podpisanych -->
<!-- END -->






{{-- @endsection --}}

<!DOCTYPE html>
{{-- <title>{{ $row->title }}</title> --}}
<html>



</html>
<!DOCTYPE html>
<html>
  <head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=19472395a2969da78c8a4c707e72123a">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://nightly.datatables.net/buttons/js/buttons.print.min.js"></script>
    <meta charset=utf-8 />
  </head>

  <script>
    $(document).ready(function() {
        $('table.display').DataTable( {
            dom: 'Blfrtip',
            "order": [[ 0, "desc" ]],
            buttons: ['excel', 'pdf', 'csv','copy', 'print',],
             "language":{
    "info": "Záznamy _START_ až _END_ z celkom _TOTAL_",
    "infoEmpty": "Záznamy 0 až 0 z celkom 0 ",
    "infoFiltered": "(vyfiltrované spomedzi _MAX_ záznamov)",
    "infoThousands": " ",
    "lengthMenu": "Zobraz _MENU_ záznamov",
    "loadingRecords": "Načítavam...",
    "processing": "Spracúvam...",
    "search": "Hľadať:",
    "zeroRecords": "Nenašli sa žiadne vyhovujúce záznamy",
    "paginate": {
        "first": "Prvá",
        "last": "Posledná",
        "next": "Nasledujúca",
        "previous": "Predchádzajúca"
    },
    "aria": {
        "sortAscending": ": aktivujte na zoradenie stĺpca vzostupne",
        "sortDescending": ": aktivujte na zoradenie stĺpca zostupne"
    },
    "autoFill": {
        "cancel": "Zrušiť",
        "fill": "Vyplniť všetky bunky s <i>%d<i><\/i><\/i>",
        "fillHorizontal": "Vyplniť bunky horizontálne",
        "fillVertical": "Vyplniť bunky vertikálne"
    },
    "buttons": {
        "collection": "Kolekcia <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvisRestore": "Obnoviť viditeľnosť",
        "copy": "Kopírovať",
        "copySuccess": {
            "1": "Skopírovaný 1 riadok do schránky",
            "_": "Skopírovaných %d riadkov do schránky"
        },
        "copyTitle": "Kopírovať do schránky",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Zobraziť všetky riadky",
            "_": "Zobraziť %d riadkov"
        },
        "pdf": "PDF",
        "print": "Tlačiť",
        "colvis": "Viditeľnosť stĺpcov",
        "copyKeys": "Stlačte CTRL alebo u2318 + C pre kopírovanie dát tabuľky do systémovej schránky. Pre zrušenie kliknite na túto správu alebo stlačte ESC."
    },
    "searchBuilder": {
        "add": "Pridať Podmienku",
        "clearAll": "Zmazať všetko",
        "condition": "Podmienka",
        "conditions": {
            "date": {
                "after": "Po",
                "before": "Pred",
                "between": "Medzi",
                "empty": "Prázdne",
                "equals": "Rovná sa",
                "not": "Nie je",
                "notBetween": "Nie je medzi",
                "notEmpty": "Nie je prázdne"
            },
            "number": {
                "between": "Medzi",
                "empty": "Prázdne",
                "equals": "Rovná sa",
                "gt": "Väčšie ako",
                "gte": "Väčšie alebo rovnaké ako",
                "lt": "Menšie ako",
                "lte": "Menšie alebo rovnaké ako",
                "not": "Nie",
                "notBetween": "Nie medzi",
                "notEmpty": "Nie prázdne"
            },
            "string": {
                "contains": "Obsahuje",
                "empty": "Prázdne",
                "endsWith": "Končí s",
                "equals": "Rovná sa",
                "not": "Nie je",
                "notEmpty": "Nie je prázdne",
                "startsWith": "Začína s"
            },
            "array": {
                "equals": "Rovná sa",
                "empty": "Prázdne",
                "contains": "Obsahuje",
                "not": "Nie je",
                "notEmpty": "Nie je prázdne",
                "without": "Bez"
            }
        },
        "data": "Dáta",
        "deleteTitle": "Vymazať filtrovacie pravidlo",
        "logicAnd": "A",
        "logicOr": "Alebo",
        "value": "Hodnota",
        "button": {
            "0": "Rozšírený filter",
            "_": "Rozšírený filter (%d)"
        },
        "leftTitle": "Podmienky odseku",
        "rightTitle": "Podmienky v odseku",
        "title": {
            "0": "Rozšírený filter",
            "_": "Rozšírený filter (%d)"
        }
    },
    "searchPanes": {
        "clearMessage": "Vymazať všetko",
        "collapse": {
            "0": "Vyhľadávacie Panely",
            "_": "Vyhľadávacie Panely (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Žiadne Vyhľadávacie Panely",
        "loadMessage": "Načítavam Vyhľadávacie Panely",
        "title": "Aktívnych Filtrov - %"
    },
    "select": {
        "cells": {
            "1": "1 zvolená bunka",
            "_": "%d vybraných buniek"
        },
        "columns": {
            "1": "1 vybraný stĺpec",
            "_": "%d vybraných stĺpcov"
        }
    },
    "thousands": " ",
    "datetime": {
        "next": "Ďalší",
        "hours": "Hodiny",
        "minutes": "Minúty",
        "seconds": "Sekundy",
        "unknown": "Neznámy",
        "amPm": [
            "am",
            "pm"
        ],
        "previous": "Predchádzajúci",
        "months": {
            "0": "Január",
            "1": "Feburár",
            "10": "November",
            "11": "December",
            "2": "Marec",
            "3": "Apríl",
            "4": "Máj",
            "5": "Jún",
            "6": "Júl",
            "7": "August",
            "8": "September",
            "9": "Október"
        },
        "weekdays": [
            "Nedeľa",
            "Pondelok",
            "Utorok",
            "Streda",
            "Štvrtok",
            "Piatok",
            "Sobota"
        ]
    },
    "editor": {
        "close": "Zavrieť",
        "create": {
            "button": "Nový",
            "title": "Vytvoriť nový záznam",
            "submit": "Vytvoriť"
        },
        "edit": {
            "button": "Editovať",
            "title": "Editovať záznam",
            "submit": "Aktualizovať"
        },
        "remove": {
            "button": "Vymazať",
            "title": "Vymazať",
            "submit": "Vymazať",
            "confirm": {
                "_": "Určite chcete vymazať %d riadkov?",
                "1": "Určite chcete vymazať 1 riadok?"
            }
        },
        "multi": {
            "title": "Niekoľko hodnôt",
            "info": "Zvolený prvok obsahuje rozdielne hodnoty pre tento vstup. Na editovanie a nastavenie všetkých prvkov pre tento vstup na rovnakú hodnotu, kliknite alebo klepnite tu, inak si zachovajú individuálne hodnoty.",
            "restore": "Vrátiť späť zmeny",
            "noMulti": "Tento vstup môže byť editovaný samostatne, ale nie ako súčasť skupiny."
        },
        "error": {
            "system": "Vyskytla sa systémová chyba."
        }
    },
    "decimal": ",",
    "emptyTable": "Nie sú k dispozícii žiadne dáta."
}


        });

    });

</script>




{{-- <script>
    $(document).ready(function() {
        $('#example12').DataTable( {
            dom: 'Bfrtip',
            buttons: ['excel', 'pdf', 'csv','copy', 'print'],

            "language": {
            //"sProcessing": "Traitement en cours ...",
            "sLengthMenu": "Počet _MENU_ riadkov",
            //"sZeroRecords": "Aucun résultat trouvé",
            //"sEmptyTable": "Aucune donnée disponible",
            "sInfo": "Riadky _START_ až _END_ z počtu _TOTAL_",
            //"sInfoEmpty": "Aucune ligne affichée",
            //"sInfoFiltered": "(Filtrer un maximum de_MAX_)",
            //"sInfoPostFix": "",
            "sSearch": "Vyhladávanie:",
            //"sUrl": "",
            //"sInfoThousands": ",",
            //"sLoadingRecords": "Chargement...",
            "oPaginate": {
            "sFirst": "Začiatok", "sLast": "Koniec", "sNext": "Ďalšia", "sPrevious": "Predošlá"
            },
            // "oAria": {
            //   "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
            // }
            }
        });

    });

</script>  --}}





@endsection
