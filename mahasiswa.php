<?php

require_once "app/Mahasiswa.php";

$mahasiswa = new Mahasiswa();
$rows = $mahasiswa->tampil();

?>

<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">Orders</h1>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <a class="btn app-btn-primary" href="#">
                        + Tambah
                    </a>
                </div>
            </div>
            <!--//row-->
        </div>
        <!--//table-utilities-->
    </div>
    <!--//col-auto-->
</div>
<!--//row-->

<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">No</th>
                                <th class="cell">NIM</th>
                                <th class="cell">NAMA LENGKAP</th>
                                <th class="cell">HANDPHONE</th>
                                <th class="cell">RPODI</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <?php 
                        $no = 1;
                        ?>

                        <tbody>
                        <?php foreach ($rows as $row) { ?>
                            <tr>
                                <td class="cell"><?php echo $no++?></td>
                                <td class="cell"><?php echo $row['nim_mhs']; ?></td>
                                <td class="cell"><?php echo $row['nama_mhs']; ?></td>
                                <td class="cell"><?php echo $row['no_hp_mhs']; ?></td>
                                <td class="cell"><?php echo $row['nama_prodi']; ?></td>
                                <td class="cell"></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
                <!--//table-responsive-->

            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <!--//app-pagination-->

    </div>
    <!--//tab-pane-->

</div>
<!--//tab-content-->