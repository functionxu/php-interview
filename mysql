//符号位(1bit) + 毫秒时间(41bit) + 工作机器id(10bit) + 递增序列号(12bit)
$symbol_bin = '0';

$time = intval(microtime(true) * 1000);
$time_bin = decbin($time);
$time_bin = str_pad($time_bin, 41, '0', STR_PAD_LEFT);

$mechine_id_bin = decbin(100);
$mechine_id_bin = str_pad($mechine_id_bin, 10, '0', STR_PAD_LEFT);

$serial_bin = decbin(9);
$serial_bin = str_pad($serial_bin, 12, '0', STR_PAD_LEFT);

$bin = $symbol_bin . $time_bin . $mechine_id_bin . $serial_bin;
$nextId = bindec($bin);

var_dump($nextId);
