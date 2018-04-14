<?php
/* Smarty version 3.1.31, created on 2018-03-02 19:45:17
  from "C:\UwAmp\www\webpkj\public\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a99d3fd9fd396_34816432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a88d738788b2d4fba90c5fc9936a490c87762fcb' => 
    array (
      0 => 'C:\\UwAmp\\www\\webpkj\\public\\templates\\template.tpl',
      1 => 1518650095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a99d3fd9fd396_34816432 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2394883725a99d3fd9fbf83_00718830', "conteudo");
?>

        </div>

    </body>
</html><?php }
/* {block "conteudo"} */
class Block_2394883725a99d3fd9fbf83_00718830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conteudo' => 
  array (
    0 => 'Block_2394883725a99d3fd9fbf83_00718830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "conteudo"} */
}
