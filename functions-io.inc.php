<?php
// Flags
if (!defined('FILE_USE_INCLUDE_PATH')) { define('FILE_USE_INCLUDE_PATH', 1); }
if (!defined('FILE_APPEND')) { define('FILE_APPEND', 8); }

// PHP < 4.3.0 Compatibility Function
if (!function_exists('file_get_contents')) {
	function file_get_contents($filename, $flags=false, $resource_context=null, $offset=0, $maxlen=NULL)
	{ // Modified from http://us.php.net/manual/en/function.file-get-contents.php#80707 by jose.nobile@gmail.com
		if ($maxlen !== NULL) {
			if ($maxlen === 0) { return ''; }
			if ($maxlen < 0) {
				trigger_error('file_get_contents() length must be greater than or equal to zero',
				 E_USER_WARNING);
				return false;
			}
		}
		if (is_bool($flags)) { $use_include_path = $flags; }
		else { $use_include_path = ($flags && FILE_USE_INCLUDE_PATH)? true : false; }
		if ($offset == 0 && $maxlen === NULL) {
			// Use a quicker way to read the file if we want the entire file.
			ob_start();
			readfile($filename, $use_include_path);
		    $data = ob_get_contents();
		    ob_end_clean();
		    return $data;
		}
		else {
			// Otherwise, use a slower method to get only part of the file.
			if ($resource_context === null) { $fh = fopen($filename, 'rb', $use_include_path); }
			else { $fh = fopen($filename, 'rb', $use_include_path, $resource_context); }
			if (false === $fh) {
				trigger_error('file_get_contents() failed to open stream: No such file or directory',
				 E_USER_WARNING);
				return false;
			}
			if ($offset > 0) { fseek($fh, $offset); }
			clearstatcache();
			if ($fsize = @(filesize($filename))) {
				$data = fread($fh, (($maxlen !== NULL && $fsize > $maxlen)? $maxlen : $fsize));
			}
			else {
				$data = '';
				while (!feof($fh) && ($maxlen === NULL || strlen($data) < $maxlen)) {
					$data .= fread($fh, 8192);
				}
			}
			fclose($fh);
			if ($maxlen !== NULL) { return substr($data, 0, $maxlen); }
			else { return substr($data, 0); }
		}
	}
}

// PHP < 5 Compatibility Function
if (!function_exists('file_put_contents')) {
	function file_put_contents($filename, $content, $flags = null, $resource_context = null)
	{ // Slightly modified version from from Joomla 1.5.7 by Aidan Lister <aidan@php.net>
		// If $content is an array, convert it to a string
		if (is_array($content)) { $content = implode('', $content); }
		// If we don't have a string, throw an error
		if (!is_scalar($content)) {
			trigger_error('file_put_contents() The 2nd parameter must be either a string or an array',
			 E_USER_WARNING);
			return false;
		}
		// Get the length of date to write
		$length = strlen($content);
		// Check what mode we are using
		$mode = ($flags && FILE_APPEND)? $mode = 'ab' : $mode = 'wb';
		// Check if we're using the include path
		$use_inc_path = ($flags && FILE_USE_INCLUDE_PATH)? true : false;
		// Open the file for writing
		if (($fh = @fopen($filename, $mode, $use_inc_path)) === false) {
			trigger_error('file_put_contents() failed to open stream: Permission denied', E_USER_WARNING);
			return false;
		}
		// Write to the file
		$bytes = 0;
		if (($bytes = @fwrite($fh, $content)) === false) {
			$errormsg = sprintf('file_put_contents() Failed to write %d bytes to %s', $length, $filename);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}
		// Close the handle
		@fclose($fh);
		// Check all the data was written
		if ($bytes != $length) {
			$errormsg = sprintf('file_put_contents() Only %d of %d bytes written, possibly' .
			 ' out of free disk space.', $bytes, $length);
			trigger_error($errormsg, E_USER_WARNING);
			return false;
		}
		// Return length
		return $bytes;
	}
}
?>