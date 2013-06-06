<?php /* Smarty version 2.6.26, created on 2013-05-31 17:21:56
         compiled from ajax_folder_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'ajax_folder_info.tpl', 23, false),array('modifier', 'modify::htmlquote', 'ajax_folder_info.tpl', 29, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "core_css.conf",'section' => $this->_tpl_vars['style']), $this);?>


<a style="float:right;" onclick="hide('tree_info');">X</a>
<div class="tree_subpane">Info</div>
<table class="tree2" border="0" cellpadding="0" cellspacing="2" style="margin-left:4px;">
  <?php $_from = $this->_tpl_vars['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
	<tr><td><?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</td></tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<div style="border-top: <?php echo $this->_config[0]['vars']['border']; ?>
; margin-top:5px; margin-bottom:5px;"></div>