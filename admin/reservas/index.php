<?php
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/reservas/listado_reservas.php');
?>
<br>
<div class="container-fluid">
    <h1>listado de reservas</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title"><b>Reservas registradas</b></h3>
                </div>

                <div class="card-body">
                    <table id="example1" class="table  table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Nombre completo</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Nombre de la mascota</th>
                            <th style="text-align: center">Tipo de servicio</th>
                            <th style="text-align: center">Fecha cita</th>
                            <th style="text-align: center">Hora cita</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador = 0;
                        foreach ($reservas as $reserva) {
                            $contador = $contador + 1;
                            $id_reserva = $reserva['id_reserva'];
                            ?>
                            <tr>
                                <td><?php echo $contador ?></td>
                                <td><?php echo $reserva['nombre_completo'] ?></td>
                                <td><?php echo $reserva['email'] ?></td>
                                <td><?php echo $reserva['nombre_mascota'] ?></td>
                                <td><?php echo $reserva['tipo_servicio'] ?></td>
                                <td><?php echo $reserva['fecha_cita'] ?></td>
                                <td><?php echo $reserva['hora_cita'] ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>

                    <br><br>


                </div>

            </div>

        </div>
    </div>


</div>

<?php
include ('../../admin/layout/parte2.php');
include('../../admin/layout/mensaje.php');
?>

<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Reservas",
                "infoEmpty": "Msotrando 0 a 0 de 0 Reservas",
                "infoFiltered": "(Filtrado de MAX total Reservas",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Reservas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [
                {
                    extend: "collection",
                    text: "Reportes",
                    orientation: "landscape",
                    buttons: [
                        { text: "Copiar", extend: "copy"},
                        { extend: "pdf" },
                        { extend: "csv" },
                        { extend: "excel" },
                        { text: "Imprimir", extend: "print"}
                    ]
                },
                {
                    extend: "colvis",
                    text: "Visor de columnas",
                    /* collectionLayout: "fixed three-column" */

                }
            ],
        }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
</script>
