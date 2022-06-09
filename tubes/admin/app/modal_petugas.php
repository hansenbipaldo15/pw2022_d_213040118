<div class="modal fade" id="petugas-<?php echo $data['id_petugas']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Password</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td><?php echo $data['nama_petugas'];?></td>
                            <td><?php echo $data['username'];?></td>
                            <td><?php echo $data['password'];?></td>
                           
                        </tr> 
                    </tbody>
                    
                </table>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary"  href="hapus_petugas.php?id=<?php echo $data['id_petugas'];?>">Ya</a>
            </div>
        </div>
    </div>
</div> 