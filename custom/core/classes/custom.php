<?php

class custom {
  public static function get_my_data($folder, $view, $params) {
    $output = "<b>Hello World</b><br/>";
    $output .= "...<br/>";
    $output .= <<<EOF
<div class="entry-content">
			<p>換成新的內容 Content</p>
<p>以 Brython 編寫的線上 Python3 執行環境 (僅支援少數展示用功能):</p>
<p><script src="jscript/brython/brython.js"></script>
<script>
window.onload = function(){
    brython(1);
}
</script>
<script type="text/python">
import sys
import time
import dis

if sys.has_local_storage:
    import local_storage
else:
    storage = False

def reset_src():
    if local_storage.storage:
        doc['src'].value = local_storage.storage["py_src"]

def to_str(xx):
    return str(xx)

doc['version'].text = '.'.join(map(to_str,sys.version_info))

class cons_out:

    def __init__(self,target):
        self.target = doc[target]
    def write(self,data):
        self.target.value += str(data)

sys.stdout = cons_out("console2")
sys.stderr = cons_out("console2")

output = ''

def show_console2():
    doc["console2"].value = output
    doc["console2"].cols = 60

def clear_text():
    log(" event clear")
    doc['console2'].value=''
    doc['src'].value=''

def run():
    global output
    doc["console2"].value=''
    doc["console2"].cols = 60
    src = doc["src"].value
    if local_storage.storage:
        local_storage.storage["py_src"]=src
    t0 = time.time()
    exec(src)
    output = doc["console2"].value
    print('<done in %s ms>' %(time.time()-t0))

def show_js():
    src = doc["src"].value
    doc["console2"].cols = 90
    doc["console2"].value = dis.dis(src)
</script>
<table width=80%>
<tr><td style="text-align:center"><b>Python</b>
</td>
<td>&nbsp;</td>
<th><button onClick="show_console2()">console2</button></th>
<th><button onClick="show_js()">Javascript</button></th>
</tr>
<tr><td colspan><textarea id="src" cols="60" rows="20">def 執行函式(次數, 字串):
    for 索引 in range(次數):
        print(字串)

執行函式(5, "Brython 可以執行")</textarea></td><td><button onClick="run()">run</button></td>
<td><button onClick="clear_text()">clear</button></td>
<td colspan=2><textarea id="console2" cols="60" rows="20"></textarea></td>
</tr>
<tr><td colspan=2>
<p>Brython version <span id="version"></td>
</tr>
</table>
</p>					</div><!-- .entry-content -->

EOF;

    /* Smarty can be also used here (templates are in templates/*):
     *
     * $output .= sys::$smarty->fetch("custom.tpl");
     */

    // use echo $output to avoid output filtering for bad HTML and Javascript
    return $output;
  }
}