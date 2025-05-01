<?php
include '../connections/conn.php';
session_start();    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<!-- Navbar -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
 

  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../assets/logo.png" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PalCare Admin</span>
  </a>
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img src="../assets/<?php echo $_SESSION['username']; ?>.png" width="40" class="rounded-full"/>

      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
          <span class="block text-sm text-gray-900 dark:text-white"><?php echo $_SESSION['username'] ?></span>
        </div>    
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  </div>
</nav>

<!-- main -->


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   ID
                </th>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                   Address
                </th>
                <th scope="col" class="px-6 py-3">
                   Blood group
                </th>
                <th scope="col" class="px-6 py-3">
                   Phone
                </th>
                <th scope="" class="px-6 py-3">
                   Status
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pending = "pending";
            $query = "SELECT * FROM doner_details WHERE status='$pending'"; // Adjust the query to fetch pending users
            $result = mysqli_query($conn, $query);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $address = $row['address'];
                    $blood_group = $row['blood_group'];
                    $phone = $row['phone'];
                    echo '
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6">
                           '.$id.'
                        </td>
                        <td class="px-6">
                           '.$name.'
                        </td>
                        <td class="px-6 py-4">
                            '.$address.'
                        </td>
                        <td class="px-6 py-4">
                            '.$blood_group.'
                        </td>
                        <td class="px-6 py-4">
                            '.$phone.'
                        </td>
                        <td class="px-6 py-4">
                            <form method="POST">
                                <button type="submit" name="submit" class="px-3 py-2 bg-blue-700 rounded-xl text-white font-semibold">Approve</button>
                            </form>
                    </tr> 
                    ';
                }
            } else {
                echo "<tr><td colspan='5' class='text-center p-4'>No pending users found.</td></tr>";
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $sql = "UPDATE doner_details SET status='approved' WHERE id='$id'";
                mysqli_query($conn,$sql);
                echo "<script>window.location.href = 'adminpalcare.php';</script>";
            }
            ?>
        </tbody>
    </table>
</div>
    
    
</body>
</html>