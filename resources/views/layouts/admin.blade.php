<?php

// use App\Controllers\Admin\;
// $currentRoute = current_url(true)->getUri;
?>
<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- MDI (Icon) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">


    <style>
        #sidebar {
            position: sticky;
        }

        .nav-pills .nav-link.active {
            background-color: #d32b31;
            color: white;
        }
    </style>

</head>

<body id="sidebar" class="d-flex sticky-left" style="background-color: rgb(0, 0, 0, 0.15); height: 100vh;">
    <div class="d-flex flex-column flex-shrink-0 bg-light h-100" style="width: 4.5rem; height: 100vh;">
        <a href="" class="d-block p-0 link-dark text-decoration-none text-center   " title
            data-bs-toggle="tooltip" data-bs-placement="right" data-bs-orginial-title="Icon-only">
            <img src="/Assets/Logo_Rentit2.png" alt="logo" width="70px">
            <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-auto shadow-lg">
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link py-3 border-bottom" aria-current="page" title
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-orginial-title="Home">
                    <span class="mdi mdi-home fs-5 text-black" role="img" aria-label="Home"></span>
                </a>
            </li>
            <li>
                <a href="/admin/approved" class="nav-link py-3 border-bottom" title data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-orginial-title="Approved">
                    <span class="mdi mdi-account-check fs-5 text-black" role="img" aria-label="Approved"></span>
                </a>
            </li>
            <li>
                <a href="/admin/reservasi" class="nav-link py-3 border-bottom >" title data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-orginial-title="Submission">
                    <span class="mdi mdi-file-account fs-5 text-black" role="img" aria-label="Submission"></span>
                </a>
            </li>
            <li>
                <a href="/admin/declined" class="nav-link py-3 border-bottom" title data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-orginial-title="Declined">
                    <span class="mdi mdi-account-remove fs-5 text-black" role="img" aria-label="Declined"></span>
                </a>
            </li>
            <li>
                <a href="/admin/cancellation" class="nav-link py-3 border-bottom" title data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-orginial-title="Cancellation">
                    <span class="mdi mdi-account-cancel fs-5 text-black" role="img"
                        aria-label="Cancellation"></span>
                </a>
            </li>
            <li>
                <a href="/admin/kerusakan" class="nav-link py-3 border-bottom" title data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-orginial-title="Report">
                    <span class="mdi mdi-account-alert fs-5 text-black" role="img" aria-label="Report"></span>
                </a>
            </li>
        </ul>
    </div>

</body>
@yield('content')

<script></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</html>
