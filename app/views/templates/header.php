<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemaraya <?php if (isset($data['title'])) echo " | " . $data['title'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/flowbite.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/output.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/sweetalert2.min.css">
    <script src="<?= BASEURL ?>/js/sweetalert2.all.min.js"></script>
    <link href="<?= BASEURL; ?>/css/aos.css" rel="stylesheet">
    <script src="<?= BASEURL; ?>/js/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <style>
        .swiper-pagination span {
            background-color: #D7AB75;
        }
    </style>

</head>

<body>