<?php

//工厂模式，隐藏new 操作
interface People {
    public function say();
}

class Man implements People {
    public function say() {
        return 'man';
    }
}

class Woman implements People {
    public function say() {
        return 'woman';
    }
}

class Factory {
    public static function create($type) {
        $objects = [
            'man'   =>  new Man(),
            'woman' =>  new Woman()
        ];

        return $objects[$type];
    }
}

$man = Factory::create('man');
echo $man->say(), "\n";
