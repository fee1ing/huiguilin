<?php

class PartnerPictureModel extends Model {

    protected $trueTableName = 't_monkey_partner_picture'; 
    protected $dbName = 'monkey';


    public function getPartnerPictureById($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("partner_id IN ({$ids})")->select();
        return $data;
    }


    
}
