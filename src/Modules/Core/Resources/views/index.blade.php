@extends('core::layouts.master')

@section('content')


    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>DataTable Jquery</h3>
                        <p class="text-subtitle text-muted">
                            Powerful interactive tables with datatables (jQuery required)
                        </p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable Jquery
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Basic Tables start -->
            <section class="section">
                <div class="card">
                    <div class="card-header">Jquery Datatable</div>
                    <div class="card-body">
                        <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table dataTable no-footer" id="table1" aria-describedby="table1_info">
                                        <thead>
                                        <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 137.062px;">Name</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 602.203px;">Email</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 213.703px;">Phone</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 237.406px;">City</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 127.625px;">Status</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd">
                                            <td class="sorting_1">Aladdin</td>
                                            <td>sem.ut@pellentesqueafacilisis.ca</td>
                                            <td>0800 1111</td>
                                            <td>Bothey</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Berk</td>
                                            <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                            <td>(0101) 043 2822</td>
                                            <td>Sanquhar</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Bruno</td>
                                            <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                            <td>07624 869434</td>
                                            <td>Rocca d"Arce</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Carter</td>
                                            <td>urna.justo.faucibus@orci.com</td>
                                            <td>07079 826350</td>
                                            <td>Biez</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Channing</td>
                                            <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                            <td>0845 46 49</td>
                                            <td>Warrnambool</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Cruz</td>
                                            <td>non@quisturpisvitae.ca</td>
                                            <td>07624 944915</td>
                                            <td>Shikarpur</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Dale</td>
                                            <td>fringilla.euismod.enim@quam.ca</td>
                                            <td>0500 527693</td>
                                            <td>New Quay</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Darius</td>
                                            <td>velit@nec.com</td>
                                            <td>0309 690 7871</td>
                                            <td>Ways</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Deacon</td>
                                            <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                            <td>07740 599321</td>
                                            <td>Karapınar</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Emmanuel</td>
                                            <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                            <td>(016977) 8208</td>
                                            <td>Saint-Remy-Geest</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Ferdinand</td>
                                            <td>gravida.molestie@tinciduntadipiscing.org</td>
                                            <td>(016977) 4107</td>
                                            <td>Marlborough</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Graiden</td>
                                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                                            <td>076 4820 8838</td>
                                            <td>Offenburg</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Hamilton</td>
                                            <td>mauris@diam.org</td>
                                            <td>0800 256 8788</td>
                                            <td>Sanzeno</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Harding</td>
                                            <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                            <td>0800 1111</td>
                                            <td>Obaix</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Jermaine</td>
                                            <td>sodales@nuncsit.org</td>
                                            <td>0800 528324</td>
                                            <td>Mold</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Keegan</td>
                                            <td>molestie.dapibus@condimentumDonecat.edu</td>
                                            <td>0800 200103</td>
                                            <td>Assen</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Kermit</td>
                                            <td>diam.Sed.diam@anteVivamusnon.org</td>
                                            <td>(01653) 27844</td>
                                            <td>Patna</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Kibo</td>
                                            <td>feugiat@urnajustofaucibus.co.uk</td>
                                            <td>07624 682306</td>
                                            <td>La Cisterna</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Kuame</td>
                                            <td>Quisque.purus@mauris.org</td>
                                            <td>(0151) 561 8896</td>
                                            <td>Tresigallo</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Leonard</td>
                                            <td>blandit.enim.consequat@mollislectuspede.net</td>
                                            <td>0800 1111</td>
                                            <td>Lobbes</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Maxwell</td>
                                            <td>diam@dapibus.org</td>
                                            <td>0334 836 4028</td>
                                            <td>Thane</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Nathaniel</td>
                                            <td>mi.Duis@diam.edu</td>
                                            <td>(012165) 76278</td>
                                            <td>Grumo Appula</td>
                                            <td>
                                                <span class="badge bg-danger">Inactive</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Oleg</td>
                                            <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                            <td>0500 441046</td>
                                            <td>Rossignol</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Philip</td>
                                            <td>turpis@euenimEtiam.org</td>
                                            <td>0500 571108</td>
                                            <td>Okara</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Ray</td>
                                            <td>placerat.eget@sagittislobortis.edu</td>
                                            <td>(0112) 896 6829</td>
                                            <td>Hofors</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Stone</td>
                                            <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                            <td>0800 1111</td>
                                            <td>Olivar</td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                        </tr></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Tables end -->
        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 © Mazer</p>
                </div>
                <div class="float-end">
                    <p>
                        Crafted with
                        <span class="text-danger"><i class="bi bi-heart"></i></span> by
                        <a href="https://saugi.me">Saugi</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
