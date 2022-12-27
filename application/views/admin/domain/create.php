<div>
    <h1 class="fs-2 my-4 fw-semibold poppins">Create Domain Item</h1>
    <form action="<?php echo base_url('Admin/addDomain'); ?>" enctype="multipart/form-data" id="form-group" method="POST">
        <div class="mb-3 poppins">
            <label for="nama_domain" class="form-label">Nama Domain</label>
            <input type="text" class="form-control" id="nama_domain" name="nama_domain" required>
        </div>
        <button type="submit" class="btn btn-primary poppins w-100">Submit</button>
    </form>
</div>