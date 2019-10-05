<?php
/* Smarty version 3.1.33, created on 2019-10-04 13:52:09
  from 'C:\wamp64\www\TLIAL_projet_1\TIDAL-TP-Nouhaila\app\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d974e89db9ad2_61825030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3562c3737bf2c0c39e165f2fb4445f2fda7ca857' => 
    array (
      0 => 'C:\\wamp64\\www\\TLIAL_projet_1\\TIDAL-TP-Nouhaila\\app\\views\\footer.tpl',
      1 => 1570174247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d974e89db9ad2_61825030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\TLIAL_projet_1\\TIDAL-TP-Nouhaila\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>




<p class="footer-menu">

<a target="_blank" href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/output'>PhpDocumentor</a> |
<a target="_blank" href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/webservices/WS-simple/calculatrice/addition/1/2'>Web Services caculatrice</a> |
<a target="_blank" href='<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/webservices/WS-xml'>Web Services XML</a> |

</p>


<p class="copyright">Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 | Designed by nouhaila</p>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['project_path']->value;?>
/public/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
