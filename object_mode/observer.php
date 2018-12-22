<?php
//观察者模式
class EventGenerator {
    private $observers = [];

    public function add($observer) {
        $this->observers[] = $observer;
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

interface Observer {
    public function update();
}

class Observer1 implements Observer {
    public function update() {
        echo 'observer1', "\n";
    }
}

class Observer2 implements Observer {
    public function update() {
        echo 'observer2', "\n";
    }
}

$event = new EventGenerator();
$event->add(new Observer1());
$event->add(new Observer2());

$event->notify();
