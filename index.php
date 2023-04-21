<?php include "login.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="w-3/4 relative overflow-x-auto shadow-2xl sm:rounded-lg pt-1 mt-20 text-center mx-auto">

        <?php include "search.php" ?>
        <?php include "dataTable.php" ?>
    </div>

    <!-- Modal toggle -->
    <?php include "modal.php" ?>




</body>
<script src="app.js"></script>
<script src="refresh.js"></script>
<script src="modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>



</html>