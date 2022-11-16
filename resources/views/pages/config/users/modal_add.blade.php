<div id="ModalUsuarios" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header bg-primary pb-4 pt-4">
            <h3 class="modal-title text-white" id="exampleModalCenteredScrollableTitle">Usuarios</h3>
            <button type="button" class="btn-close bg-white rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form class="js-validate needs-validation" novalidate="" data-name="FormUsuarios" id="FormUsuarios" method="POST" action="https://fielgroup.com.mx/template2/public/usuarios">
               <input type="hidden" id="id" name="id" value="">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="mb-4" >
                        <label class="form-label" for="name">Nombre/s</label>
                        <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="" required="true" >
                        <span class="invalid-feedback">Campo obligatorio.</span>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="mb-4" >
                        <label class="form-label" for="apellidos">Apellidos</label>
                        <input type="text" class="form-control form-control-lg" name="apellidos" id="apellidos" placeholder="" required="true" >
                        <span class="invalid-feedback">Campo obligatorio.</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="mb-4" >
                        <label class="form-label" for="email">Correo electrónico</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="" required="true" >
                        <span class="invalid-feedback">Campo obligatorio.</span>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="mb-4" data-hs-validation-validate-class>
                        <label class="form-label" for="password_plain">Contraseña</label>
                        <input type="text" class="form-control form-control-lg" name="password_plain" id="password_plain" placeholder="" required="true" minlength=8>
                        <span class="invalid-feedback">Campo obligatorio, debe de tener más de 8 caracteres</span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="mb-4">
                        <label class="form-label" for="rol">rol</label>
                        <div class="tom-select-custom rol custom-empty">
                           <select class="js-select form-select" autocomplete="off"
                              data-hs-tom-select-options='{
                              "placeholder": "Seleccione..."
                              }' id="rol" name="rol" required="true">
                              <option value="">Seleccione...</option>
                           </select>
                           <span class="invalid-feedback">Campo obligatorio.</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                  </div>
               </div>
               <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-success" style="margin-right: 4px"> <i class="bi-check-lg"></i> Guardar</button>
                  <button type="button" class="btn btn-white text-danger" data-bs-dismiss="modal"> <i class="bi-x-lg"></i> Cancelar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@push('js')
    <script>
        (function() {

            window.onload = function () {
                const datatable = HSCore.components.HSDatatables.getItem('datatable')

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
                        datatable.ajax.reload()
                    }
                }
            }
        })()
    </script>
    @endpush
