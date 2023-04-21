<?php include "login.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="w-3/4 relative overflow-x-auto shadow-2xl sm:rounded-lg pt-1 mt-20 text-center mx-auto">
        <div class="pb-4 ml-5 shadow-lg bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search" class="block p-2 pl-10 text-sm shadow-lg text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-900 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Task
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                </tr>
            </thead>
            <tbody class="table-body">
                <div id="nothing-found-row"></div>
                <?php
                foreach ($data as $row) {
                    $color = $row['colorCode'];
                    echo "<tr
                    
                     class='table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                
    <th id='task' scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
        {$row["task"]}
    </th>
    <td id='title' class='px-6 py-4 text-gray-900 dark:text-white'>
        {$row["title"]}
    </td>
    <td id='description' class='px-6 py-4 text-gray-900 dark:text-white' >
        {$row["description"]}
    </td>
    <td id='color' class='px-6 py-4' style='background-color: $color'>
        {$color}
    </td>
    
</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>



</body>
<script src="app.js"></script>
<script src="refresh.js"></script>

</html>