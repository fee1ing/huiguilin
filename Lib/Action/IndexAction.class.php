<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        echo 'hello,world!';return TRUE;
	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');

    }

    public function welcome() {
        $cms = new CmsIndexModel(); // 实例化CMS数据模型
        $cmsData = $cms->readCmsIndex(); 
        list($coupon, $card, $partner, $evaluation) = $this->releaseData($cmsData);
        $couponInfo = $this->getCouponInfo($coupon);
        $cardInfo = $this->getCardInfo($card);
        $partnerInfo = $this->getPartnerInfo($partner);
        $evaluationInfo = $this->getEvaluationInfo($evaluation);
        var_dump($couponInfo, $cardInfo, $partnerInfo, $evaluationInfo);exit;

        return TRUE;
        $this->display();
        echo 'hello,world!man';return TRUE;
    }

    private function releaseData($cmsData) {
        $coupon = array();
        $card = array();
        $partner = array();
        $evaluation = array();
        foreach ($cmsData AS $k => $v) {
            if ($cmsData[$k]['module_type'] == 1) {
                $coupon[] = $cmsData[$k];
                continue;
            }
            else if ($cmsData[$k]['module_type'] == 2) {
                $card[] = $cmsData[$k];
                continue;
            }
            else if ($cmsData[$k]['module_type'] == 3) {
                $partner[] = $cmsData[$k];
                continue;
            }
            else if ($cmsData[$k]['module_type'] == 4) {
                $evaluation[] = $cmsData[$k];
                continue;
            }
        }
        return array($coupon, $card, $partner, $evaluation);
    }

    private function getCouponInfo($data) {
        $id = DataToArray($data, 'id');
        $model = new CouponModel();
        $result = $model->getCouponByCouponId($id);
        return $result;
    }

    private function getCardInfo($data) {
        $id = DataToArray($data, 'id');
        $model = new MembershipCardModel();
        $result = $model->getCardInfoById($id);
        return $result;
    }

    private function getPartnerInfo($data) {
        $id = DataToArray($data, 'id');
        $model = new PartnerInfoModel();
        $result = $model->getPartnerInfoById($id);
        return $result;
    }

    private function getEvaluationInfo($data) {
        $id = DataToArray($data, 'id');
        $model = new PartnerEvaluationModel();
        $result = $model->getEvaluationInfoById($id);
        $partnerIds = DataToArray($result, 'partner_id');
        $pModel = new PartnerInfoModel();
        $pInfo = $pModel->getPartnerInfoById($partnerIds);
        $pInfo = ArrayKeys($pInfo, 'partner_id');
        foreach ($result AS $key => $value) {
            $pId = $result[$key]['partner_id'];
            $result[$key] = array_merge($result[$key], $pInfo[$pId]);
        }
        return $result;
    }
}
