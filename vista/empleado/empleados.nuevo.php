<!-- incluimos  Encabezado -->
<?php require_once 'vista/templates/encabezado.php'; ?>

<div class="container">
    <div class="card card-body">
        <form action="index.php?c=empleados&f=nuevo" method="POST">
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <h1> Datos personales</h1>
                    <label >Cedula</label>
                    <input type="text"  name="Cedula" class="form-control" required/>
                </div>
                
                <div class="form-group col-sm-12">
                    <label >Nombre</label>
                    <input type="text"  name="Nombre" class="form-control" required/>
                </div>
                
                 <div class="form-group col-sm-12">
                    <label >Apellidos</label>
                    <input type="text"  name="Apellidos" class="form-control" required/>
                </div>
                
                <div class="form-group col-sm-12">
                    <label >Fecha de nacimiento</label>
                    <<input type="date" name="Fecha_Nacimiento" class="form-control" required>
                </div>
                
                <div class="form-group col-sm-12">
                    <label for="seo">Sexo:</label>
                    <select name="Sexo" id="sexo" class="form-control">
                        <option value="0" >Seleccione..</option>
                        <option value="1" >Femenino</option>
                        <option value="2">Masculino</option>                                   
                    </select> 
                </div>
                <h1> Datos de trabajos</h1>
                <div class="form-group col-sm-12">
                    <label>Cargo</label>
                    <input type="text" name="Cargo" class="form-control" required>
                </div>
                
                <div class="form-group col-sm-6">
                    <label >Sueldo</label>
                    <input type="text"  name="Sueldo" class="form-control" required/>
                </div>
                
                <div class="form-group col-sm-6">
                    <label>Usuario</label>
                    <input type="text"  name="Usuario" class="form-control" required/>
                </div>

                <div class="form-group col-sm-6">
                    <label for="password">Contrase??a</label>
                    <input type="password" name="Contrasena" class="form-control" required>
                </div>          

                <div class="form-group col-sm-6">
                    <label for="passConfirma">Pin</label>
                    <input type="password" name="Pin" class="form-control">
                </div>
                
                <div class="form-group col-sm-12">
                    <label> Estado </label>
                    <input type="checkbox" value="1" name="Estado" >
                    <label for="termino">Activo</label>
                </div>
                <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="index.php?c=empleados&a=index" class="btn btn-primary">Cancelar</a>
                </div>
            </div>  
        </form>


    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'vista/templates/piedepagina.php'; ?>
