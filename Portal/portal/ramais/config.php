<?php
//***************************************
//   PDB Functions v2.0 for MySQL
//   (c) 2001-2002, Ankord
//   www.ankord.com
//   support@ankord.com
//   Versão Em Português Brasil
//   (c) 2003, Neander Araújo
//   www.eumesmo.com.br
//   neander@eumesmo.com.br

//***************************************

$line_end_symbol = Chr(13) . Chr(10); //for memo fields

global $REQUEST_METHOD;
global $HTTP_POST_VARS;
global $HTTP_GET_VARS;
global $argsstring;

$argsstring = '';
if ($REQUEST_METHOD == 'POST') {
  while (list($var, $value) = each($HTTP_POST_VARS)) {
    $argsstring = $argsstring . "$var=$value&";
  }
}
else {
  while (list($var, $value) = each($HTTP_GET_VARS)) {
    $argsstring = $argsstring . "$var=$value&";
  }
}
if (strlen($argsstring) > 1) {
  $argsstring = substr($argsstring, 0, strlen($argsstring)-1);
}

//========================== high_lighter ======================================
function pdb_is_url($word)
{
  if (strstr($word, ',')) {return 'no';}
  if (strstr($word, '<')) {return 'no';}
  if (strstr($word, '>')) {return 'no';}

  if (substr($word, 0, 7) == 'http://') {return '';}
  if (substr($word, 0, 8) == 'https://') {return '';}
  if (substr($word, 0, 6) == 'ftp://') {return '';}
  if (substr($word, 0, 7) == 'file://') {return '';}
  if (substr($word, 0, 4) == 'www.') {return 'http://';}

  if (strstr($word, '@') and strstr($word, '.')) {
      if (substr($word, 0, 7) != 'mailto:') {return 'mailto:';}
      return '';
    }
  return 'no';
}

function pdb_detect_url($in_text, $target)
{
  global $line_end_symbol;
  $space = ' ';
  $begin_str = '<a href="';
  $end_str = '</a>';

  $s_list = explode($line_end_symbol, $in_text);
  $use_target = false;
  if ($target != '') {$use_target = true;}

  for ($i = 0; $i < count($s_list); $i++) {
    $sw_list =  explode($space, $s_list[$i]);
    for ($j = 0; $j < count($sw_list); $j++) {
      $add_prot = pdb_is_url($sw_list[$j]);
      if ($add_prot != 'no') {
        if ($use_target = true) {
          $sw_list[$j] = $begin_str . $add_prot . $sw_list[$j] . '" target="' .
                         $target . '">' . $sw_list[$j] . $end_str;
        }
        else {
          $sw_list[$j] = $begin_str . $add_prot . $sw_list[$j] . '">' .
                         $sw_list[$j] . $end_str;
        }
      }
    }
    $s_list[$i] = implode(' ', $sw_list);
  }

  $result = '';
  for ($i = 0; $i < count($s_list); $i++) {
    if (($i > 0) and ($i < count($s_list)-1)) {
      $result = $result . $line_end_symbol . $s_list[$i];
    }
    else {
      $result = $result . $s_list[$i];
    }
  }
  return $result;
}

function pdb_words_is_url($in_text, $fr, $position)
{
  global $line_end_symbol;
  $space = ' ';
  $begin_pos = 0;
  $end_pos = strlen($in_text);

  $var_integer = $position;
  while (($var_integer > 0) && ($in_text[$var_integer] != ' ')
        && ($in_text[$var_integer] != chr(13)))
  {
    $var_integer--;
  }
  $begin_pos = $var_integer;

  $var_integer = $position + strlen($fr);
  while (($var_integer < strlen($in_text) -1) && ($in_text[$var_integer] != ' ')
         && ($in_text[$var_integer] != chr(13)))
  {
    $var_integer++;
  }
  $end_pos = $var_integer;

  $words_string = trim(substr($in_text, $begin_pos, $end_pos - $begin_pos));

  $s_list = explode($line_end_symbol, $words_string);

  for ($i = 0; $i < count($s_list) ; $i++) {
    $sw_list = explode($space, $s_list[$i]);
    for ($j = 0; $j < count($sw_list); $j++) {
      if (pdb_is_url(trim($sw_list[$j])) != 'no') {
        return true;
      }
    }
  }
  return false;
}

