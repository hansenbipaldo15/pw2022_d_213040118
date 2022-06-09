<div class="table-responsive">
                            <a href="tambah_data.php" class="btn btn-success">Tambah Data</a><br/>
                            
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <?php
                                        $query="select *from pembayaran INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas INNER JOIN spp ON pembayaran.id_spp=spp.id_spp";
                                        $result= mysqli_query($conn, $query);
                                        if(mysqli_num_rows($result)==0){
                                            echo '<center><tr><td colspan="8">TIDAK ADA DATA !!</td></tr></center>';
                                        }
                                        $no=1;
                                    ?>
                                    
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Petugas</th>
                                            <th>NISN</th>
                                            <th>Tgl Bayar</th>
                                            <th>Bulan Bayar</th>
                                            <th>Tahun Bayar</th>
                                            <th>Nominal</th>
                                            <th>Total Bayar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($data= mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                          <td><?php echo $no;?></td>
                                              <td><?php echo $data['nama_petugas'];?></td>
                                              <td><?php echo $data['nisn'];?></td>
                                              <td><?php echo $data['tgl_bayar'];?></td>
                                              <td><?php echo $data['bulan_dibayar'];?></td>
                                              <td><?php echo $data['tahun_dibayar'];?></td>
                                              <td><?php echo $data['nominal'];?></td>
                                              <td><?php echo $data['jumlah_bayar'];?></td>
                                              <td>
                                                  <a href="edit_data.php?id=<?php echo $data['id_pembayaran'];?>" class="btn btn-warning">Edit</a>
                                                  <a href="hapus_data.php?id=<?php echo $data['id_pembayaran'];?>" class="btn btn-danger">Hapus</a>
                                              
                                            </td>
                                        </tr>
                                        <?php
                                     $no++;
                                     }
                                    ?>
                                    </tbody>
                                </table>
                            </div>