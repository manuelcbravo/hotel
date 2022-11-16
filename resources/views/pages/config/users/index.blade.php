<x-app-layout :active="$active">
    <x-layout.page>
        <x-slot name="titulo"> Usuarios</x-slot>
        <x-slot name="boton"> 
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUsuarios">
            <i class="bi-plus mr-1"></i> Agregar
            </button>
        </x-slot>
        <x-slot name="cuerpo">
        <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-md-between">
                <div class="mb-2 mb-md-0">
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text">
                        <i class="bi-search"></i>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Buscar" aria-label="Search users">
                    </div>
                    <!-- End Search -->
                </div>
            </div>
            <!-- End Header -->
            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%"
                    data-hs-datatables-options='{
                    &quot;order&quot;: [],
                    &quot;info&quot;: {
                    &quot;totalQty&quot;: &quot;#datatableWithPaginationInfoTotalQty&quot;
                    },
                    &quot;search&quot;: &quot;#datatableSearch&quot;,
                    &quot;entries&quot;: &quot;#datatableEntries&quot;,
                    &quot;pageLength&quot;: 12,
                    &quot;pagination&quot;: &quot;datatablePagination&quot;
                    }'>
                    <thead class="thead-light">
                        <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Activo/inactivo</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
            <!-- Footer -->
            <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Mostrando:</span>
                        <!-- Select -->
                        <div class="tom-select-custom">
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                                }'>
                                <option value="12" selected>12</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </div>
                        <!-- End Select -->
                        <span class="text-secondary me-2">de</span>
                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>
                    <!-- End Col -->
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
            </div>
        </x-slot>
    </x-layout.page>
@include('pages.config.users.modal_add')
@push('js')
    <script>
        $(document).ready(function(){
            $.each(catalogos().rol, function(index, value) {
                $('#rol').append('<option value="'+ value.id +'">'+ value.nombre+'</option>');
            })

            HSCore.components.HSTomSelect.init('.js-select')

            HSCore.components.HSDatatables.init($('#datatable'), {
                language: {
                    zeroRecords: `<div class="text-center p-4">
                      <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
                      <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
                    <p class="mb-0">No data to show</p>
                    </div>`
                },
                ajax: '{{ url('usersL') }}',
                columns: [{
                    render: function (data, type, row) {
                        return ` <div class="d-flex align-items-center" href="user-profile.html">
                                    <div class="avatar avatar-soft-primary avatar-circle">
                                      <span class="avatar-initials">${row.name[0]}</span>
                                    </div>
                                    <div class="ms-3">
                                      <span class="d-block h5 text-inherit mb-0">${row.name + ' ' + row.apellidos}</span>
                                    </div>
                                </div>`
                    }},{render: function (data, type, row) {
                        return `<span class="d-block h5 mb-0">${row.email}</span>`
                    }},{render: function (data, type, row) {
                        let rol = catalogos().rol.find(element => element.id == row.rol);
                        return `${rol.nombre}`
                    }},{render: function (data, type, row) {
                        return `<div class="form-check form-switch mb-4">
                                  <input type="checkbox" class="form-check-input" id="formSwitch${row.id}" ${(row.activado == 1) ? 'checked':''} data-id="${row.id}">
                                </div>`
                    }},{render: function (data, type, row) {
                        return `<button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#ModalUsuarios" data-url="{{ url('usuarios') }}/${row.id}/edit">
                                    <i class="bi-pencil-fill text-info"></i>
                                </button>
                                <button type="button" class="btn btn-white btn-sm rmv" data-id="${row.id}" data-url="{{ url('usuarios') }}/${row.id}">
                                    <i class="bi-trash3-fill text-danger" ></i>
                                </button>`
                    },
                }]
            });
            const tom_select = HSCore.components.HSTomSelect.getItems()
            const datatable = HSCore.components.HSDatatables.getItem('datatable')

            $("button[data-bs-target]").on('click', function(event){
                $.each(tom_select, function(index, value){
                    if(value.inputId != 'datatableEntries'){
                        tom_select[index].clear()
                    }
                })
                clear($($(this).data('bs-target')));
            });


            $("table").on("click","[data-bs-target]",function(){
                let url = $(this).data('url')
                clear($($(this).data('bs-target')))
                HSCallGet.init(url,get)
            })

            $("table").on("click","button.rmv",function(){
                HSCallDelete.init($(this),del)
            })

            $("table").on("change",".form-check-input",function(){
                let id = $(this).attr('data-id');
                let che =  $(this).is(":checked")? 1: 0

                $.ajax({
                    url: '{{ url('usuarios') }}',
                    type: "POST",
                    data: 'id='+id+'&activado='+che,
                    dataType: 'json',
                    beforeSend: function(){
                        loading();
                    },
                    success: function (data) {
                        close_loading();
                        if(data.respuesta) {
                            tata.success( 'Éxito',data.mensaje );
                            datatable.ajax.reload();
                        }
                    },
                    error: function (data) {
                        close_loading();
                        errorSwal('Error',err);
                    }
                });
            });

            const get = (data) =>{
                $.each(data.usuario, function(index, value) {
                    if(index === 'rol') {
                        const select = tom_select.find(element => element.inputId == index);
                        select.items = [value]
                        select.refreshItems()
                    }else{
                        $('#'+index).val(value);
                    }
                });
            }

            const del = (data) =>{
                datatable.ajax.reload();
                tata.success('Éxito', "Eliminado correctamente");
            }
        });
    </script>
@endpush
</x-app-layout>
