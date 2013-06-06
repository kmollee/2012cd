<?php /* Smarty version 2.6.26, created on 2013-03-30 10:39:17
         compiled from asset_admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'modify::get_form_token', 'asset_admin.tpl', 53, false),array('modifier', 'modify::htmlquote', 'asset_admin.tpl', 99, false),array('modifier', 'sgsml_parser::sql_version', 'asset_admin.tpl', 102, false),array('modifier', 'php_uname', 'asset_admin.tpl', 103, false),array('modifier', 'admin::apc_stats', 'asset_admin.tpl', 106, false),array('modifier', 'admin::disk_stats', 'asset_admin.tpl', 107, false),)), $this); ?>
<table class="data data_page"><tr><td>

<div style="margin-bottom:30px; margin-top:5px;">
<div style="float:right;">
<a href="http://www.simple-groupware.de/cms/AdministrationMenu" target="_blank">Help</a>
</div>
<div class="bold">Administration</div>
<hr>
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_users">Users</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_groups">Groups</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_identities">Mail identities</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_tree&view=permissions">Permissions</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_events">Events</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_stats">Statistics</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_nodb_backups">Backups</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&folder=^trash">Trash</a>
<br/><br/>
<a href="browser.php" target="_blank">Web File Browser</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_console">Console scripts</a> |
<a href="console.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&console=sys" target="_blank">SYS Console</a> |
<a href="console.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&console=sql" target="_blank">SQL Console</a> |
<a href="console.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&console=php" target="_blank">PHP Console</a> |
<a href="cron.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&debug" target="_blank">Cron</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=phpinfo" target="_blank">Phpinfo</a>
</div>

<div style="margin-bottom:30px;">
<div class="bold">Database</div>
<hr>
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_tables">Optimize Tables</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=rebuild_search&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
">Rebuild search index</a> |
<a href="console.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&console=sql&name=show+processlist&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
">Processes</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_nodb_status">Status</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_nodb_tablesizes">Table sizes</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_nodb_tables">Table status</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_nodb_variables">Variables</a><br>
<br>
Clear Data:
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_events&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('REALLY delete ALL datasets ?');">Events</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_statistics&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('REALLY delete ALL datasets ?');">Statistics</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_trash&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('REALLY delete ALL datasets ?');">Trash</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_notifications&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('REALLY delete ALL datasets ?');">Notifications</a>
</div>

<div style="margin-bottom:30px;">
<div class="bold">Caches</div>
<hr>
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clean_cache">Clean Cache</a> ||
Clear Cache:
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_output">Output</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_schema">Schema</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_schemadata">Schema data</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_debug">Debug-dir</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_cms">CMS</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_ip">IP</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_upload">Uploaded files</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_email">E-mail</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_locking">Locking</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_session&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
">Sessions</a><br>
</div>

<div style="margin-bottom:30px;">
<div class="bold">Setup</div>
<hr>
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=edit_setup">Change Setup settings</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=clear_setup&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('Really run setup again ?');">Run Setup again</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&action_sys=maintenance&token=<?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('modify::get_form_token', true, $_tmp) : modify::get_form_token($_tmp)); ?>
" onclick="return confirm('Really apply the changes ?');">Switch maintenance mode</a> |
<a href="index.php?<?php echo $this->_tpl_vars['urladdon']; ?>
&find=folder|simple_sys_tree|1|ftype=sys_custom_fields">Field customization</a><br>
<br>
<b><a href="updater.php">Update Simple Groupware</a> | <a href="extensions.php">Simple Groupware Extensions</a></b>
</div>

<div style="margin-bottom:30px;">
<div class="bold">Support</div>
<hr>
<pre>
Simple Groupware version: <?php echo ((is_array($_tmp=$this->_tpl_vars['sys']['version_str'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

Simple Groupware language: <?php echo ((is_array($_tmp=@SETUP_LANGUAGE)) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

PHP Version: <?php echo ((is_array($_tmp=@PHP_VERSION)) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

Database + Version: <?php echo ((is_array($_tmp=@SETUP_DB_TYPE)) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
 <?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('sgsml_parser::sql_version', true, $_tmp) : sgsml_parser::sql_version($_tmp)); ?>

Server OS: <?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('php_uname', true, $_tmp) : php_uname($_tmp)); ?>

Webserver: <?php echo ((is_array($_tmp=$_SERVER['SERVER_SOFTWARE'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>

Webbrowser: <script>document.write(navigator.userAgent);</script>
APC cache usage: <b><?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('admin::apc_stats', true, $_tmp) : admin::apc_stats($_tmp)); ?>
</b>
Disk usage: <b><?php echo ((is_array($_tmp="")) ? $this->_run_mod_handler('admin::disk_stats', true, $_tmp) : admin::disk_stats($_tmp)); ?>
</b>
</pre>
<hr>
<a href="http://groups.google.com/group/simple-groupware" target="_blank">Forum</a> (Give Feedback<i>!</i>) |
<a href="http://sourceforge.net/tracker/?func=add&group_id=96330&atid=614418" target="_blank">Support request</a> |
<a href="http://sourceforge.net/tracker/?func=add&group_id=96330&atid=614420" target="_blank">Feature request</a> |
<a href="http://sourceforge.net/tracker/?func=add&group_id=96330&atid=614419" target="_blank">Submit a patch</a>
</div>

<div style="margin-bottom:30px;">
<div class="bold">Documentation</div>
<hr>
<a href="http://www.simple-groupware.de/cms/Main/Documentation" target="_blank">Documentation</a> |
<a href="http://www.simple-groupware.de/cms/Main/Administration" target="_blank">Administration</a> |
<a href="http://www.simple-groupware.de/cms/Main/FAQ" target="_blank">FAQ</a>
</div>

<div style="margin-bottom:10px;">
<div class="bold">Simple Groupware <?php echo ((is_array($_tmp=$this->_tpl_vars['sys']['version_str'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?>
</div>
<hr>
<a href="../docs/about.html" target="_blank">About</a> |
<a href="LICENSE.txt" target="_blank">License</a> |
<a href="../docs/Changelog.txt" target="_blank">Changelog</a>
<br><br>
<a href="http://www.simple-groupware.de" target="_blank">Simple Groupware Homepage</a> |
<a href="http://sourceforge.net/projects/simplgroup/" target="_blank">Sourceforge</a> |
<a href="http://freecode.com/projects/simplegroupware/" target="_blank">Freecode</a> |
<a href="http://www.facebook.com/SimpleGroupware" target="_blank">Facebook</a>
</div>

</td></tr></table>