<?php /* Smarty version 3.1.27, created on 2015-11-25 15:20:22
         compiled from "C:\Xampp\htdocs\fochoteco\templates\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170925655c3a662d099_57059553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a60907b23a1dbee2e55dcd96506e328459ebfa' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\admin.tpl',
      1 => 1448455922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170925655c3a662d099_57059553',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5655c3a6677426_78293020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5655c3a6677426_78293020')) {
function content_5655c3a6677426_78293020 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170925655c3a662d099_57059553';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/pest.png">
    <title>Lima & Limón</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>


  <body id="bodyhome">

  <div class="col-sm-12">
    <div class="col-xs-1">
    <form id="imgAjax">
      <input type="file"  id="imagesToUpload2" name="imagesToUpload2[]" multiple>
    </form>
    </div>
      <span class="pull-right">Hola <strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong>! <a href="index.php?section=logout">Logout</a></span>
  </div>


    <div id="contadmin" class="col-sm-6 row admNews">
      <ul id="contadmin1">

      </ul>

    </div>

  <div class="col-sm-5 panelAdmin">

    <form class="form-horizontal" id="formAgregarNoticia">

              <select id="dropdown" name="dropdown">
                <option value="0">Categorias</option>
              </select>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Titulo</h4>
                  <input type="text" id="nuevoTitulo" name="nuevoTitulo" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Descripcion</h4>
                  <textarea class="form-control" id="nuevaDescripcion" name="nuevaDescripcion" rows="1"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-12">
                  <h4>Noticia</h4>
                  <textarea class="form-control" id="nuevaNoticia" name="nuevaNoticia" rows="5"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="imagesToUpload">Imagenes noticia: </label>
                <input type="file" name="nuevasImgsNoticia[]" id="nuevasImgsNoticia" multiple/>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-9 col-sm-3">
                  <button type="submit" id="agregarNoticiaNueva" name="agregarNoticiaNueva" class="btn btn-default">Agregar noticia</button>
                </div>
              </div>
    </form>


    <form id="formAgregarCategoria">
      <div class="form-group">
      <h4>Agregar categoria: </h4>
      <input type="text" name="nuevaCategoria" id="nuevaCategoria" class="form-control">
      </div>
      <div class="form-group">
        <div class="col-sm-offset-10 col-sm-2">
          <button type="submit" name="agregarNuevaCategoria" id="agregarNuevaCategoria" class="btn btn-default">Agregar</button>
        </div>
      </div><br><br><br>
    </form>

  </div>

  <div id="listacategorias" class="col-sm-5">
    <label class="control-label" for="nombre">Categorias</label>
    <ul class="col-sm-12" id="listaCategorias1">

    </ul>

  </div>


  <!-- Modal Categoria -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nuevo nombre de la categoria:</h4>
        </div>
        <input id="nuevoNombreCat" name="nuevoNombreCat" value="">
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="guardarNombreCat" name="guardarNombreCat" data-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Noticia -->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nuevo nombre de la categoria:</h4>
        </div>
        <select id="dropdown2" name="dropdown2"><option value="0">Categorias</option></select>
        <h4>Titulo: </h4><input id="actualizarTitulo" name="actualizarTitulo" value="">
        <h4>Descripcion: </h4><textarea id="actualizarDescripcion" name="actualizarDescripcion" rows="5" cols="80" value=""></textarea>
        <h4>Noticia: </h4><textarea id="actualizarNoticia" name="actualizarNoticia" rows="10" cols="80" value=""></textarea>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" id="guardarNoticia" name="guardarNoticia" data-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <?php echo '<script'; ?>
 src="js/mustache.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/ajax-admin.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/dropdown.js"><?php echo '</script'; ?>
>


  </body>
</html>
<?php }
}
?>