
<!-- Content -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
            
                <h1 class="page-header-title">Usuarios</h1>
            </div>

            <div class="col-sm-auto">
                <button class="btn btn-primary add" data-action="preciosModal">
                    <i class="bi bi-plus mr-1"></i> Agregar
                </button>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div id='calendar'></div>
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Content -->

@include('hotel.tipo_habitaciones.modal')
<!-- ========== END SECONDARY CONTENTS ========== -->

<script src="{{ config('app.plugins') }}script.js"></script>
<!-- JS Plugins Init. -->
<script>

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      initialView: 'resourceTimelineDay',
      aspectRatio: 1.5,
      headerToolbar: {
        left: 'prev,next',
        center: 'title',
        right: 'resourceTimelineDay,resourceTimelineWeek,resourceTimelineMonth'
      },
      editable: true,
      resourceAreaHeaderContent: 'Rooms',
      resources: 'https://fullcalendar.io/api/demo-feeds/resources.json?with-nesting&with-colors',
      events: 'https://fullcalendar.io/api/demo-feeds/events.json?single-day&for-resource-timeline'
    });

    calendar.render();
  });

    $('body').off('click','.add').on('click',".add", function(event){
        var Open =  $("#"+$(this).data('action'));
        clear(Open);
        Open.modal('show')
    });

    $("table").on("click","button.add",function(){
        var Open =  $("#"+$(this).data('action'));
        var Url =  $(this).data('url');
        var modal = $(this).data('action');
        clear(Open);
        var id = $(this).data('id');
        $('#' + $(this).data('action') + ' #id_paciente').val(id);

        $.ajax({
            type: "get",
            url: Url,
            beforeSend: function(){
                loading();
            },
            success: function(data){
                $.each(data.usuario, function(index, value) {
                    if(index === 'rol') {
                        $('#rol').val(value).trigger('change');
                    } else if(index === 'id_agencia') {
                        $('#id_agencia').val(value).trigger('change');
                    }
                    $('#'+index).val(value);
                });
                loading_close();
            },
            fail: function (data){
                loading_close();
                error();
            }
        });

    });

    $("table").on("click","button.rmv",function(){
        var current_object = $(this);
        var url = $(this).data('url');
        Swal.fire({
            title: '¿Desea eliminar?',
            text: "Si elimina este registro no se podrá recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                var action = url;
                var token = jQuery('meta[name="csrf-token"]').attr('content');
                var id = current_object.attr('data-id');

                $.ajax
                ({
                    type: "delete",
                    url: action,
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    beforeSend: function(){
                        loading();
                    },
                    success: function(data)
                    {
                        datatable.ajax.reload();
                        toastr.success("Eliminado correctamente");
                        loading_close();
                    },
                    error: function(data)
                    {
                        loading_close();
                        error(data)
                    }
                });
            }
        })
    });

    $('body').off('click','.snd').on('click', '.snd', function (event) {
        event.preventDefault()
        var form = $("#"+$(this).parents('form').attr('id')+"");
        var modal = $("#"+$(this).parents('.modal').attr('id')+"");
        var mod = $(this).parents('.modal').attr('id');
        var url = $(this).data('url');

        if(form.valid()){
            $.ajax({
                url: url,
                type: "POST",
                data: form.serialize(),
                dataType: 'json',
                beforeSend: function(){
                    loading();
                },
                success: function (data) {
                    loading_close();
                    if(data.respuesta) {
                        modal.modal('hide');
                        toastr.success( data.mensaje );
                        datatable.ajax.reload();
                    }
                },
                error: function (data) {
                    loading_close();
                    error(data);
                }
            });
        }else{
            error('Revise el formulario, por favor revise el formulario, faltan algunos datos por llenar')
        }

    });

    $("table").on("change",".toggle-switch-input",function(){
        var id = $(this).attr('data-id');
        var che = '';
        if( $(this).is(":checked") ){
            che=1
        }else{
            che=0
        }

        $.ajax({
            url: '{{ route('usuarios.store') }}',
            type: "POST",
            data: 'id='+id+'&estatus='+che,
            dataType: 'json',
            beforeSend: function(){
                loading();
            },
            success: function (data) {
                if(data.respuesta) {
                    toastr.success( data.mensaje );
                    datatable.ajax.reload();
                }
                loading_close();
            },
            error: function (data) {
                loading_close();
                error(data);
            }
        });

    });

</script>