function pdb_detect_substr($in_text, $fr, $bg_color, $ft_color, $url_detect,
                   $ignore_case)
{
  $result = '';
  $var_text = $in_text;
  $begin_str =
     "<span style=\"background-color: rgb($bg_color); color: rgb($ft_color)\">";
  $end_const = '</span>';

  if ($ignore_case == true) {
    $var_text_comp = strtoupper($in_text);
    $fr = strtoupper($fr);
  }
  else {
    $var_text_comp = $in_text;
  }

  if ($fr != ''){$position = strpos($var_text_comp, $fr);}
  else {$position = -1;}

  if ($position === false) {$position = -1;}

  while ($position >= 0) {
    if ((pdb_words_is_url($var_text, $fr, $position) != true)
       || ($url_detect != true))
    {
      $result = $result . substr($var_text, 0, $position) . $begin_str .
                substr($var_text, $position, strlen($fr)) . $end_const;
    }
    else {
      $result = $result . substr($var_text, 0, $position + strlen($fr));
    }
    $var_text = substr($var_text, $position + strlen($fr), strlen($var_text)
                - $position);
    $var_text_comp = substr($var_text_comp, $position + strlen($fr),
                     strlen($var_text_comp) - $position);
    $position = strpos($var_text_comp, $fr);
    if ($position === false) {$position = -1;}
  }
  $result = $result . substr($var_text, 0, strlen($var_text));
  return $result;
}

function pdb_highlighter($text, $sub_str, $rgb_back_color, $rgb_font_color,
                      $target, $autodetect_url, $high_light_substr,
                      $ignore_case)
{
  $result = $text;
  if (trim($rgb_back_color) == '') {$rgb_back_color = '0,0,0';}
  if (trim($rgb_font_color) == '') {$rgb_font_color = '255,255,255';}

  if ($high_light_substr == true) {
    $result = pdb_detect_substr($result, $sub_str, $rgb_back_color,
              $rgb_font_color, $autodetect_url, $ignore_case);
  }
  if ($autodetect_url == true) {
    $result = pdb_detect_url($result, $target);
  }
  return $result;
}
//==============================================================================
//============================ PAGENAL LINKS ===================================
function pdb_make_links_package($link_name, $stpage_n)
{
  global $SERVER_NAME;
  global $PHP_SELF;
  global $argsstring;

  $args = explode("&", $argsstring);

  $flag_psr = false;
  $link = "$PHP_SELF?";
  for ($i=0; $i < count($args); $i++) {
    if ($i > 0) {$link = $link . '&';}
    if (substr(strtoupper($args[$i]), 0, 6) == 'STPAGE') {
      $link = $link . 'stpage=' . sprintf("$stpage_n");
      $flag_psr = true;
    }
    else
      $link = $link . $args[$i];
  }
  if ($flag_psr == false) {
    if ($argsstring == '') {
      $link = $link . 'stpage=' . sprintf("$stpage_n");
    }
    else {
      $link = $link . '&stpage=' . sprintf("$stpage_n");
    }
  }
  return  '<a href="' . $link . '">' . $link_name . '</a>';
}

function pdb_paginal_links()
{
  global $records_count;
  global $stpage;
  global $records_on_page;

  if ($records_count < 1) {
    return '';
  }

  $i = 1;
  $result = '';
  $page_count = floor(($records_count - .00001) / $records_on_page) + 1;
  while ($i <= $page_count) {
    if ($i == $stpage) {
      $result = $result . ' | ' . sprintf("$i");
    }
    else {
      $result = $result . ' | ' . pdb_make_links_package(sprintf("$i"), $i);
    }
    $i++;
  }
  if ($records_count > 0) {
    $result = $result . ' | ';
  }
  return $result;
}

