<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Table</title>
  </head>
  <body>
    <div
      class="container mx-0 flex min-h-screen min-w-full items-center justify-center justify-items-center bg-gradient-to-r from-black to-gray-700"
    >
      <section
        class="h-700 container w-10/12 justify-center justify-items-center rounded-2xl bg-gradient-to-r from-gray-900 to-gray-300"
      >
        <div
          class="mb-2 flex flex-wrap items-center justify-between rounded-t-lg bg-transparent p-6"
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
          <!-- Go to Home page  -->
          <div
            class="block w-full flex-grow flex-row-reverse pl-16 lg:flex lg:w-auto lg:items-center"
          >
            <div>
              <a
                href="http://127.0.0.1:5500/Login1/Add_Edit_Delete%20copy.html"
                class="mr-3 mt-4 inline-block rounded-2xl border border-white px-4 py-2 text-sm leading-none text-white hover:border-transparent hover:bg-blue-700 lg:mt-0"
                >Go to Home page</a
              >
            </div>
          </div>
        </div>
        <!-- Title page -->
        <div
          class="mx-16 mt-10 mb-8 grid grid-cols-2 justify-start justify-items-start"
        >
          <p class="tflex ml-16 flex-wrap font-black">
            <span class="text-base font-extrabold uppercase text-gray-500"
              >Hello there welcome to</span
            >
            <br />
            <br />

            <span class="text-4xl font-extrabold text-white"
              >User Database<span class="text-4xl font-extrabold text-blue-500"
                >.</span
              ></span
            >
            <br />
            <br />

            <span class="text-base text-gray-400"
              >Your privacy is a treasure that we protect.
            </span>
          </p>
        </div>
        <!-- Divider  -->
        <div class="shadow-slate-900">
          <hr
            class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
          />
        </div>
        <!--Add user and Search User-->
        <form class="post-form" action="edit1.php" method ="post">
        <div class="grid grid-cols-3 ml-24 mb-7 mr-10">
          <div
            class="relative col-start-1 col-end-2 row-start-1 row-end-2 text-slate-100 justify-items-center"
          >
            <a
              href="create.php"
              class="block w-32 h-10 rounded-full bg-indigo-500 my-1 px-10 py-2 font-bold text-white hover:bg-indigo-700 pl-10"
            >
              <i class="cursor-pointer flex-col material-icons absolute -mx-8 mb-2">add_circle</i>
              <span class="absolute"> Add User</span>
            </a>
          </div>
          <div
            class="col-start-2 col-end-3 justify-center pt-4 pr-4 text-right"
          >
            <label
              class="mb-2 block text-xs font-bold uppercase tracking-wide text-gray-50"
              for="grid-first-name"
            >
              Search user by:
            </label>
          </div>
            <div
            class="col-start-3 col-end-4 w-full relative flex items-center text-slate-600 focus-within:text-slate-900"
          >
            <i class="material-icons absolute mt-2 mx-2 mb-2">search</i>
            <input
              class="block w-full appearance-none rounded-2xl bg-gray-900 px-4 py-3 leading-tight focus:bg-white focus:outline-none pl-10"
              id="grid-first-name"
              type="search"
              placeholder="Input User ID"
              name="id"
              class='submit'
            />
          </div>
        </form>
          
        </div>

        <!--Table Start-->
        <div class="overflow-auto h-96 mr-10">
          <table
            class="table sticky text-gray-100 border-separate text-base ml-24"
          >
            <thead
              class="relative border-spacing-y-3.5 text-gray-100 border-separate text-base ml-24"
            >
              <tr
                class="text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
              >
                <th
                  class="px-6 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  ID
                </th>
                <th
                  class="px-5 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  First Name
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Last Name
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Email
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Password
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  City
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Province
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  TIN
                </th>
                <th
                  class="px-4 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Date Created
                </th>
                <th
                  class="px-16 py-3 text-center text-slate-900 bg-slate-200 divide-x divide-slate-800"
                >
                  Actions
                </th>
              </tr>
            </thead>
            <tbody class="overflow-y-auto">

            <!--Connecting to the database-->
            <?php
            $servername ="localhost";
            $unsername ="root";
            $password ="";
            $database = "crud";

            //Creanting connection

            $connection = new mysqli($servername, $unsername, $password, $database);

            //Check connection
            if ($connection->connect_error) {
              die("Connection faild: " . $connection->connect_error);
            }

            //Read all row from the database table
            $sql = "SELECT * FROM clients";
            $result = $connection->query($sql);

            if (!$result) {
              die("Invalid query: " . $connection->error);
            }

            //Read data of each row
            while($row = $result->fetch_assoc()){
              echo "
              <tr class='text-left bg-slate-600 divide-x divide-slate-800'>
              <td class='px-4 py-3'>$row[id]</td>
              <td class='px-4 py-3'>$row[ifirst_name]</td>
              <td class='px-4 py-3'>$row[ilast_name]</td>
              <td class='px-4 py-3'>$row[iEmail]</td>
              <td class='px-4 py-3'>$row[iPassword]</td>
              <td class='px-4 py-3'>$row[iCity]</td>
              <td class='px-4 py-3'>$row[iProvince]</td>
              <td class='px-4 py-3'>$row[iZip]</td>
              <td class='px-4 py-3'>$row[Created_at]</td>
              <td>
              
              <a
                    href='/crud/edit.php?id=$row[id]'
                    class='submit'
                  >
                    <i class='flex-col material-icons-outlined text-base text-gray-900 hover:text-gray-100 pl-6 py-6'
                      >visibility</i
                    >
                  </a>

              <a
                    href='edit.php?id=$row[id]'
                    class='submit'
                  >
                    <i class='flex-col material-icons-outlined text-base text-gray-900 hover:text-gray-100 px-6 py-6'
                      >edit</i
                    >
                  </a>

              <a
                    href='deleteData.php?id=$row[id]'
                    class='submit'
                  >
                    <i class='flex-col material-icons-round text-base text-gray-900 hover:text-gray-100 pr-2 py-6'
                      >delete_outline</i
                    >
                  </a>
              </td>
              </tr>
              ";
            }
            ?>

            </tbody>
          </table>
        </div>
        <!-- This is an example component -->
        <div class="w-auto mx-auto">
          <footer class="py-4 rounded-b-lg">
            <hr
              class="my-4 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-4"
            />
            <span
              class="block text-sm text-gray-100 sm:text-center dark:text-gray-100"
              >© 2022
              <a
                href="https://flowbite.com"
                target="_blank"
                class="hover:underline"
                >Frizt Jerome Q. Tobes</a
              >. All Rights Reserved.
            </span>
          </footer>
        </div>
      </section>
    </div>
    <!-- Icon ource  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <footer></footer>
  </body>
</html>
