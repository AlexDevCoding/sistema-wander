<?php

  include('../../Backend/auth/autenticación.php')

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../css/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/webfont/tabler-icons-outline.css">
  <link rel="icon" href="../../assets/Img/file.png">
  <title>Bitacora de Usuarios</title>
</head>

<body class="bg-white">
 <nav
    class="fixed top-0 z-50 w-full bg-white border-b border-gray-200" id="barra-de-navegacion"
  >
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button
            data-drawer-target="logo-sidebar"
            data-drawer-toggle="logo-sidebar"
            aria-controls="logo-sidebar"
            type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          >
            <span class="sr-only">Open sidebar</span>
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                clip-rule="evenodd"
                fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
              ></path>
            </svg>
          </button>
          <a href=" " class="flex ms-2 md:me-24">
            <img
              src="../../assets/Img/file (2).jpg"
              class="h-[55px] me-3"
              alt="INDESSA"
            />
            <span
              class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-gray-800"
              ></span
            >
          </a>
        </div>
        
      </div>
    </div>
  </nav>

  <aside
  id="logo-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
  aria-label="Sidebar"
>
  <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-100 leading-8">
    
    <ul class="space-y-2 font-medium">
      <li>
        <a
          href="tablero-admin.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
        <i class="ti ti-layout-dashboard" style="font-size: 25px;"></i>
          <span class="ms-3">Tablero</span>
        </a>
      </li>
      <li>
        <a
          href="#"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100" 
          aria-controls="dropdown-example" data-collapse-toggle="dropdown-example"
        >
        <i class="ti ti-users" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Empleados</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
         </svg>
        
         
        </a>
        <ul id="dropdown-example" class="hidden py-2 space-y-2">
         
          <li>
             <a href="lista-empleados.php" class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Lista de Empleados</a>
          </li>
          
          <li>
            <a href="cesta-tickets.php" class="flex items-center w-full p-2 text-gray-700 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Cesta de tickets</a>
          </li>


    </ul>
      </li>
      

   
 

      <li>
        <a
          href="reportes.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
        <i class="ti ti-report-search" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Reportes</span>
        </a>
      </li>

      <li>
        <a
          href="bitacora-usuarios.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
      
        <i class="ti ti-users-group" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Bitacora de usuarios</span>
        </a>
      </li>

      <li>
        <a
          href="bases-datos.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
          <i class="ti ti-database" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Base De Datos</span>
        </a>
      </li>


      <li>
        <a
          href="manual-usuario.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
        <i class="ti ti-help-octagon" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Manual de usuario</span>
        </a>
      </li>



      <li>
        <a
          href="../../Backend/logout.php"
          class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100"
        >
        <i class="ti ti-logout" style="font-size: 25px;"></i>
          <span class="flex-1 ms-3 whitespace-nowrap">Cerrar Sección</span>
        </a>
      </li>
      
    </ul>
  </div>
