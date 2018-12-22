<?php
//策略模式
//提供统一口调用支付退款

//策略抽象类
abstract class Payment {
    abstract function refund();
}

//具体策略类
class Alipay extends Payment {
    public function refund() {
        return 'alipay';
    }
}

class Wxpay extends Payment {
    public function refund() {
        return 'wxpay';
    }
}

class UnionPay extends Payment {
    public function refund() {
        return 'unionpay';
    }
}

//统一接口
class Pay {
    public function refund($payment) {
        return $payment->refund();
    }
}

$pay = new Pay();
echo $pay->refund(new UnionPay()), "\n";

