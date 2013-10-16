<?php

class CmsIndexModel extends Model {

    protected $trueTableName = 't_monkey_cms_index'; 
    protected $dbName = 'monkey';

    public function readCmsIndex($status = 1) {
        if (empty($status)) {
            $status = 0;
        }
        $cmsData = $this->where("status={$status}")->order('module_type ASC')->order('weight DESC')->select();
        return $cmsData;
    }
 
    
}
