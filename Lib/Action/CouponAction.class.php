<?php
//优惠券Action
class CouponAction extends Action {

    public function Coupon () {
        $couponHelper = new CouponModel();
        $couponInfo = $couponHelper->getCoupon();
        $partnerIds = DataToArray($couponInfo, 'partner_id');
        $model = new PartnerInfoModel();
        $result = $model->getPartnerInfoById($partnerIds);
        print_r($result);exit;
    }

    public function CouponDetail() {
        $id  = (int) $_REQUEST['id'];
        if (empty($id)) {
            return TRUE;
        }
        $ids = array($id);
        $couponHelper = new CouponModel();
        $couponInfo = $couponHelper->getCouponByCouponId($ids);
        var_dump($couponInfo);exit;

    }

}
