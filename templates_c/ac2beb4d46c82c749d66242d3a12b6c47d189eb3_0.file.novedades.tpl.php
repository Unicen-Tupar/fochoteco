<?php /* Smarty version 3.1.27, created on 2015-09-29 05:47:15
         compiled from "C:\Xampp\htdocs\fochoteco\templates\novedades.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8800560a09c3b48067_90557385%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac2beb4d46c82c749d66242d3a12b6c47d189eb3' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\novedades.tpl',
      1 => 1443498432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8800560a09c3b48067_90557385',
  'variables' => 
  array (
    'novedades' => 0,
    'novedad' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560a09c3b84f65_54524255',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560a09c3b84f65_54524255')) {
function content_560a09c3b84f65_54524255 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8800560a09c3b48067_90557385';
?>
<div class="container-fluid">
  <div class="row" style="margin-bottom: 40px;">
      <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['novedades']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['novedad'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['novedad']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['novedad']->value) {
$_smarty_tpl->tpl_vars['novedad']->_loop = true;
$foreach_novedad_Sav = $_smarty_tpl->tpl_vars['novedad'];
?>

        <li class="list-group-item col-sm-offset-1 col-sm-10" style="margin-top: 10px;">
          <?php
$_from = $_smarty_tpl->tpl_vars['novedad']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
          <div class="col-sm-2" style="margin-top: 0.8%;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" class="img-thumbnail" style="margin: auto; width: 85%;"/>
          </div>
          <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
          <div class="col-sm-10">
            <h6 style="text-align: left; font-weight: bold; color: #021c01;"> Categoria: <?php echo $_smarty_tpl->tpl_vars['novedad']->value['fk_id_categoria'];?>
 </h6>
            <h3 style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['novedad']->value['titulo'];?>
</h3>
            <?php echo $_smarty_tpl->tpl_vars['novedad']->value['descripcion'];?>

            <button value=<?php echo $_smarty_tpl->tpl_vars['novedad']->value['id_novedad'];?>
 class="verNoticia"><h6 style="text-align: right; font-weight: bold; color: #002eb8;"> Ver noticia completa </h6></button>
          </div>
        </li>

        <?php
$_smarty_tpl->tpl_vars['novedad'] = $foreach_novedad_Sav;
}
?>
      </ul>
  </div>
</div>

<?php echo '<script'; ?>
 src="js/noticiaCompleta.js"><?php echo '</script'; ?>
>
<?php }
}
?>