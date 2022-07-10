<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class=" space-y-3">
                    <a href="#" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>
    
                    <p class=" text-sm text-gray-600 font-bold">
                        {{ $vacante->empresa }}
                    </p>
    
                    <p class="text-sm text-gray-500">
                        Último día para postularse: {{ $vacante->ultimo_dia->format('d/m/Y') }}
                    </p>
                </div>
    
                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Candidatos
                    </a>
    
                    <a href="{{ route('vacantes.edit', $vacante->id) }}" class="bg-blue-700 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                        Editar
                    </a>
    
                    <button 
                        wire:click="$emit('prueba', {{ $vacante->id }})" {{-- Para escuchar por un evento --}}
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                    >
                        Eliminar
                    </button>
                </div>
            </div>
        @empty
            <p class="text-center p-3 text-sm text-gray-600">No hay Vacantes que mostrar</p>
        @endforelse
    </div>
    
    <div class="mt-10">
        {{ $vacantes->links() }}
    </div>    
</div>

@push('scripts')
    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    Livewire.on('prueba', vacanteId => {
        alert(vacanteId);
    });

    // Swal.fire({
    //     title: '¿Eliminar Vacante?',
    //     text: "Una vacante eliminada no se puede recuperar",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Sí, ¡Eliminar!',
    //     cancelButtonText: 'Cancelar'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             Swal.fire(
    //             'Deleted!',
    //             'Your file has been deleted.',
    //             'success'
    //             )
    //         }
    //     }
    // )
</script>


@endpush