<?php

class PartnerDishModel extends Model {

    protected $trueTableName = 't_monkey_partner_dish'; 
    protected $dbName = 'monkey';


    public function getDishInfoById($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("partner_id IN ({$ids})")->select();
        return $data;
    }


    
}
