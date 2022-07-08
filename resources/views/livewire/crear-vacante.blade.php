<form action="" class="md:w-1/2 space-y-5">
    <div class="">
        <x-label for="titulo" :value="__('Titulo Vacante')" />

        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" placeholder="Titulo Vacante"/>
    </div>

    <div class="">
        <x-label for="salario" :value="__('Salario Mensual')" />

        <select name="salario" id="salario" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccionar --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <x-label for="categoria" :value="__('Categoria')" />

        <select name="categoria" id="categoria" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccionar --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
    </div>

    <div class="">
        <x-label for="empresa" :value="__('Empresa')" />

        <x-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Empresa ej. Netflix, Uber, Microsoft"/>
    </div>

    <div class="">
        <x-label for="ultimo_dia" :value="__('Último día para postularse')" />

        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"/>
    </div>

    <div class="">
        <x-label for="descripcion" :value="__('Descripción Puesto')" />

        <textarea name="descripcion" id="descripcion" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72" placeholder="Descripción general del puesto, experiencia..."></textarea>
    </div>

    <div class="">
        <x-label for="imagen" :value="__('Imagen Vacante')" />

        <x-input id="imagen" class="block mt-1 w-full" type="file" name="imagen"/>
    </div>

    <x-button>
        Crear Vacante
    </x-button>

</form>