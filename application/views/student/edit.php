<title>
    <?php 
        foreach ($data_bySlug as $item) {
            echo "Edit Data - " . $item->student_name;
        }
    ?>
</title>

<div id="home">
    <section id="content">
        <div id="box-toast" class="fixed top-0 right-0 left-0 z-50">
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
        </div>
        <div class="box-content flex gap-[5rem] px-10 pb-10 pt-7">
            <article class="left-content w-full space-y-10">
            <div class="box-part-profile">
                    <div class="heading-part">
                        <h2 class="pb-2 poppins text-[1.15rem] font-semibold text-indigo-600">EDIT DATA MAHASISWA</h2>
                        <div class="border border-solid border-indigo-300 relative">
                            <div class="border-[3px] border-solid border-indigo-600 w-[7%] absolute -top-1"></div>
                        </div>
                    </div>
                    <div class="describe-part jetbrains pt-9 text-justify">
                        <?php  
                            if (isset($data_bySlug)) {
                                foreach ($data_bySlug as $item) {
                                    ?>
                                        <form action="<?php echo base_url('Home/update') ?>" id="form-group" class="grid grid-cols-4 gap-10 place-content-stretch" enctype="multipart/form-data" method="POST">
                                            <input type="hidden" name="id" id="id" value="<?= $item->id; ?>">
                                            <div class="form-box space-y-4">
                                                <label for="student_name" class="form-label text-[0.80] poppins">Nama Mahasiswa</label>
                                                <input type="text" name="student_name" onblur="handleFocus()" focus="false" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_name" value="<?= $item->student_name; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom nama harus diisi !</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_email" class="form-label text-[0.80] poppins">Email</label>
                                                <input type="text" name="student_email" onblur="handleFocus()" focus="false" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_email" value="<?= $item->student_email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom email harus valid !</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_npm" class="form-label text-[0.80] poppins">NPM</label>
                                                <input type="text" name="student_npm" onblur="handleFocus()" focus="false" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_npm" value="<?= $item->student_npm; ?>" pattern="(\s*(\S)\s*){9,15}">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom NPM memiliki Batas input digit 9 - 15 Angka !</p>
                                            </div>
                                            <?php 
                                                if ($item->student_gender === "L") {
                                                    ?> 
                                                        <div class="form-box space-y-4">
                                                            <label for="student_gender" class="form-label text-[0.80] poppins">Jenis Kelamin</label>
                                                            <select id="student_gender" name="student_gender" onblur="handleFocus()" focus="false" class="form-input w-full jetbrains focus:outline-none block font-semibold pb-3 pr-3 border-b-2 border-solid border-gray-700">
                                                                <option name="student_gender" value="L">L (Laki - Laki)</option>
                                                                <option name="student_gender" value="P">P (Perempuan)</option>
                                                            </select>
                                                        </div>                                                
                                                    <?php
                                                } else {
                                                    ?> 
                                                        <div class="form-box space-y-4">
                                                            <label for="student_gender" class="form-label text-[0.80] poppins">Jenis Kelamin</label>
                                                            <select id="student_gender" name="student_gender" onblur="handleFocus()" focus="false" class="form-input w-full jetbrains focus:outline-none block font-semibold pb-3 pr-3 border-b-2 border-solid border-gray-700">
                                                                <option name="student_gender" value="P">P (Perempuan)</option>
                                                                <option name="student_gender" value="L">L (Laki - Laki)</option>
                                                            </select>
                                                        </div>                                                
                                                    <?php

                                                }
                                            ?>
                                            <div class="form-box space-y-4">
                                                <label for="student_address" class="form-label text-[0.80] poppins">Alamat</label>
                                                <input type="text" name="student_address" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_address" value="<?= $item->student_address; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Alamat harus diisi sesuai data di NIK !</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_dad" class="form-label text-[0.80] poppins">Nama Orang Tua</label>
                                                <input type="text" name="student_dad" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_dad" value="<?= $item->student_dad; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Alamat harus diisi sesuai data di NIK !</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_major" class="form-label text-[0.80] poppins">Jurusan</label>
                                                <input type="text" name="student_major" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_major" value="<?= $item->student_major; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Jurusan harus diisi sesuai data di SIAMIK UPN JATIM!</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_faculty" class="form-label text-[0.80] poppins">Fakultas</label>
                                                <input type="text" name="student_faculty" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_faculty" value="<?= $item->student_faculty; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Fakultas harus diisi sesuai data di SIAMIK UPN JATIM!</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_status" class="form-label text-[0.80] poppins">Status</label>
                                                <select id="student_status" name="student_status" onblur="handleFocus()" focus="false" class="form-input w-full jetbrains focus:outline-none block font-semibold pb-3 pr-3 border-b-2 border-solid border-gray-700">
                                                    <?php 
                                                        if ($item->student_status == "Y") {
                                                            ?>
                                                                <option name="student_status" value="Y">Mahasiswa Aktif</option>
                                                                <option name="student_status" value="N">Mahasiswa Tidak Aktif</option>
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <option name="student_status" value="N">Mahasiswa Tidak Aktif</option>
                                                                <option name="student_status" value="Y">Mahasiswa Aktif</option>
                                                                <?php
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_year" class="form-label text-[0.80] poppins">Tahun Angkatan</label>
                                                <input type="text" name="student_year" onblur="handleFocus()" focus="false" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_year" value="<?= $item->student_year; ?>" pattern="(\s*(\S)\s*){4,5}">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Tahun Angkatan memiliki batas input 4 - 5 angka</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_semester" class="form-label text-[0.80] poppins">Semester</label>
                                                <input type="text" name="student_semester" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_semester" value="<?= $item->student_semester; ?>" onblur="handleFocus()" focus="false" pattern="(\s*(\S)\s*){1,3}">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Semester memiliki batas input 1 - 3 angka</p>
                                            </div>
                                            <div class="form-box space-y-4">
                                                <label for="student_gl" class="form-label text-[0.80] poppins">Dosen Wali</label>
                                                <input type="text" name="student_gl" class="form-input w-full focus:outline-none block font-semibold pb-3 border-b-2 border-solid border-gray-700" id="student_gl" value="<?= $item->student_gl; ?>">
                                                <p class="error-message jetbrains mt-2 text-sm text-red-400"><span class="font-medium"></span> Kolom Dosen Wali harus diisi sesuai data di SIAMIK UPN JATIM!</p>
                                            </div>
                                            <div id="btn_submit" class="flex items-center space-x-4 rounded-b">
                                                <button type="submit" class="jetbrains text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Data</button>
                                                <button type="reset" class="jetbrains text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Reset Data</button>
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

<script>
    function handleFocus() {
        const formInput = document.querySelector("#form-group :invalid");
        formInput.setAttribute("focus", "true");
    }
</script>