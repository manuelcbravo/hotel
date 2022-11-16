<x-app-layout :active="$active">
    <x-layout.page>
        <x-slot name="titulo"> Perfil</x-slot>
        <x-slot name="cuerpo">
            <x-layout.card>
                <x-slot name="header"> Información basica</x-slot>
                <x-slot name="body">
                    <!-- Form -->
                    <form class="js-validate needs-validation" novalidate="" data-name="FormUsuarios" id="FormUsuarios" method="POST" action="{{ route('usuarios.store') }}">
                        <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nombre completo </label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-vertical">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ Auth::user()->apellidos }}">
                                </div>
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="email" aria-label="Email" value="{{ Auth::user()->email }}" readonly="">
                            </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                            <label for="organizationLabel" class="col-sm-3 col-form-label form-label">Contraseña</label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password_plain" id="password_plain" placeholder="Your organization" aria-label="Your organization" value="{{ Auth::user()->password_plain }}">
                            </div>
                        </div>
                        <!-- End Form -->

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </x-slot>
            </x-layout.card>
        </x-slot>
    </x-layout.page>
    @push('js')
        <script>
            (function() {
                window.onload = function () {
                    // INITIALIZATION OF BOOTSTRAP VALIDATION
                    // =======================================================
                    HSBsValidation.init('.js-validate', {
                        onSubmit: data => {
                            data.event.preventDefault()
                            HSCallStore.init(data,success)
                        }
                    })

                    const success = (data) => {
                        if(data.respuesta) {
                            tata.success('Éxito', data.mensaje)
                        }
                    }
                }
            })()
        </script>
    @endpush
</x-app-layout>
