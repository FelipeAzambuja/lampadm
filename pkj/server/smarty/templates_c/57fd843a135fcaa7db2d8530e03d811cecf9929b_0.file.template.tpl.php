<?php
/* Smarty version 3.1.31, created on 2018-02-23 03:44:24
  from "C:\Winginx\home\webpkj\public_html\public\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8fb8483d49b2_24481562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57fd843a135fcaa7db2d8530e03d811cecf9929b' => 
    array (
      0 => 'C:\\Winginx\\home\\webpkj\\public_html\\public\\templates\\template.tpl',
      1 => 1518650095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8fb8483d49b2_24481562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Crud Simples</title>
        <?php 
        import('jquery');
        import('bind');
        import('pkj');
        import('bootstrap');
//        import('ui');
        import('mask');
        import('datatables');
        ?>
    </head>
    <body>
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9470606425a8fb8483d3632_24391005', "conteudo");
?>

        </div>

    </body>
</html><?php }
/* {block "conteudo"} */
class Block_9470606425a8fb8483d3632_24391005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conteudo' => 
  array (
    0 => 'Block_9470606425a8fb8483d3632_24391005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "conteudo"} */
}
