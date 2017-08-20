<!doctype html>
<html>
    <head>
        <title>Lookup Modal Bootstrap 3 - harviacode.com</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
        <style>
            body{
                margin: 15px;
            }
            .pilih:hover{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Lookup Kode Obat</h4>
                    </div>
                    <div class="modal-body">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama ID</th>
                                    <th>Sub ID</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                                $con = mysqli_connect('localhost', 'root', '', 'dbpos');
                                $sql = mysqli_query($con,'SELECT * FROM as_products');
                                while ($r = mysqli_fetch_array($sql)) {
                                    ?>
                                    <tr class="pilih" data-kodeobat="<?php echo $r['kode_obat']; ?>">
                                        <td><?php echo $r['productID']; ?></td>
                                        <td><?php echo $r['productName']; ?></td>
                                        <td><?php echo $r['productBarcode']; ?></td>
                                        <td> <img src="gambar/<?php echo $r['gambar']; ?>" width="100" height="150"></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">

//            jika dipilih, kode obat akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("kode_obat").value = $(this).attr('data-kodeobat');
                $('#myModal').modal('hide');
            });

//            tabel lookup obat
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var kode_obat = document.getElementById("kode_obat").value;
                alert('kode obat ' + kode_obat + ' berhasil tersimpan');
            }
        </script>
    </body>
</html>
