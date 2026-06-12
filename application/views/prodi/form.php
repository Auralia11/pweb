<div class="card shadow mb-4">
    <div class="card-header fw-semibold bg-secondary text-white">
        Form Program Studi
    </div>
    <div class="card-body">
        <form action="<?php echo $action ?>" method="post">

            <?php if ($button === 'Simpan') : ?>
            <div class="mb-3">
                <label for="prodi_id" class="form-label">ID Program Studi <span class="text-danger">*</span></label>
                <input type="number"
                       name="prodi_id"
                       id="prodi_id"
                       class="form-control <?php echo form_error('prodi_id') ? 'is-invalid' : (isset($_POST['prodi_id']) ? 'is-valid' : '') ?>"
                       value="<?php echo set_value('prodi_id', isset($prodi['prodi_id']) ? $prodi['prodi_id'] : '') ?>">
                <?php if (form_error('prodi_id')) : ?>
                    <div class="invalid-feedback"><?php echo form_error('prodi_id') ?></div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <!-- 1. Dropdown Fakultas -->
            <div class="mb-3">
                <label for="fakultas_id" class="form-label">Fakultas <span class="text-danger">*</span></label>
                <select name="fakultas_id"
                        id="fakultas_id"
                        class="form-select <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : '') ?>">
                    <option value="">-- Pilih Fakultas --</option>
                    <?php foreach ($fakultas as $f) : ?>
                        <option value="<?php echo $f['fakultas_id'] ?>"
                            <?php echo set_select('fakultas_id', $f['fakultas_id'],
                                isset($prodi['fakultas_id']) && $prodi['fakultas_id'] == $f['fakultas_id']) ?>>
                            <?php echo htmlspecialchars($f['fakultas_name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (form_error('fakultas_id')) : ?>
                    <div class="invalid-feedback"><?php echo form_error('fakultas_id') ?></div>
                <?php endif; ?>
            </div>

            <!-- 2. Nama Program Studi -->
            <div class="mb-3">
                <label for="prodi_name" class="form-label">Nama Program Studi <span class="text-danger">*</span></label>
                <input type="text"
                       name="prodi_name"
                       id="prodi_name"
                       class="form-control <?php echo form_error('prodi_name') ? 'is-invalid' : (isset($_POST['prodi_name']) ? 'is-valid' : '') ?>"
                       value="<?php echo set_value('prodi_name', isset($prodi['prodi_name']) ? $prodi['prodi_name'] : '') ?>"
                       placeholder="Masukkan nama program studi">
                <?php if (form_error('prodi_name')) : ?>
                    <div class="invalid-feedback"><?php echo form_error('prodi_name') ?></div>
                <?php endif; ?>
            </div>

            <!-- 3. Radio Button Strata -->
            <div class="mb-3">
                <label class="form-label">Jenjang Strata <span class="text-danger">*</span></label>
                <div>
                    <?php
                    $strata_options = ['D3', 'S1', 'S2'];
                    foreach ($strata_options as $strata) :
                    ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input"
                                   type="radio"
                                   name="prodi_strata"
                                   id="strata_<?php echo $strata ?>"
                                   value="<?php echo $strata ?>"
                                   <?php echo set_radio('prodi_strata', $strata,
                                       isset($prodi['prodi_strata']) && $prodi['prodi_strata'] == $strata) ?>>
                            <label class="form-check-label" for="strata_<?php echo $strata ?>">
                                <?php echo $strata ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if (form_error('prodi_strata')) : ?>
                    <div class="text-danger small"><?php echo form_error('prodi_strata') ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo base_url('prodi') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>