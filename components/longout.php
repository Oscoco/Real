<!-- modal delete -->
<div id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center " aria-modal="true" role="dialog">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto font-bold">
        <div class="relative bg-white rounded-lg ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="popup-modal">
                <i class='bx bx-x text-xl'></i> <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
            <i class='bx bx-error-circle mx-auto mb-4 text-5xl text-gray-600'></i> 
                <h3 class="mb-5 text-lg text-gray-700 font-bold">¿Está seguro de que desea eliminar este registro?</h3>
                <button data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                Si, Eliminar
                </button>
                <button data-modal-toggle="popup-modal" type="button" class="text-gray-500 bg-gray-100 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No, Cancelar</button>
            </div>
        </div>
    </div>
</div>