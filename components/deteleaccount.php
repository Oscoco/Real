 <!--Modal detele account-->
 <div class="modal-clore opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
   <div class="modal-over absolute w-full h-full bg-gray-900 opacity-50"></div>

   <div class="">
     <div class="relative max-w-md h-full md:h-auto modal-container w-auto md:max-w-md mx-auto rounded shadow-lg z-50">
       <div class="relative bg-white rounded-lg shadow">
         <button type="button" class="modal-close absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center justify-center">
           <i class='bx bx-x text-xl '></i>
           <span class="sr-only">Close modal</span>
         </button>

         <div class="p-6 text-center">
           <i class='bx bx-error-circle mx-auto mb-4 text-6xl text-gray-600'></i>
           <h3 class="mb-5 text-lg font-normal text-gray-600 mx-10">¿Estas de eliminar este registro?</h3>

           <a href="<?= PATH ?>admin/models/accion_persona.php?id=<?php print
              $item['id'] ?>" data-modal-toggle="popup-modal" type="button" 
              class="btn-eliminar bg-red-600">
             Si, eliminar
           </a>

           <button type="button" class="btn-cancel modal-close">No, cancelar</button>
         </div>
       </div>
     </div>

   </div>
 </div>


 <!-- ruta para eliminar por id los registros -->
 <!-- <a href="<?= PATH ?>admin/models/accion_persona.php?id=<?php print
                                                              $item['id'] ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-4">
                <i class='bx bxs-trash-alt'></i>
            </a> -->