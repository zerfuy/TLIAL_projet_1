<?php
/* Smarty version 3.1.33, created on 2019-09-22 15:24:18
  from 'C:\wamp64\www\TLIAL_projet_1\TIDAL-TP-Nouhaila\app\views\FilterResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d879222311286_73381858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8806879a796e94546782dfc9e4d3312ac72ef18' => 
    array (
      0 => 'C:\\wamp64\\www\\TLIAL_projet_1\\TIDAL-TP-Nouhaila\\app\\views\\FilterResult.tpl',
      1 => 1569101693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d879222311286_73381858 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <?php if (!empty($_smarty_tpl->tpl_vars['pathologies']->value)) {?><!--si le résultat n'est pas vide -->
    <tr>
        <th>Code Méridien</th><th>Nom Méridien</th><th>Type</th><th>Description</th>
    </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathologies']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['code'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['nom'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <tr>
        <td>Aucun resultat trouvé</td>
    </tr>
    <?php }?>
</table><?php }
}
