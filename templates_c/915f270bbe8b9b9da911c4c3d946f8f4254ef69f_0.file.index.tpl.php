<?php
/* Smarty version 3.1.32, created on 2018-05-25 12:23:11
  from '/Users/s01723/Desktop/0525/practice/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b07819fa01907_42720533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915f270bbe8b9b9da911c4c3d946f8f4254ef69f' => 
    array (
      0 => '/Users/s01723/Desktop/0525/practice/index.tpl',
      1 => 1527218547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5b07819fa01907_42720533 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo @constant('MY_TITLE');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>$_prefixVariable1), 0, false);
?>

<dl>
  <dt>現在の タイムスタンプ
  <dd> <?php echo time();?>


  <dt>現在処理中のテンプレートファイル名
  <dd> <?php echo basename($_smarty_tpl->source->filepath);?>


  <dt>このテンプレートをコンパイルした Smarty のバージョン
  <dd> <?php echo Smarty::SMARTY_VERSION;?>

</dl>

<p> <?php echo $_smarty_tpl->tpl_vars['hello']->value;?>


<p> <?php echo $_smarty_tpl->tpl_vars['today']->value->format('Y-m-d (D)');?>


<ul>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['animal']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = $__section_i_0_loop - 1;
$__section_i_0_total = min(($__section_i_0_start+ 1), $__section_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] -= 1){
?>
    <li> <?php echo $_smarty_tpl->tpl_vars['animal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>

<?php
}
}
?>
</ul>

<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['address']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<ul>
  <li> name: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>

  <li> home: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['home'];?>

  <li> cell: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cell'];?>

  <li> e-mail: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>

</ul>
<?php
}
}
}
}
