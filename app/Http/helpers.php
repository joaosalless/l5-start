<?php

function myNumberFormat($number)
{
    return number_format(preg_replace("#\D#", "", $number)/100, 2, '.' , '');
}

function format_decimal($number, $digits = 2) {
    return number_format((float)$number, $digits, ',', '.');
}

// Função de porcentagem: Quanto é X% de N?
function porcentagem_xn ( $porcentagem, $total ) {
    return ( $porcentagem / 100 ) * $total;
}

// Função de porcentagem: N é X% de N
function porcentagem_nx ( $valor, $total ) {
    return ( $valor * 100 ) / $total;
}

// Função de porcentagem: N é N% de X
function porcentagem_nnx ( $parcial, $porcentagem ) {
    return ( $parcial / $porcentagem ) * 100;
}

function set_active($path, $active='active')
{
    return Request::is($path) || Request::is($path . '/*') ? $active: '';
}

function json_clean_decode($json, $assoc = false, $depth = 512, $options = 0) {
    // search and remove comments like /* */ and //
    $json = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t](//).*)#", '', $json);

    if(version_compare(phpversion(), '5.4.0', '>=')) {
        $json = json_decode($json, $assoc, $depth, $options);
    }
    elseif(version_compare(phpversion(), '5.3.0', '>=')) {
        $json = json_decode($json, $assoc, $depth);
    }
    else {
        $json = json_decode($json, $assoc);
    }
    return $json;
}

function getAppJson(){
    $file = file_get_contents(base_path('package.json'));
    $pkg  = json_decode($file);
    return $pkg;
}

function getSrvJson(){
    $json = file_get_contents(Config::get('backend.phpsysinfo_json_url'));
    $json = str_replace('@attributes', 'value', $json);
    return json_decode($json);;
}

function get_server_cpu_usage(){
    $load = sys_getloadavg();
    return $load[0];
}

function get_server_memory_usage(){
    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    $memory_usage = $mem[2]/$mem[1]*100;
    return $memory_usage;
}

function human_filesize($bytes, $decimals = 2) {
    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$size[$factor];
}

function set_gravity($n) {
  if ($n < 25) {
    return 'gray';
  } elseif (($n > 24) && ($n < 45)) {
    return 'orange';
  } elseif (($n > 44) && ($n < 65)) {
    return 'orange';
  } else {
    return 'red';
  }
}

function paginateArray($data, $perPage, $page = null)
{
  $page = $page ? (int) $page * 1 : (isset($_REQUEST['page']) ? (int) $_REQUEST['page'] * 1 : 1);
  $offset = ($page * $perPage) - $perPage;
  return Paginator::make(array_slice($data, $offset, $perPage, true), count($data), $perPage);
}
