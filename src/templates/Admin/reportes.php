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


    <title>Reportes</title>
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
          <span class="cursor-default ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Reportes</span>
        </div>
      </li>
    </ol>
  </div>

  <form id="reportForm">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
        
        <!-- Reportes de Empleados - Card 1 -->
        <div class="flex flex-col items-start justify-start p-4 rounded-lg bg-white border border-gray-200 text-gray-700 font-medium shadow-md w-full">
            <div class="w-full flex items-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <p class="text-lg ml-2">Reportes de Empleados</p>
                
            </div>
            <button  type="button" onclick="generarPDF()" class="text-white bg-blue-700 
    hover:bg-[#235dff] focus:ring-4 
    focus:ring-blue-300 font-medium rounded-lg 
    text-sm px-5 py-2.5 me-2 mb-2  
    ">Generar Reporte</button>
        </div>
      
       
        
    </div>


   
</form>



    
    
    
    
    
    
    
 
    </section>

<script src="../../assets/js/reporte.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script type="module" src="../../assets/js/flowbite.js" id="scripts"></script>
</body>
</html>