<?php
/* Smarty version 3.1.31, created on 2018-04-06 07:31:07
  from "/opt/lampp/htdocs/webpkj/public/templates/template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ac7061b1c55c6_95159166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '662e658ac347ab46f37a0d9ddf915811729e79be' => 
    array (
      0 => '/opt/lampp/htdocs/webpkj/public/templates/template.tpl',
      1 => 1522992662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac7061b1c55c6_95159166 (Smarty_Internal_Template $_smarty_tpl) {
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
        import('bind2');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20971138175ac7061b1c2a26_34326052', "conteudo");
?>

        </div>

    </body>
</html><?php }
/* {block "conteudo"} */
class Block_20971138175ac7061b1c2a26_34326052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conteudo' => 
  array (
    0 => 'Block_20971138175ac7061b1c2a26_34326052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "conteudo"} */
}
