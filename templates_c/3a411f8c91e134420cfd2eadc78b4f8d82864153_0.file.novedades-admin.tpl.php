<?php /* Smarty version 3.1.27, created on 2015-09-27 22:14:20
         compiled from "C:\Xampp\htdocs\fochoteco\templates\novedades-admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:744956084e1ccd4666_42636129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a411f8c91e134420cfd2eadc78b4f8d82864153' => 
    array (
      0 => 'C:\\Xampp\\htdocs\\fochoteco\\templates\\novedades-admin.tpl',
      1 => 1443384859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744956084e1ccd4666_42636129',
  'variables' => 
  array (
    'novedades' => 0,
    'novedad' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56084e1cd1ab76_67254203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56084e1cd1ab76_67254203')) {
function content_56084e1cd1ab76_67254203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '744956084e1ccd4666_42636129';
?>
  <div class="row" style="margin-top: 50px; margin-left: 50px;">
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

        <li class="list-group-item col-sm-12" style="background-color: #ecf2ed;" >
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
          <div class="col-sm-3" style="margin-top: 1%;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" class="img-thumbnail" style="margin: auto; width: 100%;"/>
          </div>
          <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
          <div class="col-sm-9">
            <h6 style="text-align: left; font-weight: bold; color: #021c01;"> Categoria: <?php echo $_smarty_tpl->tpl_vars['novedad']->value['fk_id_categoria'];?>
 </h6>
            <h3 style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['novedad']->value['titulo'];?>
</h3>
            <?php echo $_smarty_tpl->tpl_vars['novedad']->value['descripcion'];?>

            <h6 style="text-align: right; font-weight: bold; color: #002eb8;"> Ver noticia completa </h6>
          </div>
        </li>

        <?php
$_smarty_tpl->tpl_vars['novedad'] = $foreach_novedad_Sav;
}
?>
        </ul>
  </div>
<?php }
}
?>