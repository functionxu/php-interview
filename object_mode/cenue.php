<?php
//策略模式
//提供统一口调用支付退款

abstract class Payment {
    abstract function refund();
}

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

class Pay {
    public function refund($payment) {
        return $payment->refund();
    }
}

$pay = new Pay();
echo $pay->refund(new UnionPay()), "\n";