function pdb_paginal_links_compact($links_count)
{
  global $records_count;
  global $stpage;
  global $records_on_page;

  if ($records_count < 1) {
    return '';
  }
  $pages_count = floor(($records_count - .00001) / $records_on_page) + 1;
  $page = $stpage - floor($links_count / 2);
  if (floor($links_count / 2) == ($links_count / 2)) {$page++;}
  if ($page + $links_count > $pages_count) {
    $page = $pages_count - $links_count + 1;
  }
  $show_links = 0;
  $result = '';
  if ($page > 1) {
    $result = $result . pdb_make_links_package(sprintf("<<"),
              $page-1);
  }
  while (($show_links < $links_count) && ($page <= $pages_count)) {
    if ($page > 0) {
      if ($page != $stpage) {
        $result = $result . ' | ' .
                  pdb_make_links_package(sprintf("$page"), $page);
      }
      else {
        $result = $result . ' | ' . sprintf("$page");
      }
      $show_links++;
    }
    $page++;
  }
  if ($records_count > 0) {
    $result = $result . ' | ';
    if ($page <= $pages_count) {
      $result = $result . pdb_make_links_package(sprintf(">>"),
                $page);
    }
  }
  return $result;
}

function pdb_next_page_link($link_text)
{
  global $stpage;
  global $records_on_page;
  global $records_count;
  $pages_count = floor(($records_count - .00001) / $records_on_page) + 1;
  if ($stpage < $pages_count) {
    return  pdb_make_links_package($link_text, $stpage+1);
  }
  else {
    return '';
  }
}

function pdb_previous_page_link($link_text)
{
  global $stpage;
  if ($stpage > 1) {
    return  pdb_make_links_package($link_text, $stpage-1);
  }
  else {
    return '';
  }
}
//==============================================================================
//============================== QUERY SHOW ====================================
function pdb_query($dbh, $SQL, $FileTemplate, $clr1, $clr2)
{
  global $records_count;
  $query = MYSQL_QUERY($SQL, $dbh);
  $chet=false;
  $records_count=0;
  while ($row = mysql_fetch_object ($query)) {
    $records_count++;
    if ($chet==false) {$color=$clr1;}
    else {$color=$clr2;}
    $chet = !$chet;
    include($FileTemplate);
  }
  $records_count=MYSQL_NUMROWS($query);
  return $records_count;
}

function pdb_top_list($dbh, $SQL, $FileTemplate, $records, $clr1, $clr2)
{
  global $records_count;
  $query = MYSQL_QUERY($SQL, $dbh);
  $chet=false;
  $records_count=0;
  while (($row = mysql_fetch_object ($query)) && ($records_count < $records)) {
    $records_count++;
    if ($chet==false) {$color=$clr1;}
    else {$color=$clr2;}
    $chet = !$chet;
    include($FileTemplate);
  }
  return $records_count;
}

function pdb_paginal_query($dbh, $SQL, $FileTemplate, $records, $clr1,$clr2)
{
  global $stpage;
  global $records_count;
  global $records_on_page;
  if ($stpage < 1){$stpage = 1;}
  $start_record = (($stpage -1) * $records) + 1;
  $query = MYSQL_QUERY($SQL, $dbh);
  $records_on_page = $records;
  $currecord = 1;
  $records_count = 1;
  $chet=false;

  if ($start_record > 1) {
    while(($row = mysql_fetch_object($query)) && ($currecord < $start_record-1))
    {
      $currecord++;
      $records_count++;
    }
    $records_count = $records_count + 1;
  }
  $currecord = 1;
  while(($row = mysql_fetch_object($query)) && ($currecord <= $records)) {
    if ($chet==false) {$color=$clr1;}
    else {$color=$clr2;}
    $chet = !$chet;
    include($FileTemplate);
    $currecord++;
    $records_count++;
  }
  $records_count = MYSQL_NUMROWS($query);
  return $records_count;
}
//==============================================================================
?>