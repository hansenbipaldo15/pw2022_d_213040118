<div class="modal fade" id="kelas-<?php echo $data['id_kelas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Akan Menghapus data ini ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="table-responsive">
            <table class="table table-bordered" style="width: 1500px" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $data['nama_kelas'];?></td>
                            <td><?php echo $data['kompetensi_keahlian'];?></td>
                           
                        </tr> 
                    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary"  href="hapus_kelas.php?id=<?php echo $data['id_kelas'];?>">Ya</a>
            </div>
        </div>
    </div>
</div>