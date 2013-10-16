<?php

class PartnerEvaluationModel extends Model {

    protected $trueTableName = 't_monkey_partner_evaluation'; 
    protected $dbName = 'monkey';


    public function getEvaluationInfoById($ids = array()) {
        if (empty($ids)) {
            return array();
        }
        $ids = implode(',', $ids);
        $data = $this->where("evaluation_id IN ({$ids})")->select();
        return $data;
    }

 
    
}
