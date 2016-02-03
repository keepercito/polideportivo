<aside>
    <?php if (!(isset($_SESSION['logged_in']))) : #si logged_in no esta predefinido mostrara el formulario de login
    ?>                 
    <div class="div-login">
            <h3>Iniciar Sesión</h3>
            <table>
                <?= form_open("Usuarios/login") ?>
                    <?php
                        $car = array( #esto se hace para pasarle los atributos al input de Nombre:
                            'name' => 'usuario',
                            'placeholder' => 'Escriba su usuario' 
                        );
                    ?>
                <tr><td style="text-align:left"><?= form_label('Usuario : ','usuario')?></td>
                    <td><?= form_input($car,set_value('usuario'))?></td>
                </tr>
                <tr><td style="text-align:left"><?= form_label('Contraseña : ','contraseña')?></td>
                    <td><input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa la Contraseña">
                    </td>
                </tr>
                <tr><td></td>
                    <td><?= form_submit('','Ingresar al sistema') ?></td>
                </tr> 
                <?= form_close() ?>
            </table>
            <?php if (isset($_SESSION['msgError'])): ?>
                <?= $this->session->flashdata('msgError'); ?>
            <?php endif; ?>
    </div>
    <?php else : #si logged_in esta predefinido muestra el saludo
    ?>
    <p>Bienvenid@:<br><?php echo $this->session->userdata('nombre');?></p>
    <a href="<?= base_url()?>Usuarios/logout">Cerrar Sesion</a>
    <?php endif; ?>
</aside>