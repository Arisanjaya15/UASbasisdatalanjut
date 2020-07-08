<?php include_once('../_header.php'); ?>

<div class="box">
    <h1>Rekam Medis</h1>
    <h4>
        <small>Data Rekam Medis</small>
        <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Rekam Medis</i></a>
        </div>
    </h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dokter">
            <thead>
                <tr> 
                    <th>No.</th>
                    <th>Tanggal Periksa</th>
                    <th>Nama Pasien</th>
                    <th>Keluham</th>
                    <th>Nama Dokter</th>
                    <th><i class="glyphicon glyphicon-cog"></i></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
            </div> 
         </div>
<?php include_once('../_footer.php'); ?>