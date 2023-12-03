<?php
/* Smarty version 4.3.4, created on 2023-12-03 10:59:21
  from 'C:\xampp\htdocs\amelia\app\views\Calculator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656c5179227f02_99907182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e92bbb902fa4d3d40b55f92c27c30e2c5172bed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\Calculator.tpl',
      1 => 1701595441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656c5179227f02_99907182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_557044480656c517921d540_81353435', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_557044480656c517921d540_81353435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_557044480656c517921d540_81353435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calc" method="post">

			<label for="amount">Kwota kredytu: </label>
			<input id="amount" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->kwota;?>
"><br /><br />
			<label for="interest">Oprocentowanie roczne: </label>
			<input id="interest" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->opr;?>
"><br /><br />
			<label for="duration">Ilość miesięcy: </label>
			<input id="duration" type="text" name="okres" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->okres;?>
"><br /><br />
			<button type="submit">Wylicz</button>
		
	</form>

	<div class="messages">
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
			<h4>Informacje: </h4>
			<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
			<h4>Wynik</h4>
			<p class="res"><?php echo round($_smarty_tpl->tpl_vars['result']->value,2);?>
</p>
		<?php }?>
	</div>

<?php
}
}
/* {/block 'content'} */
}
