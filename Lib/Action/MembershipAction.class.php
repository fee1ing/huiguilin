<?php
//会员卡Action
class MembershipAction extends Action {

    public function Membership () {
        $helper = new MembershipCardModel();
        $info = $helper->getMembershipCard();
        $partnerIds = DataToArray($info, 'partner_id');
        $model = new PartnerInfoModel();
        $result = $model->getPartnerInfoById($partnerIds);
        var_dump($info, $result);exit;
    }

    public function MembershipDetail() {
        $id  = (int) $_REQUEST['id'];
        if (empty($id)) {
            return TRUE;
        }
        $couponHelper = new MembershipCardModel();
        $couponInfo = $couponHelper->getCardInfoById();
    }

}
