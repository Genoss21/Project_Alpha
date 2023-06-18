<?php
//Create connection 
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>
  </head>
  <body>
    <div
      class="container flex justify-center justify-items-center items-center min-w-full min-h-screen mx-0 bg-gradient-to-r from-black to-gray-700"
    >
      <section
        class="container md max-w-screen-2xl h-700 justify-center justify-items-center rounded-2xl bg-gradient-to-r from-gray-900 to-gray-300"
      >
        <div
          class="flex items-center justify-between rounded-t-lg flex-wrap bg-transparent p-6 mb-11"
        >
          <!-- Navbar -->
          <div class="flex items-center flex-shrink-0 text-white mr-12">
            <svg
              class="fill-current h-8 w-8 mr-2"
              width="54"
              height="54"
              viewBox="0 0 54 54"
              xmlns="http://www.w3.org/2000/svg"
            ></svg>
            <span class="text-4xl text-blue-400 -translate-x-2 translate-y-1"
              ><ion-icon name="ellipse"></ion-icon
            ></span>
            <span class="font-semibold text-xl tracking-tight"
              >Anywhere app<span class="text-blue-400">.</span></span
            >
          </div>
          <div class="block lg:hidden">
            <button
              class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white"
            >
              <svg
                class="fill-current h-3 w-3"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
          <div
            class="w-full block flex-grow lg:flex lg:items-center lg:w-auto pl-16 flex-row-reverse"
          >
            <div>
              <a
                href="http://127.0.0.1:5500/login1.html"
                class="inline-block text-sm px-4 py-2 leading-none border rounded-2xl text-white border-white hover:border-transparent hover:text-white hover:bg-blue-700 mt-4 mr-3 lg:mt-0"
                >Back to Login page</a
              >
            </div>
          </div>
        </div>

        <!--Update Title-->
        <div
          class="grid justify-items-start justify-start grid-cols-2 m-16 mb-8"
        >
          <p class="font-black tflex flex-wrap ml-16">
            <span class="text-gray-500 text-base font-extrabold uppercase"
              >Welcome to</span
            >
            <br />
            <?php 
            if ($conn->connect_error) {
              die("Connection faild: " . $conn->connect_error);
            }
            ?>
            <br />
            <span class="text-white text-4xl font-extrabold"
              >Update user information<span
                class="text-blue-600 text-4xl font-extrabold"
                >.</span
              ></span
            >
          </p>
        </div>
        <?php
        $sd_id = $_GET['id'];
            $sql = "SELECT * FROM clients WHERE id = {$sd_id}";
                $result = mysqli_query($conn,$sql) or die("query unsuccessful");

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
        ?>      

        <!-- First Name Last Name -->
        <div class="grid justify-items-center justify-start grid-cols-2">
          <form class="post-form" action="updateData.php" method ="post"> 
            <div class="flex flex-wrap mx-32">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0"> 
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-city"
                  type="text"
                >
                  User ID
                </label>
                <input
                  class="appearance-none block w-full bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none mb-6"
                  id="grid-city"
                  type="text"
                  name="id"
                  value="<?php echo $row['id'];?>"
                  readonly
                />
              </div>
            </div>
            <div class="flex flex-wrap mx-32">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  First Name
                </label>
                <input
                  class="appearance-none block w-full bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500 mb-2"
                  id="grid-first-name"
                  type="text"
                  name="ifirst_name"
                  value="<?php echo $row['ifirst_name']?>"
                />
                <p class="text-red-500 text-xs italic">
                  Please fill out all fields*
                </p>
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-last-name"
                >
                  Last name
                </label>
                <input
                  class="appearance-none block w-full bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500"
                  id="text"
                  name="ilast_name"
                  value="<?php echo $row['ilast_name']?>"
                />
              </div>
            </div>
            <!--Username-->
            <div class="mb-6 flex flex-wrap mx-32">
              <div class="w-full px-3">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-first-name"
                >
                  Username
                </label>
                <input
                  class="form-control block w-full appearance-none bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500"
                  type="text"
                  name="iEmail"
                  value="<?php echo $row['iEmail']?>"
                />
              </div>
            </div>
            <!-- Password -->
            <div class="flex flex-wrap mx-32">
              <div class="w-full px-3">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-first-name"
                >
                  Password
                </label>
                <label
                  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                  for="grid-password"
                >
                </label>
                <input
                  class="appearance-none block w-full  bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500 mb-6"
                  id="grid-password"
                  type="password"
                  name="iPassword"
                  placeholder="******************"
                  value="<?php echo $row['iPassword']?>"
                />
              </div>
            </div>
            <!-- City -->
            <div class="flex flex-wrap mx-32">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-city"
                >
                  City
                </label>
                <input
                  class="appearance-none block w-full bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500"
                  id="grid-city"
                  type="text"
                  name="iCity"
                  value="<?php echo $row['iCity']?>"
                />
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-state"
                >
                  Province
                </label>
                <div class="relative">
                  <select
                    class="block appearance-none w-full bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500"
                    id="grid-state"
                    name="iProvince"
                    type="text"
                    value="<?php echo $row['iProvince']?>"
                  >
                    <option>
                      National Capital Region (NCR) - Metro Manila
                    </option>
                    <option>Ilocos Region (Region I)</option>
                    <option>Cagayan Valley (Region II)</option>
                    <option>Central Luzon (Region III)</option>
                    <option>CALABARZON (Region IV-A)</option>
                    <option>MIMAROPA (Region IV-B)</option>
                    <option>Bicol Region (Region V)</option>
                    <option>Western Visayas (Region VI)</option>
                    <option>Central Visayas (Region VII)</option>
                    <option>Eastern Visayas (Region VIII)</option>
                    <option>Zamboanga Peninsula (Region IX)</option>
                    <option>Northern Mindanao (Region X)</option>
                    <option>Davao Region (Region XI)</option>
                    <option>SOCCSKSARGEN (Region XII)</option>
                    <option>Caraga (Region XIII)</option>
                    <option>
                      Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)
                    </option>
                    <option>Cordillera Administrative Region (CAR)</option>
                  </select>
                  <div
                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                  >
                    <svg
                      class="fill-current h-4 w-4"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                    >
                      <path
                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-50 text-xs font-bold mb-2"
                  for="grid-zip"
                >
                  Zip
                </label>
                <input
                  class="appearance-none block w-full  bg-gray-900 text-gray-50 rounded-2xl py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:text-slate-900 focus:border-gray-500 mb-9"
                  id="grid-zip"
                  type="text"
                  name="iZip"
                  value="<?php echo $row['iZip']?>"
                />
              </div>
            </div>
            <!-- Button -->
            <div class="flex flex-wrap flex-row mx-32 mb-28">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <button
                type="submit" value="update"
                class="bg-green-500 hover:bg-green-700 text-white font-bold rounded-full py-2 px-11 " 
              >
                <span class="opacity-0">T</span>Save<span class="opacity-0">T</span>
              </button>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <button
                class="bg-slate-500 hover:bg-blue-700 text-white font-bold rounded-full py-2 px-11"
              >
                <a
                  href="Table.php"
                  >Cancel</a
                >
              </button>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <form class="post-form" action="deleteData.php" method ="post">
              <button
                class="submit bg-red-500 hover:bg-red-700 text-white font-bold rounded-full py-2 px-11"> <a href="deleteData.php?id=<?php echo $row['id']; ?>">
                Delete
                </a>
              </button>
              </form>
              </div>
            </div>
          </form>
          <?php }}?>
        </div>
      </section>
    </div>
    <!--Footer-->
    <div class="max-w-mx-auto">
      <footer class="p-4 bg-white shadow md:px-6 md:py-8 dark:bg-gray-800">
        <div class="sm:flex sm:items-center sm:justify-between">
          <div class="mr-12 flex flex-shrink-0 items-center text-white">
            <svg
              class="mr-2 h-2 w-2 fill-current"
              width="54"
              height="54"
              viewBox="0 0 54 54"
              xmlns="http://www.w3.org/2000/svg"
            ></svg>
            <span class="-translate-x-2 translate-y-1 text-4xl text-blue-400"
              ><ion-icon name="ellipse"></ion-icon
            ></span>
            <span class="text-xl font-semibold tracking-tight"
              >Project Alpha<span class="text-blue-400">.</span></span
            >
          </div>
          <ul class="flex flex-wrap items-center mb-6 sm:mb-0">
            <li>
              <a
                href="#"
                class="mr-4 text-sm text-gray-100 hover:underline md:mr-6 dark:text-gray-100"
                >About</a
              >
            </li>
            <li>
              <a
                href="#"
                class="mr-4 text-sm text-gray-100 hover:underline md:mr-6 dark:text-gray-100"
                >Privacy Policy</a
              >
            </li>
            <li>
              <a
                href="#"
                class="mr-4 text-sm text-gray-100 hover:underline md:mr-6 dark:text-gray-100"
                >Licensing</a
              >
            </li>
            <li>
              <a
                href="#"
                class="text-sm text-gray-100 hover:underline dark:text-gray-100"
                >Contact</a
              >
            </li>
          </ul>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <span
          class="block text-sm text-gray-100 sm:text-center dark:text-gray-100"
          >© 2022
          <a href="https://flowbite.com" target="_blank" class="hover:underline"
            >Fritz Jerome Q. Tobes</a
          >. All Rights Reserved.
        </span>
      </footer>          
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
