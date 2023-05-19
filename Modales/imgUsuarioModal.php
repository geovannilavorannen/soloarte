<!-- Modal -->
<div class="modal fade" id="imgUsuarioModal" tabindex="-1" aria-labelledby="imgUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="imgUsuarioModalLabel">Agregar Imagen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="../../Transacciones/SubirImgUsuario.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <label for="file-input">Sube Tu Imagen</label>
                    <input type="file" name="imagen" class="form-control mt-1" accept=".jpg, .png" id="file-input" required>
                        <div class=" d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-warning mt-1" id="btnlimpiar">Limpiar</button>
                        </div>
                    <div class="mt-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-outline-danger" style="margin-right: 5px;" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="margin-right: 2px;"></i>Cancelar</button>
                        <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var btnlimpiar = document.getElementById('btnlimpiar');
    var fileInput = document.getElementById('file-input');

    btnlimpiar.addEventListener('click', function() {
        fileInput.value = '';
    })
</script>