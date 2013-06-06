<?php

class custom {
  public static function get_my_data($folder, $view, $params) {
    $output = "<b>Hello World</b><br/>";
    $output .= "...<br/>";

    /* Smarty can be also used here (templates are in templates/*):
     *
     * $output .= sys::$smarty->fetch("custom.tpl");
     */

    // use echo $output to avoid output filtering for bad HTML and Javascript
    return $output;
  }
}