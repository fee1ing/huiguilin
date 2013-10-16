<?php

class UserCardModel extends Model {

    protected $trueTableName = 't_monkey_user_card'; 
    protected $dbName = 'monkey';


    public function getUserCardByUserId($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("user_id IN ({$ids})")->select();
        return $data;
    }

    public function getUserCardByPartnerId($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("partner_id IN ({$ids})")->select();
        return $data;
    }

    public function getUserCardByCardId($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("card_id IN ({$ids})")->select();
        return $data;
    }
    
}
