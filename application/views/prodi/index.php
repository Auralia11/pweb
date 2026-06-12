<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center bg-secondary text-white">
        <span class="fw-semibold">Data Program Studi</span>
        <a href="<?php echo base_url('prodi/tambah') ?>" class="btn btn-light btn-sm">+ Tambah</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0" id="datatable">
                <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama Program Studi</th>
                        <th>Strata</th>
                        <th>Fakultas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($prodi as $row) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo htmlspecialchars($row['prodi_name']) ?></td>
                        <td><?php echo $row['prodi_strata'] ?></td>
                        <td><?php echo htmlspecialchars($row['fakultas_name']) ?></td>
                        <td>
                            <a href="<?php echo base_url('prodi/ubah/' . $row['prodi_id']) ?>"
                               class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo base_url('prodi/hapus/' . $row['prodi_id']) ?>"
                               class="btn btn-danger btn-sm btn-hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>