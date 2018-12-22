<?php
//适配器模式
//将各种截然不同的函数接口封装成统一的API。 
//PHP中的数据库操作有MySQL,MySQLi,PDO三种，可以用适配器模式统一成一致，使不同的数据库操作，统一成一样的API。类似的场景还有cache适配器，可以将memcache,redis,file,apc等不同的缓存函数，统一成一致。 

interface Phone {
    public function push();
}

class Iphone implements Phone {
    public function push() {
        return 'ios push';
    }
}


class Android {
    private $iphone;
    
    public function push($iphone) {
        return $iphone->push();
    }
}

$android = new Android();
echo $android->push(new Iphone()), "\n";
