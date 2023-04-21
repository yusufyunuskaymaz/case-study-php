

setInterval(() => {
  refreshTableInfos()
},  3600000);


const refreshTableInfos = () => {
  console.log("çalllıştı");

  const userInfo = { "username": "365", "password": "1" }
  const loginUrl = 'https://sore-ruby-chiton-belt.cyclic.app/https://api.baubuddy.de/index.php/login';
  const loginData = JSON.stringify(userInfo);
  const loginHeaders = {
    'Authorization': 'Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz',
    'Content-Type': 'application/json'
  };
  const loginOptions = {
    method: 'POST',
    headers: loginHeaders,
    data: loginData
  };

  axios(loginUrl, loginOptions)
    .then(response => {
      const accessToken = response.data.oauth.access_token;
      const dataUrl = 'https://sore-ruby-chiton-belt.cyclic.app/https://api.baubuddy.de/dev/index.php/v1/tasks/select';
      const dataHeaders = {
        'Authorization': `Bearer ${accessToken}`,
        'Content-Type': 'application/json'
      };
      const dataOptions = {
        method: 'GET',
        headers: dataHeaders
      };
      return axios(dataUrl, dataOptions);
    })
    .then(response => {
      const data = response.data;
      console.log(data, "heree");
      const tableBody = document.querySelector(".table-body")
      tableBody.innerHTML = ""
      data.forEach((item) => {
        console.log(item)
        let color = item.colorCode
        tableBody.innerHTML += `
        <tr class='table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                    
        <th id='task' scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
            ${item.task}
        </th>
        <td id='title' class='px-6 py-4 text-gray-900 dark:text-white'>
        ${item.title}
        </td>
        <td id='description' class='px-6 py-4 text-gray-900 dark:text-white' >
        ${item.description}
        </td>
        <td id='color' class='px-6 py-4' style='background-color: ${color}'>
        ${item.colorCode}
        </td>
        
        </tr>
            `
      })
    })
    .catch(error => console.error(error));

  console.log("çalışıyor");



}




