<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('C:\\laragon\\www\\online-tuts\\wp-content\\plugins\\wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", 'C:\\laragon\\www\\online-tuts/wp-content/wflogs/');
	include_once 'C:\\laragon\\www\\online-tuts\\wp-content\\plugins\\wordfence/waf/bootstrap.php';
}
?>