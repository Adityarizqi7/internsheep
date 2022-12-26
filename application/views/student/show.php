<title>
    <?php
        foreach ($data_bySlug as $item) {
            echo "Profile — ".$item->student_name;
        }
    ?>
</title>

<div id="home">

    <section id="headline">
        <div class="box-headline p-10 flex w-full items-center space-x-10">
            <?php 
                if (isset($data_bySlug)) {
                    foreach ($data_bySlug as $item) {
                        ?>
                            <div class="box-text space-y-3 w-full">
                                <h1 class="title font-bold text-[1.75rem] poppins"><?= $item->student_name; ?></h1>
                                <div class="subtitle space-y-1 jetbrains">
                                    <h2><?= $item->student_npm; ?></h2>
                                    <h2><?= $item->student_major; ?> - Fakultas <?= $item->student_faculty; ?></h2>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </section>

    <section id="content">
        <div class="box-content flex gap-[5rem] px-10 pb-10 pt-7">
            <article class="left-content w-full space-y-10">
            <div class="box-part-profile">
                    <div class="heading-part">
                        <h2 class="pb-2 poppins text-[1.15rem] font-semibold text-indigo-600">DATA MAHASISWA</h2>
                        <div class="border border-solid border-indigo-300 relative">
                            <div class="border-[3px] border-solid border-indigo-600 w-[7%] absolute -top-1"></div>
                        </div>
                    </div>
                    <div class="describe-part jetbrains pt-9 text-justify">
                        <?php  
                            if (isset($data_bySlug)) {
                                foreach ($data_bySlug as $item) {
                                    ?>
                                        <form class="form-group grid grid-cols-4 gap-y-10">
                                            <div class="form-box space-y-4">
                                                <label for="student_name" class="form-label text-[0.80] poppins">Nama Mahasiswa</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_name" readonly value="<?= $item->student_name; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_email" class="form-label text-[0.80] poppins">Email</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_email" readonly value="<?= $item->student_email; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_npm" class="form-label text-[0.80] poppins">NPM</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_npm" readonly value="<?= $item->student_npm; ?>">
                                            </div>
                                            <?php 
                                                if ($item->student_gender === "L") {
                                                    ?> 
                                                        <div class="form-box space-y-4">
                                                            <label for="student_gender" class="form-label text-[0.80] poppins">Jenis Kelamin</label>
                                                            <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_gender" readonly value="L (Laki - Laki)">
                                                        </div>                                                
                                                    <?php
                                                } else {
                                                    ?> 
                                                        <div class="form-box space-y-4">
                                                            <label for="student_gender" class="form-label text-[0.80] poppins">Jenis Kelamin</label>
                                                            <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_gender" readonly value="P (Perempuan)">
                                                        </div>                                                
                                                    <?php

                                                }
                                            ?>
                                            <div class="form-box space-y-4">
                                                <label for="student_address" class="form-label text-[0.80] poppins">Alamat</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_address" readonly value="<?= $item->student_address; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_dad" class="form-label text-[0.80] poppins">Nama Orang Tua</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_dad" readonly value="<?= $item->student_dad; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_major" class="form-label text-[0.80] poppins">Jurusan</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_major" readonly value="<?= $item->student_major; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_faculty" class="form-label text-[0.80] poppins">Fakultas</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_faculty" readonly value="<?= $item->student_faculty; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_status" class="form-label text-[0.80] poppins">Status</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_status" readonly 
                                                value="<?php
                                                    if ($item->student_status == "Y") {
                                                        echo "Aktif Berkuliah";
                                                    } else {
                                                        echo "Mahasiswa tidak aktif";
                                                    }
                                                    ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_year" class="form-label text-[0.80] poppins">Tahun Angkatan</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_year" readonly value="<?= $item->student_year; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_semester" class="form-label text-[0.80] poppins">Semester</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_semester" readonly value="<?= $item->student_semester; ?>">
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_gl" class="form-label text-[0.80] poppins">Dosen Wali</label>
                                                <input type="text" class="form-control focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_gl" readonly value="<?= $item->student_gl; ?>">
                                            </div>
                                        </form>                                        
                                    <?php
                                }
                            }    
                        ?>
                    </div>
                </div>
            </article>    
        </div>
    </section>

</div>