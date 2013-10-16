<?php

class CouponModel extends Model {

    protected $trueTableName = 't_monkey_coupon_info'; 
    protected $dbName = 'monkey';


    public function getCouponByCouponId($cIds = array()) {
        if (empty($cIds)) {
            return array();
        }
        $cIds = implode(',', $cIds);
        $data = $this->where("coupon_id IN ({$cIds})")->select();
        return $data;
    }

    public function getCoupon () {
        $data = $this->where(" 1 = 1")->select();
        return $data;
    }

    
}
