<!-- Edit user Modal -->
<div class="modal fade" id="preciosModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 id="editUserModalTitle" class="modal-title">Editar usuario</h4>

                <!-- Button Close -->
                <button type="button" class="btn btn-icon btn-soft-light rounded-circle mr-2" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x tio-lg"></i>
                </button>
                <!-- End Button Close -->
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <!-- Tab Content -->
                <div class="tab-content" id="editUserModalTabContent">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form id="userdata" class="js-validate">
                            <input type="hidden" id="id" name="id" value="">
                            <!-- End Profile Cover -->
                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="editFirstNameModalLabel" class="col-sm-2 col-form-label input-label">Nombre</label>

                                <div class="col-sm-10">
                                    <div class="js-form-message input-group input-group-sm-down-break">
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE (OBLIGATORIO)" required data-msg="Ingrese el nombre." autocomplete="off">
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="APELLIDO(S) (OBLIGATORIO)" required data-msg="Ingrese sus apellidos." autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="emailLabel" class="col-sm-3 col-form-label input-label">Fecha de nacimiento</label>

                                <div class="col-sm-9 js-form-message">
                                    <input type="text" class="js-flatpickr form-control flatpickr-custom" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Selecciona una fecha"
                                           data-hs-flatpickr-options='{
                                 "dateFormat": "Y/m/d"
                               }'
                                           required data-msg="Ingrese su fecha de nacimiento."
                                    >
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="row form-group">
                                <label for="emailLabel" class="col-sm-3 col-form-label input-label">G??nero</label>

                                <div class="col-sm-9 js-form-message">
                                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="genero" name="genero" required data-msg="Seleccione un genero."
                                            data-hs-select2-options='{
                                                "minimumResultsForSearch": "Infinity",
                                                "placeholder": "Selecciona un genero"
                                            }'>
                                        <option value=""> Seleccionar</option>
                                        <option value="1"> Masculino</option>
                                        <option value="2"> Femenino</option>

                                    </select>
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success snd" data-url="{{ url('hotelPrecio')}}"> <i class="bi bi-check-lg"></i> Guardar</button>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close"> <i class="bi bi-x-lg"></i> Cancelar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- End Tab Content -->
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Edit user Modal -->