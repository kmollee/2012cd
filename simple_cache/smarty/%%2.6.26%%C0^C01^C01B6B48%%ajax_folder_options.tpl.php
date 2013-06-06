<?php /* Smarty version 2.6.26, created on 2013-04-08 20:55:46
         compiled from ajax_folder_options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'ajax_folder_options.tpl', 23, false),array('modifier', 'modify::htmlquote', 'ajax_folder_options.tpl', 31, false),array('modifier', 'modify::getpathfull', 'ajax_folder_options.tpl', 118, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "core_css.conf",'section' => $this->_tpl_vars['style']), $this);?>


<form onsubmit="tree_scroll(0); ajax('folder_rename',[tfolder,val('frenametitle'),val('ftype'),val('fdescription'),val('ficon'),val('fnotification')], locate_folder); return false;">
  <a style="float:right;" onclick="hide('tree_info');">X</a>
  <div class="tree_subpane">Rename folder</div>
  <table class="tree2" border="0" cellpadding="0" cellspacing="2">
	<tr>
	<td><label for="frenametitle">Name</label></td>
	<td><input id="frenametitle" name="first" type="Text" maxlength="40" style="width:100%;" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['folder']['name'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" required="true"></td>
	</tr>
	<?php if ($this->_tpl_vars['isdbfolder'] && $this->_tpl_vars['folder']['assets'] == 0): ?>
	<tr>
	<td><label for="ftype">Module</label></td>
	<td>
	  <select id="ftype" style="width:100%;" required="true">
	  <?php $_from = $this->_tpl_vars['sys_schemas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item'][0] == ' '): ?><optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
"/><?php else: ?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['folder']['type']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
<?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
	  </select>
	</td>
	</tr>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['isdbfolder']): ?>
	<tr>
	<td><label for="ficon">Icon</label> (<a href="#" onclick="nWin('ext/modules/folder_icons.php?obj=ficon'); return false;">?</a>)</td>
	<td>
	  <select id="ficon" style="width:100%;">
	  <option value=""> Default
	  <?php $_from = $this->_tpl_vars['sys_icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['folder']['icon']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

	  <?php endforeach; endif; unset($_from); ?>
	  </select>
	</td>
	</tr>
	<tr>
	<td style="white-space:nowrap;"><label for="fdescription">Description&nbsp;</label></td>
	<td style="width:100%;"><textarea id="fdescription" rows="4" style="width:100%; height:65px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['folder']['description'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</textarea></td>
	</tr>
	<tr>
	<td style="white-space:nowrap;">
	  <label for="fnotification">Notification&nbsp;<br/>
	  (E-mail) <a href="#" onclick="sys_alert('Syntax:\nabc@doecorp.com, cc:abcd@doecorp.com, bcc:abcde@diecorp.com,\n@Group, cc:@Group1, bcc:@Group2');">(?)</a></label>
	</td>
	<td style="width:100%;"><textarea id="fnotification" rows="2" style="width:100%; height:30px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['folder']['notification'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</textarea></td>
	</tr>
	<?php endif; ?>
	<tr><td></td><td><input type="submit" value="Ok" style="width:50px;"></td></tr>
  </table>
</form>
<div style="border-top: <?php echo $this->_config[0]['vars']['border']; ?>
; margin-top:5px; margin-bottom:10px;"></div>

<form onsubmit="tree_scroll(0); ajax('folder_create',[val('cmultiple')?val('fmultiple'):tfolder,val('ftitle'),val('ftype_new'),val('fdescription_new'),val('ficon_new'),val('ffirst')], locate_folder); return false;">
  <div class="tree_subpane">New folder</div>
  <table class="tree2" border="0" cellpadding="0" cellspacing="2">
	<tr>
	<td><label for="ftitle">Name</label></td>
	<td><input id="ftitle" type="Text" maxlength="40" style="width:100%;" value="" required="true"></td>
	</tr>
	<?php if ($this->_tpl_vars['isdbfolder']): ?>
	<tr>
	<td><label for="ftype_new">Module</label></td>
	<td>
	  <select id="ftype_new" style="width:100%;" required="true">
	  <?php $_from = $this->_tpl_vars['sys_schemas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item'][0] == ' '): ?><optgroup label="<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
"/><?php else: ?><option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['folder']['type']): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
<?php endif; ?>
	  <?php endforeach; endif; unset($_from); ?>
	  </select>
	</td>
	</tr>
	<tr>
	<td><label for="ficon_new">Icon</label> (<a href="#" onclick="nWin('ext/modules/folder_icons.php?obj=ficon_new'); return false;">?</a>)</td>
	<td>
	  <select id="ficon_new" style="width:100%;">
	  <option value=""> Default
	  <?php $_from = $this->_tpl_vars['sys_icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" <?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['folder']['icon']): ?>selected<?php endif; ?>> <?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

	  <?php endforeach; endif; unset($_from); ?>
	  </select>
	</td>
	</tr>
	<tr>
	<td style="white-space:nowrap;"><label for="fdescription_new">Description&nbsp;</label></td>
	<td style="width:100%;"><textarea id="fdescription_new" rows="4" style="width:100%; height:65px;"></textarea></td>
	</tr>
	<tr>
	<td><label for="ffirst">First in list</label></td>
	<td><input id="ffirst" type="checkbox" value="1" checked class="checkbox"></td>
	</tr>
	<tr>
	<td><label for="cmultiple">Multiple</label></td>
	<td><input id="cmultiple" type="checkbox" value="1" class="checkbox" onchange="showhide('fmultiple_line');">
	</td>
	</tr>
	<tr id="fmultiple_line" style="display:none;">
	<td><label for="fmultiple">Parent folder</label></td>
	<td><input id="fmultiple" type="Text" style="width:100%;" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['folder']['id'])) ? $this->_run_mod_handler('modify::getpathfull', true, $_tmp, false, "/") : modify::getpathfull($_tmp, false, "/")))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
/*/">
	</td>
	</tr>
	<?php endif; ?>
	<tr><td></td><td><input type="submit" value="Ok" style="width:50px;"></td></tr>
  </table>
</form>
<div style="border-top: <?php echo $this->_config[0]['vars']['border']; ?>
; margin-top:5px; margin-bottom:5px;"></div>