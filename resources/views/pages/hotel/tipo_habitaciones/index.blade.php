<x-app-layout :active="$active">
    <x-layout.page>
        <x-slot name="titulo"> </x-slot>
        <x-slot name="boton"> </x-slot>
        <x-slot name="cuerpo"> </x-slot>
    </x-layout.page>
    <!-- @include('pages.config.users.modal_add') -->
    @push('js')
    @endpush
</x-app-layout>
