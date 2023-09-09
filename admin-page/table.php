<?php require_once 'header.php' ?>

        <div class="container-fluid" style="text-align: justify;">
            <h3 class="text-dark mb-4">Kitaplarım</h3>
            <div class="card shadow">
                <div class="card-body"><button class="btn btn-primary" type="button" style="margin-top: 15px;margin-bottom: 15px;">Yeni Kitap Ekle</button>
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Kitap Adı</th>
                                    <th>Fotoğrafı</th>
                                    <th>Yazar Adı</th>
                                    <th>Yayın Evi</th>
                                    <th>Okunma Tarihi</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $kitapSor = $conn->prepare("SELECT * FROM kitaplar k, kategori a WHERE a.kategori_id=k.kitap_kategori_id;"); //Kitaplar tablosundaki tüm verileri getir.
                                $kitapSor->execute(); //Sorguyu Çalıştır
                                while ($kitapCek = $kitapSor->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        <td><?=$kitapCek['kitap_adi']?></td>
                                        <td><img src="../<?=$kitapCek['kitap_foto']?>" height="50"></td>
                                       <td><?=$kitapCek['kitap_yazari']?></td>
                                       <td><?=$kitapCek['kitap_yayin_evi']?></td>
                                       <td><?=$kitapCek['kitap_okuma_tarihi']?></td>
                                       <td><?=$kitapCek['kategori_adi']?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                        </div>
                        <div class="col-md-6">
                            <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'
    ?>