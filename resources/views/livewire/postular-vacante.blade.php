<div class=" bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center" >
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta Vacante</h3>

    <form wire:submit.prevent="postularme" action="" class="w-96 mt-5">
        <div class="mb-4">
            <x-label for="cv" :value="__('Curriculum (PDF)')" />
            <x-input id="cv" type="file" accept=".pdf" wire:model="cv" class=" block mt-1 w-full" />

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
        </div>

        <x-button class="my-5">
            {{__('Postularme')}}
        </x-button>
    </form>
</div>
