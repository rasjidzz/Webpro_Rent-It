@extends('layouts.main')

@section('container')
    <style>
        :root {
            --primary: #ECE8E8;
            --red1: #E22A32;
            --red2: #B22D30;
            --blue: #0F2337;
            --white: #fff;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }


        section {
            margin: 50px;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        #button:hover {
            background-color: var(--red2);
            color: var(--white);
            font-size: 18px;
            transition: 1ms ease;
        }

        #fileList {
            position: absolute;
            top: 10px;
            left: 10px;
            text-align: left;
        }

        .dropArea {
            overflow: auto;
            max-height: 200px;
        }
    </style>

    <div class="container my-5">
        <section class="row gap-4 justify-content-center">
            <div id="box1" class="col-sm-4 w-30 rounded-3 border border-1 border-secondary px-0">
                <!-- $s->gambar -->
                <img src="/Assets/Fasilitas/{{ $facility->slug}}-2.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $facility->name }}</h4>
                    <p class="card-text">{{ $facility->description }}</p>
                </div>
            </div>
            <div id="box2" class="col-sm-6 w-40 rounded-3 border border-1 border-secondary">
                <h3 class=" text-center m-4" style="font-family: 'Open Sans', 'Helvetica Neue', sans-serif;">Data Diri
                    Pengguna</h3>
                <div class="mb-3 ">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ auth()->user()->name  }}">
                    <div id="errorNama" class="text-danger"></div>
                </div>
                <div class="mb-3 ">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" value="{{ auth()->user()->nim}}">
                    <div id="errorNim" class="text-danger"></div>
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" value="{{ auth()->user()->email }}">
                    <div id="errorEmail" class="text-danger"></div>
                </div>
                <div class="mb-3 ">
                    <label for="noTel" class="form-label">No Telepon</label>
                    <input type="number" class="form-control" id="noTel">
                    <div id="errorTelepon" class="text-danger"></div>
                </div>
            </div>
        </section>

        <section>
            <div class="container border border-1 border-dark rounded-2" style="height: 350px;">
                <h3 id="upload" class="text-center mb-5 fw-normal mt-3">Upload Dokumen Pendukung</h3>
                <div class="dropArea"
                    style="position: relative; border: 2px dashed #ccc; padding: 20px; text-align: center; height:150px;">
                    <input class="file-input" type="file" accept=".pdf, .docx" id="fileInput" multiple
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                    <i id="logoDL" class="fs-1 mdi mdi-arrow-down-box mt-3"></i>
                    <br>
                    <label for="fileInput" id="inputFile">Click Here Or Drag To Choose Your Files</label>
                    <p id="fileList" style="font-size: 14px; display: none;"></p>
                </div>
                <p id="acc" style="font-size: 12px; color:darkgrey;">Accepted File: .pdf .docx</p>
                <form action="" id="tombol">
                    <a class="btn btn-danger mt-3" type="submit" href="/konfirmasi">Ajukan Permintaan</a>
                </form>
            </div>
        </section>

    </div>

    <script>
        let hasFiles = false;
        const dropArea = document.querySelector(".dropArea");
        const inputFile = document.querySelector("#fileInput");
        const inputFileLabel = document.querySelector("label[for='fileInput']");
        const fileList = document.querySelector("#fileList");
        const selectedFiles = []; // Menyimpan file yang telah dipilih

        dropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropArea.style.backgroundColor = "#f7f7f7";
        });

        dropArea.addEventListener("dragleave", () => {
            dropArea.style.backgroundColor = "transparent";
        });

        dropArea.addEventListener("drop", (e) => {
            e.preventDefault();
            dropArea.style.backgroundColor = "transparent";

            const files = e.dataTransfer.files;

            if (files.length > 0) {
                for (let i = 0; i < files.length; i++) {
                    selectedFiles.push(files[i]);
                }

                displaySelectedFiles();
                hasFiles = true;
            }
        });

        inputFile.addEventListener("change", () => {
            const files = inputFile.files;

            if (files.length > 0) {
                for (let i = 0; i < files.length; i++) {
                    selectedFiles.push(files[i]);
                }

                displaySelectedFiles();
                hasFiles = true;
            }
        });

        document.getElementById("tombol").addEventListener("click", (e) => {
            if (!hasFiles) {
                e.preventDefault();
                alert("Silahkan Cantumkan Dokumen!");
            }
        });

        function displaySelectedFiles() {
            inputFileLabel.style.display = "none";
            fileList.style.display = "block";
            fileList.innerHTML = ""; // Membersihkan daftar sebelum menambahkan kembali

            for (let i = 0; i < selectedFiles.length; i++) {
                const fileItem = document.createElement("div");
                fileItem.innerText = selectedFiles[i].name;
                fileItem.style.marginBottom = "5px";
                fileItem.style.fontSize = "13px";
                fileList.appendChild(fileItem);
            }

            document.getElementById("logoDL").style.display = "none";
        }

        document.getElementById("tombol").addEventListener("click", (e) => {
            // Ambil nilai dari kolom input
            const namaValue = document.getElementById("nama").value;
            const nimValue = document.getElementById("nim").value;
            const emailValue = document.getElementById("email").value;
            const teleponValue = document.getElementById("noTel").value;

            // Reset pesan kesalahan
            document.getElementById("errorNama").textContent = "";
            document.getElementById("errorNim").textContent = "";
            document.getElementById("errorEmail").textContent = "";
            document.getElementById("errorTelepon").textContent = "";


            // Lakukan validasi
            let isValid = true;

            if (namaValue.trim() === "") {
                document.getElementById("errorNama").textContent = "Bagian ini tidak boleh kosong!";
                isValid = false;
            }

            if (nimValue.trim() === "") {
                document.getElementById("errorNim").textContent = "Bagian ini tidak boleh kosong!";
                isValid = false;
            }

            if (jurusanValue.trim() === "") {
                document.getElementById("errorEmail").textContent = "Bagian ini tidak boleh kosong!";
                isValid = false;
            }

            if (jurusanValue.trim() === "") {
                document.getElementById("errorTelepon").textContent = "Bagian ini tidak boleh kosong!";
                isValid = false;
            }

            // Hentikan pengajuan permintaan jika ada yang kosong
            if (!isValid) {
                e.preventDefault();
            }
        });
    </script>
@endsection
