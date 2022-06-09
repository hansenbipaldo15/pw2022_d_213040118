<div class="modal fade" id="siswa-<?php echo $data['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Akan Menghapus data ini ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
            <table class="table table-bordered" style="width: 1500px" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $data['nisn'];?></td>
                            <td><?php echo $data['nis'];?></td>
                            <td><?php echo $data['nama'];?></td>
                            <td><?php echo $data['nama_kelas'];?></td>
                            <td><?php echo $data['kompetensi_keahlian'];?></td>
                            <td><?php echo $data['alamat'];?></td>
                            <td><?php echo $data['nomor_telepon'];?></td>
                            <td><?php echo $data['tahun'];?></td>
                            <td><?php echo $data['nominal'];?></td>
                        </tr> 
                    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary" href="hapus_siswa.php?id=<?php echo $data['id_siswa'];?>">Ya</a>
            </div>
        </div>
    </div>
</div>