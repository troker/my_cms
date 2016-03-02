<?php
/* Smarty version 3.1.29, created on 2016-02-29 17:52:46
  from "D:\soft\OpenServer\domains\localhost\vieus\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d45b3e036372_09990856',
  'file_dependency' => 
  array (
    '5bd45dab33efae005ec6f7261f2ca7b7fa553ce6' => 
    array (
      0 => 'D:\\soft\\OpenServer\\domains\\localhost\\vieus\\default\\header.tpl',
      1 => 1456757555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolum.tpl' => 1,
  ),
),false)) {
function content_56d45b3e036372_09990856 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="<?php echo TemplateWebPath;?>
css/main.css">
</head>
<body>
	<div id="header">
		<h1>my shop</h1>
	</div>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolum.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div id="centerColum">
		
<?php }
}
