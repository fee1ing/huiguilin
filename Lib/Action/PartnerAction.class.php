<?php
//商户Action
class PartnerAction extends Action {

    public function Partner () {
        $partnerHelper = new PartnerInfoModel();
        $partnerInfo = $partnerHelper->getPartner();
        $partnerIds = DataToArray($partnerInfo, 'partner_id');
        var_dump($partnerInfo);exit;
    }

    public function PartnerDetail() {
        $id  = (int) $_REQUEST['id'];
        if (empty($id)) {
            return TRUE;
        }
        $id = array($id);
        $partnerHelper = new PartnerInfoModel();
        $partnerInfo = $partnerHelper->getPartnerInfoById($id);
        var_dump($partnerInfo);exit;

    }

}
