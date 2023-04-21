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
            <th scope="col" class="px-6 py-3 ">
                Color
            </th>
        </tr>
    </thead>
    <tbody class="table-body text-center">
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
    <td id='color' class='px-6 py-4 text-white' style='background-color: $color'>
        {$color}
    </td>
    
</tr>";
        }
        ?>

    </tbody>
</table>