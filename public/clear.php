<?php 
error_reporting(E_ALL);
use Illuminate\Support\Facades\Cache;
Cache::flush();
Cache::forget('key');
?>