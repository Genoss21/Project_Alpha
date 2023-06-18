<?php
//Create connection 
include 'config.php';

//Add User 
if(isset($_POST['submit'])){
  if($_POST['ifirst_name']!='' && $_POST['ilast_name']!='' && $_POST['iEmail']!='' && $_POST['iPassword']!= '' && $_POST['iCity']!= '' && $_POST['iProvince']!= '' && $_POST['iZip']!= ''){
  $ifirst_name = $_POST['ifirst_name'];
  $ilast_name = $_POST['ilast_name'];
  $iEmail = $_POST['iEmail'];
  $iPassword = $_POST['iPassword'];
  $iCity = $_POST['iCity'];
  $iProvince = $_POST['iProvince'];
  $iZip = $_POST['iZip'];
  
  $promtMessage = '<span class="text-green-500">Account is saved to database</span>';

  $sql = "INSERT INTO clients(ifirst_name,ilast_name,iEmail,iPassword,iCity,iProvince,iZip) VALUES('{$ifirst_name}','{$ilast_name}','{$iEmail}','{$iPassword}','{$iCity}','{$iProvince}','{$iZip}')";
  $result = mysqli_query($conn,$sql) or die("query unsuccessful");

  }else{
    $promtMessage = 'All information is required';
  }
}else{
  $ifirst_name = '';
  $ilast_name = '';
  $iEmail = '';
  $iPassword = '';
  $iCity = '';
  $iProvince = '';
  $iZip = '';
  $promtMessage = '<span class="text-red-500">All information is required</span>';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css"></script>
    <title>Create</title>
  </head>
  <body>
    <div
      class="container mx-0 flex min-h-screen min-w-full items-center justify-center justify-items-center bg-gradient-to-r from-black to-gray-700"
    >
      <section
        class="md w-1000 h-700 container justify-center justify-items-center rounded-2xl bg-gradient-to-r from-gray-900 to-gray-300"
      >
        <div
          class="mb-11 flex flex-wrap items-center justify-between rounded-t-lg bg-transparent p-6"
        >
          <!-- Navbar -->
          <div class="mr-12 flex flex-shrink-0 items-center text-white">
            <svg
              class="mr-2 h-8 w-8 fill-current"
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

          <div
            class="block w-full flex-grow flex-row-reverse pl-16 lg:flex lg:w-auto lg:items-center"
          >
            <div>
              <a
                href="http://127.0.0.1:5500/Login1/Add_Edit_Delete%20copy.html"
                class="mr-3 mt-4 inline-block rounded-2xl border border-white px-4 py-2 text-sm leading-none text-white hover:border-transparent hover:bg-blue-700 lg:mt-0"
                >Update User</a
              >
            </div>
          </div>
        </div>
        <!--Sign Title-->
        <div
          class="mx-16 mt-10 mb-8 grid grid-cols-2 justify-start justify-items-start"
        >
          <p class="tflex ml-16 flex-wrap font-black">
            <span class="text-base font-extrabold uppercase text-gray-500"
              >Start for free</span
            >
            <br />
            <?php 
            if ($conn->connect_error) {
              die("Connection faild: " . $conn->connect_error);
            }

            ?>
            <br />
            <span class="text-4xl font-extrabold text-white"
              >Create new account<span
                class="text-4xl font-extrabold text-blue-600"
                >.</span
              ></span
            >
            <br />
            <br />
            <span class="text-base text-gray-500"
              >Already have one account?
              <span class="text-base text-blue-500">
                <a href="http://192.168.0.104:5501/login1.html">Log in</a></span
              ></span
            >
          </p>
        </div>

        <!-- First Name Last Name -->
        <div class="grid grid-cols-2 justify-start justify-items-center">
          <form method="post" action="create.php">
            <div class="flex flex-wrap mx-32">
              <div class="mb-6 w-full md:mb-0 md:w-1/2">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-first-name"
                >
                  First Name
                </label>
                <input
                  class="form-control block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight text-gray-700 focus:bg-white focus:outline-none"
                  type="text"
                  name="ifirst_name"
                  placeholder="Fritz Jerome"
                />
              </div>
              <div class="w-full pl-3 md:w-1/2">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                >
                  Last name
                </label>
                <input
                  class="form-control block w-full appearance-none rounded-2xl bg-gray-900 pl-4 py-3 leading-tight text-gray-700 focus:bg-white focus:outline-none"
                  id="text"
                  name="ilast_name"
                  placeholder="Tobes"
                />
              </div>
            </div>
            <!--Username-->
            <div class="mb-6 flex flex-wrap mx-32">
              <div class="mt-5 w-full">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-first-name"
                >
                  Username
                </label>
                <input
                  class="form-control -p-3 block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                  type="text"
                  name="iEmail"
                  placeholder="email@gmail.com"
                />
              </div>
            </div>
            <!-- Password -->
            <div class="mb-6 flex flex-wrap mx-32">
              <div class="w-full">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-first-name"
                >
                  Password
                </label>
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-700"
                  for="grid-password"
                >
                </label>
                <input
                  class="form-control mb-3 block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                  type="password"
                  name="iPassword"
                  placeholder="******************"
                />
                <p class="text-xs italic text-gray-50 text-opacity-75">
                  <?php echo $promtMessage?>
                </p>
              </div>
            </div>
            <!-- City -->
            <div class="mb-2 flex flex-wrap mx-32">
              <div class="mb-6 w-full md:mb-0 md:w-1/3">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-city"
                >
                  City
                </label>
                <input
                  class="form-control block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                  id="grid-city"
                  name="iCity"
                  type="text"
                  placeholder="Manila"
                />
              </div>
              <div class="mb-6 w-full px-3 md:mb-0 md:w-1/3">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-Province"
                >
                  <!-- Province -->
                  Province
                </label>
                <div class="relative">
                  <select
                    class="form-control block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 pr-8 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                    id="grid-state"
                    name="iProvince"
                    type="text"
                  >
                    <option>
                      National Capital Region (NCR)
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
                      class="h-4 w-4 fill-current"
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
              <div class="mb-6 w-full md:mb-0 md:w-1/3">
                <label
                  class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
                  for="grid-zip"
                >
                  <!-- Zip -->
                  Zip
                </label>
                <input
                  class="form-control mb-5 block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight text-gray-700 focus:border-gray-500 focus:bg-white focus:outline-none"
                  id="grid-zip"
                  name="iZip"
                  type="text"
                  placeholder="1000"
                />
              </div>
            </div>

            <!-- Button -->
            <div class="container mb-24 mt-5 grid grid-cols-2">
              <button
                type="submit"
                name="submit"
                class="btn btn-primary col-start-1 col-end-2 ml-32 mr-4 rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
              >
                Create account
              </button>
              <div
                class="relative col-start-2 col-end-3 row-start-1 row-end-2 text-slate-100 justify-items-center"
              >
                <a
                  class="block w-65 h-10 rounded-full col-start-2 col-end-3 mr-32 ml-4 px-20 py-2 bg-slate-500 hover:bg-slate-700 font-bold text-white"
                  href="Table.php"
                  role="button"
                  ><span class="absolute pl-2">Cancel</span>
                </a>
              </div>
            </div>
          </form>
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
                class="mr-4 text-sm text-gray-100 hover:underline md:mr-6 dark:text-gray-100 "
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
    </div>
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
