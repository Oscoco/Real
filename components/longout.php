<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-[1000]">
   <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

   <div class="">
     <div class="relative max-w-md h-full md:h-auto modal-container w-auto md:max-w-md mx-auto rounded shadow-lg z-50">
       <div class="relative bg-white rounded-lg shadow">
         <button type="button" class="modal-close absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center justify-center" data-modal-toggle="popup-modal">
           <i class='bx bx-x text-xl'></i>

         </button>

         <div class="p-6 text-center">

           <i class='bx bx-error-circle mx-auto mb-4 text-6xl text-gray-600'></i>
           <h3 class="mb-5 text-lg font-normal text-gray-600 mx-10">¿Estas seguro de salir?</h3>

           <button type="button" class="btn-cancel modal-close">No, cancelar</button>

           <a href="<?= PATH ?>auth/destroySession.php" data-modal-toggle="popup-modal" type="button" class="btn-eliminar bg-red-600 ml-2 ">
             Si, salir
           </a>

         </div>
       </div>
     </div>

   </div>
</div>

 