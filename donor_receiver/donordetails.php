<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Be a donor</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex flex-col items-center justify-start py-10">

<h1 class="text-4xl text-center font-bold mb-8">Join us as a Donor</h1>

<form class="max-w-md w-full" method="POST" action="donordetails.php">
  
  <div class="relative z-0 w-full mb-5 group">
    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Full Name</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="text" name="address" id="address" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Address</label>
  </div>

  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-5 group">
      <input type="number" name="age" id="age" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="age" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Age</label>
    </div>
    <div class="relative z-0 w-full mb-5 group">
      <select name="gender" id="gender" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
        <option value="" disabled selected hidden></option>
        <option value="Male" class="text-black">Male</option>
        <option value="Female" class="text-black">Female</option>
        <option value="Other" class="text-black">Other</option>
      </select>
      <label for="gender" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Gender</label>
    </div>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <select name="blood_group" id="blood_group" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
      <option value="" disabled selected hidden></option>
      <option value="A+" class="text-black">A+</option>
      <option value="A-" class="text-black">A-</option>
      <option value="B+" class="text-black">B+</option>
      <option value="B-" class="text-black">B-</option>
      <option value="O+" class="text-black">O+</option>
      <option value="O-" class="text-black">O-</option>
      <option value="AB+" class="text-black">AB+</option>
      <option value="AB-" class="text-black">AB-</option>
    </select>
    <label for="blood_group" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Blood Group</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
    <input type="tel" name="phone" id="phone"  class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-500 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
    <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-500">Phone Number (123-456-7890)</label>
  </div>

  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
</form>
<button  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" id="donback">Back</button>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "palcare";

    $conn = mysqli_connect($server, $username, $password , $db);
    if(!$conn){
        die("Conncetion failed". mysqli_connect_error());
    }

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];

    $sql = "INSERT INTO doner_details (name, address, age, gender, phone, blood_group) VALUES ('$name', '$address', '$age', '$gender', '$phone', '$blood_group')";
    mysqli_query($conn,$sql);

    mysqli_close($conn);
  }
?>
<script>
    const backButton = document.getElementById('donback');

    if (backButton) {
        backButton.addEventListener('click', function() {
            window.location.href = "../index.html";
        });
    }
</script>
</body>
</html>
