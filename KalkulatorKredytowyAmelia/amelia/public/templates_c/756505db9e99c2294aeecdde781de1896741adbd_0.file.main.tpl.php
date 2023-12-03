<?php
/* Smarty version 4.3.4, created on 2023-12-03 10:59:21
  from 'C:\xampp\htdocs\amelia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656c5179235ce9_08842217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756505db9e99c2294aeecdde781de1896741adbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\templates\\main.tpl',
      1 => 1701597369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656c5179235ce9_08842217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['data']->value->desc;?>
">
	<title><?php echo $_smarty_tpl->tpl_vars['data']->value->title;?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css?v=<?php echo '<?php'; ?>
 echo time(); <?php echo '?>'; ?>
">	
</head>

<body>

<div class="header">
	<h1><?php echo $_smarty_tpl->tpl_vars['data']->value->title;?>
</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['data']->value->desc;?>
</h1>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234374006656c51792357d2_00622359', 'content');
?>

</div><!-- content -->

</body>
</html><?php }
/* {block 'content'} */
class Block_234374006656c51792357d2_00622359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_234374006656c51792357d2_00622359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść .... <?php
}
}
/* {/block 'content'} */
}
