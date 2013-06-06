<?php /* Smarty version 2.6.26, created on 2013-05-31 17:21:37
         compiled from ajax_folder_categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'ajax_folder_categories.tpl', 23, false),array('modifier', 'modify::htmlquote', 'ajax_folder_categories.tpl', 27, false),array('modifier', 'replace', 'ajax_folder_categories.tpl', 50, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "core_css.conf",'section' => $this->_tpl_vars['style']), $this);?>


<form id="tcategories" action="index.php" method="get">
  <input type="hidden" name="tpreview" value="1"/>
  <input type="hidden" name="folders[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['t']['folder'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
"/>
  <a style="float:right;" onclick="hide('tree_info');">X</a>
  <div class="tree_subpane">Merge folders permanently</div>
  <table border="0" cellpadding="0" cellspacing="0" style="margin:3px;">
	<tr>
	  <td style="padding:2px; padding-right:6px;">
		<input type="checkbox" class="checkbox" onclick="tree_selectall(this.checked);">
	  </td>
      <td style="width:100%; height:22px;">
		<input type="submit" value="S a v e" onclick="return tree_categories_save();">&nbsp;
		<input type="button" value="Preview" onclick="this.form.submit();">
	  </td>
	</tr>
  </table>
  <table border="0" cellpadding="0" cellspacing="0" style="margin-left:3px;">  
	<?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
	  <tr style="padding:0px; margin:0px;">
	    <td valign="top" style="padding-right:3px; padding-left:2px;">
	    <input style="margin-top:3px;" type="checkbox" class="checkbox" id="tcat_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" name="folders[]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" <?php if (in_array ( $this->_tpl_vars['item']['id'] , $this->_tpl_vars['folders'] )): ?>checked<?php endif; ?>>
		</td><td valign="top">
		  <?php if ($this->_config[0]['vars']['bg_light_blue'] == "#B6BDD2"): ?>
			<img style="margin:3px; margin-bottom:0px; vertical-align:top;" src="ext/icons/folder1.gif">
		  <?php else: ?>
			<img style="margin:3px; margin-bottom:0px; vertical-align:top;" src="images.php?image=folder1&color=<?php echo ((is_array($_tmp=$this->_config[0]['vars']['bg_light_blue'])) ? $this->_run_mod_handler('replace', true, $_tmp, "#", "") : smarty_modifier_replace($_tmp, "#", "")); ?>
">
		  <?php endif; ?>
		</td><td class="default"><label for="tcat_<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['path'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</label></td></tr>
	<?php endforeach; else: ?>
	  <tr><td class="default"><div style="margin-top:3px;">&nbsp;No entries found.</div></td></tr>	
    <?php endif; unset($_from); ?>
  </table>
  <div style="border-top: <?php echo $this->_config[0]['vars']['border']; ?>
; margin-top:5px; margin-bottom:5px;"></div>
</form>