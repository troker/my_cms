<?php
/* Smarty version 3.1.29, created on 2016-03-02 16:25:10
  from "D:\soft\OpenServer\domains\localhost\vieus\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d6e9b692ee77_47124472',
  'file_dependency' => 
  array (
    'fa670a0ba7d35d67869d5815cced74c83b17c8b8' => 
    array (
      0 => 'D:\\soft\\OpenServer\\domains\\localhost\\vieus\\default\\index.tpl',
      1 => 1456760992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d6e9b692ee77_47124472 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_productes_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_productes_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
	<div style="float: left; padding: 0px 30px 40px 0px;">
		<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
			<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
		</a><br>
		<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	</div>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_productes_0_saved_local_item;
}
if ($__foreach_productes_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_productes_0_saved_item;
}
?>
//asdasd<?php }
}
