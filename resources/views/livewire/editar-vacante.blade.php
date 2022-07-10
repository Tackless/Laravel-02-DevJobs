<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent="editarVacante"> {{-- wire:submit.prevent="crearVacante" para comunicar con el controlador --}}
    <div class="">
        <x-label for="titulo" :value="__('Titulo Vacante')" />

        <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Titulo Vacante"/>

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="salario" :value="__('Salario Mensual')" />

        <select wire:model="salario" id="salario" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccionar --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="categoria" :value="__('Categoria')" />

        <select wire:model="categoria" id="categoria" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccionar --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        
        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="empresa" :value="__('Empresa')" />

        <x-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Empresa ej. Netflix, Uber, Microsoft"/>

        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />

        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')"/>

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="descripcion" :value="__('Descripción Puesto')" />

        <textarea wire:model="descripcion" id="descripcion" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72" placeholder="Descripción general del puesto, experiencia..."></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div class="">
        <x-label for="imagen" :value="__('Imagen Vacante')" />

        <x-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*" />

        <div class="my-5 w-80">
            <x-label :value="__('Imagen Actual:')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen de la vacante ' . $titulo }}" class="">
        </div>

        <div class="my-5 w-80">
            @if ($imagen_nueva)
            <x-label :value="__('Imagen Nueva:')" />
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Image Preview">
            @endif
        </div>

        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-button>
        Guardar Cambios
    </x-button>

</form>