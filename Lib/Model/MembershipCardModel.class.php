<?php

class MembershipCardModel extends Model {

    protected $trueTableName = 't_monkey_membership_card'; 
    protected $dbName = 'monkey';


    public function getCardInfoById($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("card_id IN ({$ids})")->select();
        return $data;
    }

    public function getMembershipCard() {
        $data = $this->where(" 1 = 1")->select();
        return $data;
    }



    
}
