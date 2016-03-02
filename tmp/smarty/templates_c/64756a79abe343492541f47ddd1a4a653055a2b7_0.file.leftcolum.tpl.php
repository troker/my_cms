<?php
/* Smarty version 3.1.29, created on 2016-03-02 18:13:17
  from "D:\soft\OpenServer\domains\localhost\vieus\default\leftcolum.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d7030d6000c5_78965990',
  'file_dependency' => 
  array (
    '64756a79abe343492541f47ddd1a4a653055a2b7' => 
    array (
      0 => 'D:\\soft\\OpenServer\\domains\\localhost\\vieus\\default\\leftcolum.tpl',
      1 => 1456931593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d7030d6000c5_78965990 ($_smarty_tpl) {
?>
	<div id="leftColum">
		<div id="leftMenu">
			<div class="menuCaption">Menu:</div>
			<?php
$_from = $_smarty_tpl->tpl_vars['rsCategries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
				<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
				<?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_itemChild_1_saved_item = isset($_smarty_tpl->tpl_vars['itemChild']) ? $_smarty_tpl->tpl_vars['itemChild'] : false;
$_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['itemChild']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$__foreach_itemChild_1_saved_local_item = $_smarty_tpl->tpl_vars['itemChild'];
?>
					--<a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
				<?php
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_local_item;
}
if ($__foreach_itemChild_1_saved_item) {
$_smarty_tpl->tpl_vars['itemChild'] = $__foreach_itemChild_1_saved_item;
}
?>
				<?php }?>	
			<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>	
		</div>
	</div><?php }
}
