<?php
/* Smarty version 3.1.31, created on 2018-02-23 03:44:24
  from "C:\Winginx\home\webpkj\public_html\public\smarty.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8fb848211837_61307239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5de19c2e17dd2312bb61b762c8456d4125fbd48' => 
    array (
      0 => 'C:\\Winginx\\home\\webpkj\\public_html\\public\\smarty.tpl',
      1 => 1514435767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8fb848211837_61307239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19945140295a8fb8481de130_63736256', "conteudo");
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "public/templates/template.tpl");
}
/* {block "conteudo"} */
class Block_19945140295a8fb8481de130_63736256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'conteudo' => 
  array (
    0 => 'Block_19945140295a8fb8481de130_63736256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="row" >
        <?php echo label_text("Nome","nome",6);?>

        <?php echo label_text("Sobrenome","sobrenome",6);?>

        <?php echo label_combo("Estado","estado",array("solido","liquido"),array("Solido","Liquido"),6);?>

        <?php echo label_upload("Foto","foto",6);?>

        <?php echo label_password("Senha","senha",12);?>

        <?php echo label_calendar("Nascimento","nascimento",3);?>

        <?php echo label_mask("CPF","cpf","999.999.999-99",3);?>

        <?php echo label_money("Saldo","saldo",3);?>

        <?php echo label_number("Idade","idade",3);?>

        <?php echo check("estado","Vivo",'',3);?>

        <?php echo radio("sexo","Masculino","sexo",3);?>

        <?php echo radio("sexo","Feminino","sexo",3);?>

        <?php echo button("Teste","click='teste()'  lock",2);?>

        <?php echo button("Teste","click='teste2()'  lock",1);?>

        <?php 

        function teste( $form ) {
            alert( $form[ "nome" ] ) ;
        }
        ?>
    </form>

    <table class="datatables" ajax="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
ajax/pessoas" >
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody >

        </tbody>
    </table>
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pessoas']->value, 'pessoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pessoa']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['pessoa']->value->id;?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    
<?php
}
}
/* {/block "conteudo"} */
}
