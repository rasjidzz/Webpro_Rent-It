@extends('layouts.main')
@section('container')
<section>
    <div class="container">
    <div id="PilihFasilitas" style="border: 2px white; padding: 20px; background-color: white; border-radius: 10px; margin-bottom: 50px;">
        <div class="" style="text-align: center; color: white;">
            <h1 style="font-weight: bold; color: black;">LAPORAN KERUSAKAN</h1>
            <div class="" style="text-align: left; color: white;">
                <h5 style="color: black;">Pesanan Yang Ingin Dilaporkan</h5>
            </div>
        </div>

        <select class="form-select margin-bottom: 50px" onchange="fetchData()" id="selectFasilitas">
            <option>Pilih Fasilitas</option>
            @foreach ($pemesanans as $pemesanan)
                <option value="{{ $pemesanan->facility->id }}">{{ $pemesanan->facility->name }}</option>
            @endforeach
        </select>
    </div>

        <div class="row">
            <div class="col">
                <div class="auto" style="margin-bottom: 10%;">
                    <div class="d-flex" style="background-color: #ECE8E8;">
                        <img src="Assets/GKU.jpg" heigth="" width="200px" class="w-20" alt="GKU" id="foto_fasilitas" />
                        <div class="my-auto ms-2">
                            <h2 class="fs-2 fw-3" style="margin-bottom: 5%;" id="nama_fasilitas">Nama Fasilitas</h2>
                            <h3 style="color: #9F1521; font-weight: 400; font-size: 25px;" id="harga_fasilitas">Harga Fasilitas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container border border-1 border-dark rounded-2" style="height: 350px;">
        <h3 id="upload" class="text-center mb-5 fw-normal">Upload Dokumen Pendukung</h3>
        <div class="dropArea" style="position: relative; border: 2px dashed #ccc; padding: 20px; text-align: center; height:150px;">
            <input class="file-input" type="file" accept=".pdf, .docx" id="fileInput" multiple style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
            <i id="logoDL" class="fs-1 mdi mdi-arrow-down-box mt-3"></i>
            <br>
            <label for="fileInput" id="inputFile">Click Here Or Drag To Choose Your Files</label>
            <p id="fileList" style="font-size: 14px; display: none;"></p> <!-- Moved the file list inside the dropArea -->
        </div>
        <p id="acc" style="font-size: 12px; color:darkgrey;">Accepted File: .pdf .docx</p>
        <form action="" id="tombol">
            <a class="btn btn-danger mt-3" type="submit" href="/pembatalanpage2" >Ajukan Laporan</a>
        </form>
    </div>
</section>

</div>

<script>
    function fetchData() {
        console.log("masuk");
        // Mendapatkan elemen dropdown
        var dropdown = document.getElementById("selectFasilitas");

        // Mendapatkan nilai terpilih dari dropdown
        var selectedFacilityId = dropdown.value;

        $.ajax({
            url: '/getfacilityinfo',
            type: 'POST',
            data: {
                facility_id: selectedFacilityId
            },
            success: function (response) {
                console.log(response);
                document.getElementById("foto_fasilitas").src = response.image;
                document.getElementById("nama_fasilitas").innerText = response.name;
                document.getElementById("harga_fasilitas").innerText = response.price;
            },
            error: function (error) {
                console.error('Complete error:', error);
            }
        });
    }


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
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();
        }
    });

    inputFile.addEventListener("change", () => {
        const files = inputFile.files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();
        }
        console.log(SelectedFiles);
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
</script>

<style>
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

    section {
        margin-bottom: 50PX;
    }
</style>

@endsection