</aside>



  <section class="p-4 sm:ml-64 mt-10" id="section">
    <div class="flex relative   rounded  h-10 mt-[15px] ">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="#"
            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#1e54ff] dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Tablero
          </a>
        </li>

        <li aria-current="page">
          <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="cursor-default ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Bitacora Usuarios</span>
          </div>
        </li>
      </ol>
    </div>

    <div class="encabezado flex justify-between items-center w-[90%] text-gray-800">

      <h1 class=" text-[28px]">Bitacora de Usuarios</h1>

      <button class="bg-white text-gray-800 
            border border-gray-300 
            font-medium overflow-hidden relative 
            px-4 py-2 rounded-md hover:bg-gray-100
            active:opacity-75 outline-none duration-300 group" id="defaultModalButton" data-modal-target="defaultModal"
        data-modal-toggle="defaultModal">
        <span class="bg-slate-400 
              shadow-slate-400 absolute -top-[150%] 
              left-0 inline-flex w-80 h-[5px] rounded-md 
              opacity-50 group-hover:top-[150%] duration-500 shadow-[0_0_10px_10px_rgba(0,0,0,0.3)]"></span>
        Añadir Usuario
      </button>
      <!-- Main modal -->
      <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
              <h3 class="text-lg font-semibold text-gray-800">
                Nuevo empleado
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Cerrar Modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <form action="../../Backend/registrar.php" method="post" id="formulario-registro">
              <div class="grid gap-4 mb-4">
                <div>
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nombre</label>
                  <input type="text" name="nombre" id="name" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Ingresar nombre" required>
                </div>

                <div>
                  <label for="apellido" class="block mb-2 text-sm font-medium text-gray-700">Apellido</label>
                  <input type="text" name="apellido" id="apellido" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Ingresar Apellido" required>
                </div>

                <div>
                  <label for="usuario" class="block mb-2 text-sm font-medium text-gray-700">Usuario</label>
                  <input type="text" name="usuario" id="usuario" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Ingresar usuario" required>
                </div>

                <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Correo</label>
                  <input type="email" name="correo" id="correo" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Ingresar correo" required>
                </div>

                <div>
                  <label for="contraseña" class="block mb-2 text-sm font-medium text-gray-700">Contraseña</label>
                  <input type="password" name="contraseña" id="contraseña" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Ingresar contraseña" required>
                </div>

                <div>
                  <label for="contraseña" class="block mb-2 text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                  <input type="password" name="repetir_Contraseña" id="repetir_Contraseña" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                    placeholder="Confirmar contraseña" required>
                </div>

                <div>
                  <label for="tipo_usuario" class="block mb-2 text-sm font-medium text-gray-700">Tipo de Usuario</label>
                  <select name="tipo_usuario" id="tipos"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option disabled selected>Seleccione tipo de usuario</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Empleado">Empleado</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                Añadir Solicitud
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="modalExito" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div class="bg-white p-4 rounded-lg shadow-lg flex items-center space-x-4 w-96">
        <div class="w-12 h-12 flex items-center justify-center bg-emerald-500 rounded-full">
          <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <div class="flex-1">
          <h3 class="text-lg font-semibold text-emerald-600">Éxito</h3>
          <p class="text-gray-600">¡Su cuenta ha sido registrada!</p>
        </div>
        <button onclick="cerrarModal('modalExito')" class="text-gray-500">X</button>
      </div>
    </div>
    
 



    <div class="p-[30px]  border-none  rounded-lg  mt-8 w-[90%] bg-white">




      <table id="pagination-table" class="">

        <thead>

          <tr>
            <th>Id</th>
            <th>Rol</th>
            <th>Fecha De Registro</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nombre de Usuario</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="empleados-table" class="">

          <?php include '../../Backend/tablas/tabla-usuarios.php'
            ?>


        </tbody>
      </table>








    </div>

    <div id="añadir-usuario" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
      <div class="relative p-4 bg-white rounded-lg shadow-lg w-full max-w-md mx-auto">
        <button type="button" class="absolute right-2.5 top-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex justify-center items-center">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Cerrar modal</span>
        </button>
        <div class="text-center">
          <div class="flex justify-center items-center mb-4">
            <svg class="text-green-500 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
            </svg>
          </div>
          <h3 class="mb-5 text-lg font-normal text-gray-800">¡El Usuario ha sido registrado exitosamente!</h3>
          <div class="flex justify-center gap-4">
            <button data-modal-hide="popup-modal" id="btnConfirmarEditar" type="button" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Aceptar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="usuario-existente" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full bg-black bg-opacity-50">
      <div class="relative p-4 bg-white rounded-lg shadow-lg w-full max-w-md mx-auto">
        <button type="button" class="absolute right-2.5 top-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex justify-center items-center">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Cerrar modal</span>
        </button>
        <div class="text-center">
          <div class="flex justify-center items-center mb-4">
            <svg class="text-yellow-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z"/>
            </svg>
          </div>
          <h3 class="mb-5 text-lg font-normal text-gray-800">¡Este usuario ya se encuentra registrado!</h3>
          <div class="flex justify-center gap-4">
            <button data-modal-hide="popup-modal" id="btnCerrarExistente" type="button" class="text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5">
              Aceptar
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="../../assets/js/tables.js"></script>
  <script src="../../assets/js/empleados.js" id="scripts"></script>
  <script src="../../assets/js/añadir-usuario.js" id="scripts"></script>
 
  <script type="module" src="../../assets/js/flowbite.js" id="scripts"></script>
</body>

</html>