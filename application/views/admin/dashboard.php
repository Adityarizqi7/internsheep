<title>Dashboard - Admin GoLive</title>

<section>
    <div id="box-toast">
        <?php echo $this->session->flashdata('message'); ?>
    </div>
    <h1 class="fs-2 my-3 fw-semibold poppins text-center text-decoration-underline">Dashboard Admin</h1>
    <br />
    <div class="table-hosting my-5">
        <div class="d-flex justify-content-between">
            <h3 class="fs-4 mb-5 fw-normal poppins">Daftar Item Hosting</h3>
            <a href="<?php echo base_url()?>admin/hosting/create">
                <button class="btn btn-primary poppins">Create</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead class="poppins text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Hosting</th>
                    <th scope="col">CPanel</th>
                    <th scope="col">SSL</th>
                    <th scope="col">Subdomain</th>
                    <th scope="col">Storage</th>
                    <th scope="col">Database</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    if($data_hosting) {
                        foreach ($data_hosting as $item) {
                            ?>
                                <tr class="text-center jetbrains">
                                    <th scope="row"><?= $nomor++ . "." ?></th>
                                    <td><?= $item->nama_hosting; ?></td>
                                    <td><?= hasIncluded($item->has_cpanel) ?></td>
                                    <td><?= hasIncluded($item->has_ssl) ?></td>
                                    <td><?= hasIncluded($item->has_subdomain) ?></td>
                                    <td><?= formatBytes($item->has_storage) ?></td>
                                    <td><?= $item->num_database; ?></td>
                                    <td><?= rupiah($item->harga) ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="<?php echo base_url("admin/hosting/".$item->id_hosting."/")?>edit" rel="noreferrer" class="box-button-detail">
                                            <button id="edit_btn" type="button" class="btn btn-primary">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url('Admin/delete/'.$item->id_hosting) ?>" class="box-button-detail">
                                            <button id="delete_btn" type="button" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <div class="mx-auto my-5 w-full">
                                <h1 class="jetbrains text-center fs-3">Hosting tidak tersedia</h1>
                            </div>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <br />
    <hr />
    <br />

    <div class="table-hosting my-5">
        <div class="d-flex justify-content-between">
            <h3 class="fs-4 mb-5 fw-normal poppins">Daftar Item Domain</h3>
            <a href="<?php echo base_url()?>admin/domain/create">
                <button class="btn btn-primary poppins">Create</button>
            </a>
        </div>
        <table class="table table-striped">
            <thead class="poppins text-center">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Domain</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    if($data_domain) {
                        foreach ($data_domain as $item) {
                            ?>
                                <tr class="text-center jetbrains">
                                    <th scope="row"><?= $nomor++ . "." ?></th>
                                    <td><?= $item->nama_domain; ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="<?php echo base_url("admin/domain/".$item->id_domain."/")?>edit" rel="noreferrer" class="box-button-detail">
                                            <button id="edit_btn" type="button" class="btn btn-primary">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url('Admin/deleteDomain/'.$item->id_domain) ?>" class="box-button-detail">
                                            <button id="delete_btn" type="button" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="3" strokeLinecap="round" strokeLinejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                        }
                    } else {
                        ?>
                            <div class="mx-auto my-5 w-full">
                                <h1 class="jetbrains text-center fs-3">Domain tidak tersedia</h1>
                            </div>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <br />
</section>