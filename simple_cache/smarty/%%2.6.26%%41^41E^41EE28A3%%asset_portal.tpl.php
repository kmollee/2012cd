<?php /* Smarty version 2.6.26, created on 2013-06-02 10:36:57
         compiled from asset_portal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'modify::htmlquote', 'asset_portal.tpl', 35, false),array('modifier', 'modify::target', 'asset_portal.tpl', 64, false),array('modifier', 'modify::link', 'asset_portal.tpl', 64, false),array('modifier', 'default', 'asset_portal.tpl', 66, false),array('modifier', 'replace', 'asset_portal.tpl', 66, false),array('modifier', 'implode', 'asset_portal.tpl', 66, false),array('modifier', 'modify::field', 'asset_portal.tpl', 142, false),array('modifier', 'escape', 'asset_portal.tpl', 189, false),array('function', 'counter', 'asset_portal.tpl', 60, false),array('function', 'cycle', 'asset_portal.tpl', 72, false),array('block', 'repeat', 'asset_portal.tpl', 128, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('tab_key', 'general'); ?><?php echo ''; ?><?php $this->assign('col_counter', '0'); ?><?php echo ''; ?><?php $this->assign('last_groupitem', '_'); ?><?php echo ''; ?><?php $this->assign('cols', $this->_tpl_vars['t']['views'][$this->_tpl_vars['t']['view']]['COLS']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['sys']['browser']['is_mobile']): ?><?php echo ''; ?><?php $this->assign('cols', '1'); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['t']['datasets'] > 0): ?><?php echo '<table border="0" cellpadding="0" cellspacing="0" style="width:100%;"><tr>'; ?><?php $_from = $this->_tpl_vars['t']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fouter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fouter']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['data_key'] => $this->_tpl_vars['data_item']):
        $this->_foreach['fouter']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['data_item']['fullwidth']['data'][0] && $this->_tpl_vars['col_counter'] != 0): ?><?php echo '</tr><tr>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('col_counter', $this->_tpl_vars['col_counter']+1); ?><?php echo '<td id="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '_frame" '; ?><?php if ($this->_tpl_vars['data_item']['fullwidth']['data'][0]): ?><?php echo 'colspan="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['cols'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '"'; ?><?php endif; ?><?php echo ' style="'; ?><?php if ($this->_tpl_vars['col_counter'] < $this->_tpl_vars['cols'] && ! $this->_tpl_vars['data_item']['fullwidth']['data'][0]): ?><?php echo 'padding-right:2px;'; ?><?php endif; ?><?php echo ' padding-bottom:4px; height:100%;" valign="top">'; ?><?php if (! $this->_tpl_vars['iframe']): ?><?php echo ''; ?><?php $this->assign('table', '1'); ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['t']['groupby'] != "" && $this->_tpl_vars['data_item'][$this->_tpl_vars['t']['groupby']]['data'][0] != $this->_tpl_vars['last_groupitem'] && ( $this->_tpl_vars['data_item'][$this->_tpl_vars['t']['groupby']]['filter'][0] || $this->_tpl_vars['last_groupitem'] != '_' )): ?><?php echo ''; ?><?php echo smarty_function_counter(array('assign' => 'group_counter'), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['table']): ?><?php echo '<table border="0" cellspacing="0" cellpadding="0" class="data" style="border:0px; margin-top:6px; margin-bottom:8px;">'; ?><?php endif; ?><?php echo '<tr><td class="item_groupby" colspan="20">'; ?><?php if ($this->_tpl_vars['t']['links'][$this->_tpl_vars['t']['groupby']][1]): ?><?php echo '<a target="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['t']['linkstext'][$this->_tpl_vars['t']['groupby']][0])) ? $this->_run_mod_handler('modify::target', true, $_tmp) : modify::target($_tmp)))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" href="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['t']['links'][$this->_tpl_vars['t']['groupby']][1])) ? $this->_run_mod_handler('modify::link', true, $_tmp, $this->_tpl_vars['data_item'], 0, $this->_tpl_vars['urladdon']) : modify::link($_tmp, $this->_tpl_vars['data_item'], 0, $this->_tpl_vars['urladdon'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">@</a>&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['t']['linkstext'][$this->_tpl_vars['t']['groupby']][1]): ?><?php echo '<a target="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['t']['linkstext'][$this->_tpl_vars['t']['groupby']][0])) ? $this->_run_mod_handler('modify::target', true, $_tmp) : modify::target($_tmp)))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" id="linktext" href="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['t']['linkstext'][$this->_tpl_vars['t']['groupby']][1])) ? $this->_run_mod_handler('modify::link', true, $_tmp, $this->_tpl_vars['data_item'], 0, $this->_tpl_vars['urladdon']) : modify::link($_tmp, $this->_tpl_vars['data_item'], 0, $this->_tpl_vars['urladdon'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['t']['fields'][$this->_tpl_vars['t']['groupby']]['DISPLAYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['t']['groupby']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['t']['groupby'])))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', ' ') : smarty_modifier_replace($_tmp, '_', ' ')))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ': '; ?><?php echo ((is_array($_tmp=((is_array($_tmp=implode($this->_tpl_vars['data_item'][$this->_tpl_vars['t']['groupby']]['filter'], $this->_tpl_vars['t']['fields'][$this->_tpl_vars['t']['groupby']]['SEPARATOR']))) ? $this->_run_mod_handler('default', true, $_tmp, 'none') : smarty_modifier_default($_tmp, 'none')))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ''; ?><?php if ($this->_tpl_vars['t']['linkstext'][$this->_tpl_vars['t']['groupby']][1]): ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php if ($this->_tpl_vars['table']): ?><?php echo '</table>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('last_groupitem', $this->_tpl_vars['data_item'][$this->_tpl_vars['t']['groupby']]['data'][0]); ?><?php echo ''; ?><?php if ($this->_tpl_vars['cycle_dataitem'] != 'items_even'): ?><?php echo ''; ?><?php echo smarty_function_cycle(array('assign' => 'cycle_dataitem','values' => "items_even,items_odd"), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '<table cellspacing="0" class="data" style="margin:0px;"><tr rel="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" class="mdown '; ?><?php if ($this->_tpl_vars['data_item']['_bgstyle']): ?><?php echo 'id_header_bg'; ?><?php else: ?><?php echo 'id_header'; ?><?php endif; ?><?php echo ' asset_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" style="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_bgstyle'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">'; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['tab_key'] == 'general' || $this->_tpl_vars['t']['template'] == "asset_display.tpl" || $this->_tpl_vars['t']['disable_tabs'] ) && ! $this->_tpl_vars['iframe']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['t']['template'] != "asset_display.tpl"): ?><?php echo ''; ?><?php if ($this->_tpl_vars['data_item']['issum']): ?><?php echo '<td style="width:10px; white-space:nowrap;">Total</td>'; ?><?php elseif (! $this->_tpl_vars['data_item']['issum']): ?><?php echo '<td style="white-space:nowrap;">'; ?><?php if (! $this->_tpl_vars['iframe']): ?><?php echo '<input type="checkbox" name="item[]" id="check_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" class="asset_check checkbox">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sys']['browser']['name'] != 'opera'): ?><?php echo '<span rel="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" class="drag_asset"><img src="ext/icons/drag2.gif"></span>'; ?><?php endif; ?><?php echo '</td>'; ?><?php if (count ( $this->_tpl_vars['t']['folders'] ) > 1): ?><?php echo '<td style="padding:0px; padding-left:4px;"><div class="folder_block2" style="background-color: '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['t']['folders'][$this->_tpl_vars['data_item']['_folder']][1])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ';">&nbsp;</div></td>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if (! $this->_tpl_vars['data_item']['issum'] && $this->_tpl_vars['tab_key'] == 'general'): ?><?php echo '<td style="width:10px; '; ?><?php if (count ( $this->_tpl_vars['t']['folders'] ) > 1): ?><?php echo 'background-color: '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['t']['folders'][$this->_tpl_vars['data_item']['_folder']][1])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ';'; ?><?php endif; ?><?php echo '" ><div style="white-space:nowrap;">'; ?><?php if (! $this->_tpl_vars['iframe']): ?><?php echo '<input type="checkbox" name="item[]" id="check_'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" value="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" class="asset_check checkbox checkbox2">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sys']['browser']['name'] != 'opera'): ?><?php echo '<span rel="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" class="drag_asset"><img src="ext/icons/drag.gif" style="padding-top:1px;"></span>'; ?><?php endif; ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['data_item']['tlevel'] )): ?><?php echo '&nbsp;<img src="ext/images/empty.gif" style="width:1px; height:19px;"/>'; ?><?php $this->_tag_stack[] = array('repeat', array('count' => $this->_tpl_vars['data_item']['tlevel'])); $_block_repeat=true;smarty_block_repeat($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '<img src="ext/icons/line.gif">'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_repeat($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '<img src="ext/icons/folder1.gif">'; ?><?php endif; ?><?php echo '</div></td>'; ?><?php elseif ($this->_tpl_vars['data_item']['issum'] && $this->_tpl_vars['tab_key'] == 'general'): ?><?php echo '<td style="width:10px;">&nbsp;&sum;</td>'; ?><?php else: ?><?php echo '<td style="width:1px;"></td>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '<td style="width:100%;"><div style="height:16px; overflow:hidden;"><a href="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['url']['filter'][0])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data_item']['bookmarkname']['filter'][0])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)))) ? $this->_run_mod_handler('modify::field', true, $_tmp) : modify::field($_tmp)); ?><?php echo '</a>&nbsp;<a href="#" onclick="portal_change(\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '_frame\',60); return false;"> + </a>/<a href="#" onclick="portal_change(\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '_frame\',-60); return false;"> &ndash;&nbsp;</a></div></td>'; ?><?php $this->assign('style', ""); ?><?php echo ''; ?><?php echo '<td valign="top" style="padding-right:0px; text-align:right; '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['style'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '"><div style="padding-right:4px; '; ?><?php if (! $this->_tpl_vars['sys']['browser']['is_mobile']): ?><?php echo 'white-space:nowrap;'; ?><?php endif; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['t']['nosinglebuttons'] || $this->_tpl_vars['popup'] || $this->_tpl_vars['data_item']['issum'] || $this->_tpl_vars['iframe'] || $this->_tpl_vars['print'] == 1): ?><?php echo '&nbsp;'; ?><?php else: ?><?php echo ''; ?><?php if (count ( $this->_tpl_vars['t']['singlebuttons'] ) != 0 && ! $this->_tpl_vars['t']['nosinglebuttons']): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['t']['singlebuttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if (( ! $this->_tpl_vars['item']['RIGHT'] || $this->_tpl_vars['t']['rights'][$this->_tpl_vars['item']['RIGHT']] ) && ( ! $this->_tpl_vars['item']['CONDITION'] || modify ( 'match' , $this->_tpl_vars['data_item'] , $this->_tpl_vars['item']['CONDITION'] , $this->_tpl_vars['t']['fields'] ) )): ?><?php echo '&nbsp;<a href="#" onclick="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['ONCLICK'])) ? $this->_run_mod_handler('modify::link', true, $_tmp, $this->_tpl_vars['data_item']) : modify::link($_tmp, $this->_tpl_vars['data_item'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ' return false;" style="white-space:nowrap;">'; ?><?php if ($this->_tpl_vars['item']['ICON']): ?><?php echo '<img src="ext/icons/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ICON'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" title="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['DISPLAYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['NAME']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['NAME'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['item']['ICON'] || $this->_tpl_vars['sys']['browser']['is_mobile']): ?><?php echo '&nbsp;'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['DISPLAYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['NAME']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['NAME'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['t']['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['item']['SHOWINSINGLEVIEW'] == 'true' && $this->_tpl_vars['item']['VISIBILITY'] != 'hidden' && $this->_tpl_vars['item']['VISIBILITY'] != 'active' && $this->_tpl_vars['key'] != $this->_tpl_vars['t']['view'] && ( ! $this->_tpl_vars['item']['RIGHT'] || $this->_tpl_vars['t']['rights'][$this->_tpl_vars['item']['RIGHT']] )): ?><?php echo '&nbsp;<a href="index.php?'; ?><?php echo $this->_tpl_vars['urladdon']; ?><?php echo '&item[]='; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '&view='; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" style="white-space:nowrap;">'; ?><?php if ($this->_tpl_vars['item']['ICON']): ?><?php echo '<img src="ext/icons/'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ICON'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '" title="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['DISPLAYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['NAME']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['NAME'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['item']['ICON'] || $this->_tpl_vars['sys']['browser']['is_mobile']): ?><?php echo '&nbsp;'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['item']['DISPLAYNAME'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['item']['NAME']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['item']['NAME'])))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo '</a>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo '</div></td></tr></table>'; ?><?php if ($this->_tpl_vars['data_item']['url']['data'][0] != "about:blank"): ?><?php echo '<table border="0" cellpadding="0" cellspacing="0" style="width:100%;"><tr><td valign="top" style="padding-top:2px;"><iframe name="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '_frame" style="border:0px; width:100%; height:'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['data_item']['height']['filter'][0])) ? $this->_run_mod_handler('default', true, $_tmp, '200') : smarty_modifier_default($_tmp, '200')))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo 'px;" src="'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['data_item']['url']['data'][0])) ? $this->_run_mod_handler('default', true, $_tmp, "about:blank") : smarty_modifier_default($_tmp, "about:blank")))) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ''; ?><?php if (sys_is_internal_url ( $this->_tpl_vars['data_item']['url']['data'][0] )): ?><?php echo '&iframe=1'; ?><?php endif; ?><?php echo '"></iframe></td></tr></table>'; ?><?php endif; ?><?php echo '<script>setTimeout("portal_refresh(\''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['_id'])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo '_iframe\','; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['refresh']['data'][0])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ',1)",'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_item']['refresh']['data'][0])) ? $this->_run_mod_handler('modify::htmlquote', true, $_tmp) : modify::htmlquote($_tmp)); ?><?php echo ');</script></td>'; ?><?php if ($this->_tpl_vars['col_counter'] >= $this->_tpl_vars['cols'] || $this->_tpl_vars['data_item']['fullwidth']['data'][0]): ?><?php echo '</tr><tr>'; ?><?php $this->assign('col_counter', '0'); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr></table>'; ?><?php endif; ?><?php echo ''; ?>
