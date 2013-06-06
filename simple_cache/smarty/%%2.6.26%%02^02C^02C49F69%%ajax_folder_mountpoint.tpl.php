<?php /* Smarty version 2.6.26, created on 2013-05-31 17:21:20
         compiled from ajax_folder_mountpoint.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'ajax_folder_mountpoint.tpl', 23, false),array('modifier', 'modify::htmlquote', 'ajax_folder_mountpoint.tpl', 25, false),array('modifier', 'replace', 'ajax_folder_mountpoint.tpl', 33, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => "core_css.conf",'section' => $this->_tpl_vars['style']), $this);?>


<form id="tree_mountpoint_form" rel="<?php echo ((is_array($_tmp=$this->_tpl_vars['mountpoint'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
" onsubmit="tree_scroll(0); ajax('folder_set_mountpoint',[tfolder,mountpoint_build()],locate_folder); return false;">
  <a style="float:right;" onclick="hide('tree_info');">X</a>
  <div class="tree_subpane">Mountpoint</div>
  <table class="tree2" border="0" cellpadding="0" cellspacing="2">
	<tr><td>Type&nbsp;</td><td>
      <select name="first" id="mount_proto" onchange="mountpoint_show(this.value);" style="width:100%;">
		<option value=""> none
		<?php $_from = $this->_tpl_vars['mountpoints']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
		  <option value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'sys_nodb_', "") : smarty_modifier_replace($_tmp, 'sys_nodb_', "")))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

		<?php endforeach; endif; unset($_from); ?>
	  </select>
	</td>
	</tr>
	<tbody id="mount_auth" style="display:none;">
	  <tr><td>Username&nbsp;</td><td><input id="mount_user" type="Text" maxlength="255" style="width:100%;" value="" class="mp"></td></tr>
	  <tr><td>Password</td><td><input id="mount_pass" type="password" maxlength="255" style="width:100%;" value="" class="mp"><br/>
	  <input id="mount_pass_check" type="checkbox" onclick="getObj('mount_pass').type = this.checked ? 'text':'password';"><label for="mount_pass_check">Show password</label></td></tr>
	</tbody>
	<tbody id="mount_details" style="display:none;">
	  <tr><td>Host</td><td><input id="mount_host" type="Text" maxlength="255" style="width:100%;" value="" class="mp"></td></tr>
	  <tr><td>Port</td><td>
		<input id="mount_port" type="Text" maxlength="255" style="width:50%;" value="" class="mp mp2">&nbsp;
		<select id="mount_enc" style="width:45%;"><option value=""> none <option value="ssl"> SSL <option value="tls"> TLS</select>
	  </td></tr>
	  <tr><td>Options</td><td><input id="mount_options" type="Text" maxlength="255" style="width:100%;" value="" class="mp mp2"></td></tr>
	</tbody>
	<tr><td>Path</td><td><input id="mount_path" type="Text" maxlength="255" style="width:100%;" value=""></td></tr>
	<tr><td></td><td><input type="Submit" value="Ok" style="width:50px;"></td></tr>
  </table>
  <div style="border-top: <?php echo $this->_config[0]['vars']['border']; ?>
; margin-top:5px; margin-bottom:5px;"></div>
</form>