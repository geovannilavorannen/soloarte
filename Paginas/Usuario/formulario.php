<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../Layout/estilos.php'  ?>
    <title>Crear Solicitud</title>
</head>

<body>
    <?php include '../../Layout/navbarU.php' ?>
    <div class="d-flex justify-content-center">
        <div class="col-lg-6 col-sm-12 mt-5">

            <h1 class="text text-center">¿Quieres trabajar con nosotros?</h1>
            <h4 class="text text-center mb-3">Completa los siguientes campos para poder conocer un poco mas de ti</h4>

            <form action="../../Transacciones/enviarsolicitud.php" method="POST" enctype="multipart/form-data" id="salicitud">
                <div class="mb-3">
                    <label for="p1" class="form-label">¿Cuál es tu experiencia previa en la industria de distribución de artesanías o productos similares?</label>
                    <input type="text" name="p1" id="p1" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p2" class="form-label">¿Cuál es tu conocimiento sobre las distintas técnicas artesanales utilizadas en México?</label>
                    <input type="text" name="p2" id="p2" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p3" class="form-label">¿Cuál es tu enfoque para garantizar que los productos sean auténticos y representen fielmente la cultura mexicana?</label>
                    <input type="text" name="p3" id="p3" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p4" class="form-label">¿Cómo te mantendrías actualizado/a sobre las últimas tendencias y demandas en el mercado de las artesanías mexicanas?</label>
                    <input type="text" name="p4" id="p4" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="p5" class="form-label"> ¿Qué valor añadido crees que podrías aportar a la empresa en términos de asegurar la calidad de las artesanías y mejorar la experiencia del cliente?
                    </label>
                    <input type="text" name="p5" id="p5" class="form-control" maxlength="100" required>
                </div>

                <div class="mb-3">
                    <label for="imagenes" class="form-label">Sube al menos 3 imagenes de tu trabajo</label>
                    <input type="file" name="imagenes[]" id="imagenes" class="form-control" multiple accept=".jpg, .png" id="file-input" required>
                    <div class=" d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-warning mt-1" id="btnlimpiar">Limpiar</button>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="mx-2">
                            <input class="fa-check-circle" type="checkbox" name="terminos" id="terminos">
                        </div>
                        <label for="terminos">Acepto los terminos y condiciones de SoloArte. <a href="#" data-bs-toggle="modal" data-bs-target="#terminosModal" class=" link-danger">Leer Terminos y condiciones</a></label>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <div class="mb-3">
                        <a href="PerfilUsuario.php" class="btn btn-outline-danger">Cancelar</a>
                        <button type="submit" id="btnEnviar" class="btn btn-outline-dark">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="terminosModal" tabindex="-1" aria-labelledby="terminosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="terminosModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text text-center">Términos y Condiciones de "SoloArte" para Asociación de Usuarios y Política de Precios</h2>
                    <ol>
                        <li>Aceptación de los Términos y Condiciones:</li>
                        <ul>
                            <li>Al asociarte con "SoloArte", aceptas y te comprometes a cumplir los siguientes términos y condiciones. Te recomendamos leer detenidamente esta información antes de unirte como usuario asociado.</li>
                        </ul>
                        <li>Asociación y Comisiones:</li>
                        <ul>
                            <li>a. Como usuario asociado, tienes derecho a publicar tus productos en la plataforma de "SoloArte" y beneficiarte de la exposición a potenciales compradores.</li>
                            <li>b. Por cada venta realizada a través de "SoloArte", la empresa se quedará con una comisión del 10% del precio de venta final (sin incluir impuestos ni gastos de envío).</li>
                            <li>c. La comisión mencionada en el punto anterior será deducida automáticamente de los ingresos generados por la venta y se reflejará en los informes y pagos que se realicen al usuario asociado.</li>
                        </ul>
                        <li>Precio Final y Cambios:</li>
                        <ul>
                            <li>a. Al publicar un producto en "SoloArte", el usuario asociado deberá establecer un precio inicial para el mismo.</li>
                            <li>b. La empresa se reserva el derecho de revisar y ajustar el precio final del producto antes de ser publicado en la plataforma, con el objetivo de asegurar que cumpla con los estándares y criterios de calidad establecidos.</li>
                            <li>c. En caso de que se realice un ajuste en el precio final del producto, "SoloArte" notificará al usuario asociado antes de la publicación y proporcionará una explicación adecuada de los cambios realizados.</li>
                        </ul>
                        <li>Responsabilidades del Usuario Asociado:</li>
                        <ul>
                            <li>a. El usuario asociado es responsable de garantizar la exactitud y veracidad de la información proporcionada al publicar un producto en "SoloArte".</li>
                            <li>b. El usuario asociado debe asegurarse de contar con los derechos legales para vender los productos que publica y de cumplir con todas las leyes y regulaciones aplicables.</li>
                            <li>c. El usuario asociado se compromete a ofrecer productos de calidad y a brindar un servicio al cliente excepcional a los compradores de "SoloArte".</li>
                        </ul>
                        <li>Modificaciones y Terminación:</li>
                        <ul>
                            <li>a. "SoloArte" se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Las modificaciones entrarán en vigencia a partir de su publicación en la plataforma.</li>
                            <li>b. En caso de incumplimiento de los términos y condiciones establecidos, "SoloArte" se reserva el derecho de suspender o terminar la asociación del usuario sin previo aviso.</li>
                        </ul>
                        <li>Limitación de Responsabilidad:</li>
                        <ul>
                            <li>a. "SoloArte" hará todo lo posible para asegurar el correcto funcionamiento de la plataforma, pero no se hace responsable de cualquier interrupción temporal, errores o pérdida de datos.</li>
                            <li>b. "SoloArte" no se hace responsable de los productos publicados por los usuarios asociados ni de las transacciones realizadas entre compradores y vendedores en la plataforma.</li>
                        </ul>
                    </ol>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cerrar</button>

                </div>
            </div>
        </div>
    </div>


    <script>
        const checkbox = document.getElementById("terminos");
        const boton = document.getElementById("btnEnviar");

        boton.disabled = true;
 
        var btnlimpiar = document.getElementById('btnlimpiar');
        var fileInput = document.getElementById('file-input');

        btnlimpiar.addEventListener('click', function() {
            fileInput.value = '';
        })

        // Agregar evento de escucha al checkbox
        checkbox.addEventListener("change", function() {
            // Verificar si el checkbox está seleccionado
            if (checkbox.checked) {
                // Habilitar el botón si está seleccionado
                boton.disabled = false;
            } else {
                // Deshabilitar el botón si no está seleccionado
                boton.disabled = true;
            }
        });
    </script>

    <?php include '../../Layout/scripts.php' ?>

</body>

</html>