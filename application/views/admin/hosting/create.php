<div>
    </div>
    <h1 class="fs-2 my-4 fw-semibold poppins">Create Hosting Item</h1>
    <form action="<?php echo base_url('Admin/addHosting'); ?>" enctype="multipart/form-data" id="form-group" method="POST">
        <div class="mb-3 poppins">
            <label for="nama_hosting" class="form-label">Nama Hosting</label>
            <input type="text" class="form-control" id="nama_hosting" name="nama_hosting" required>
        </div>
        <div class="mb-4 poppins">
            <label for="has_cpanel" class="form-label d-block">CPanel</label>
            <select id="has_cpanel" name="has_cpanel">
                <option name="has_cpanel" value="Y">Active</option>
                <option name="has_cpanel" value="N">No</option>
            </select>
        </div>
        <div class="mb-4 poppins">
            <label for="has_ssl" class="form-label d-block">SSL</label>
            <select id="has_ssl" name="has_ssl">
                <option name="has_ssl" value="Y">Active</option>
                <option name="has_ssl" value="N">No</option>
            </select>
        </div>
        <div class="mb-4 poppins">
            <label for="has_subdomain" class="form-label d-block">Subdomain</label>
            <select id="has_subdomain" name="has_subdomain">
                <option name="has_subdomain" value="Y">Active</option>
                <option name="has_subdomain" value="N">No</option>
            </select>
        </div>
        <div class="mb-4 poppins">
            <label for="has_storage" class="form-label d-block">SSD Storage</label>
            <input type="text" class="form-control" id="has_storage" name="has_storage" required>
        </div>
        <div class="mb-4 poppins">
            <label for="num_database" class="form-label">Jumlah Database</label>
            <input type="text" class="form-control" id="num_database" name="num_database" required>
        </div>
        <div class="mb-4 poppins">
            <label for="harga" class="form-label">Harga Hosting</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary poppins w-100">Submit</button>
    </form>
</div>