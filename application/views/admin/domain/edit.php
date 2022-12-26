<title>
    <?php 
        foreach ($data_byId as $item) {
            echo "Edit Data - " . $item->nama_domain;
        }
    ?>
</title>
<div>
    <?php 
            if (isset($data_byId)) {
                foreach ($data_byId as $item) {
                    ?>
                        <h1 class="fs-2 my-4 fw-semibold poppins">Edit Hosting - <?= $item->nama_domain ?></h1>
                        <form action="<?php echo base_url('Admin/updateDomain'); ?>" enctype="multipart/form-data" id="form-group" method="POST">
                            <input type="hidden" name="id_domain" id="id_domain" value="<?= $item->id_domain; ?>">
                            <div class="mb-3 poppins">
                                <label for="nama_domain" class="form-label">Nama Domain</label>
                                <input type="text" class="form-control" id="nama_domain" name="nama_domain" value="<?= $item->nama_domain; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary poppins w-100">Update</button>
                        </form>
                    <?php
                }
            }
        ?>
</div>