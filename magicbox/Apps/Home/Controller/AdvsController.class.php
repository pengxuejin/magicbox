<?php
/**
 * Created by PhpStorm.
 * User: loveinbottle
 * Date: 16-4-6
 * Time: 下午5:40
 */

    namespace Home\Controller;
    use Think\Controller;

    class AdvsController extends Controller {
        public function _before_advsUpdate() {
            // echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action _before_versionList"."'); </script>";
            if (empty($_COOKIE["username"])) {
                cookie('preurl', U('advs/advsupdate'));
                $this->error('请登录', U('access/login'), 2);
            }
        }
        public function advsUpdate() {
//			echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action versionUpdate"."'); </script>";
            $macType = I('post.macType', '');
            if (!empty($macType)) {
                $map['rmac'] = $macType;
            }
            $versionID = I('post.versionID', '');
            if (!empty($versionID)) {
                $map['versionID'] = $versionID;
            }
            $requestID = I('post.requestID', '');
            if (!empty($requestID)) {
                $map['requestID'] = $requestID;
            }

            $macType = I('get.macType', '');
            if (!empty($macType)) {
                $map['rmac'] = $macType;
            }
            $versionID = I('get.versionID', '');
            if (!empty($versionID)) {
                $map['versionID'] = $versionID;
            }
            $requestID = I('get.requestID', '');
            if (!empty($requestID)) {
                $map['requestID'] = $requestID;
            }

            $map['upgradeType'] = array('IN', '3, 4');

            $versionUpdateModel = M('upgrade_log');
            $field = 'rmac, versionID, result, requestID, message, upgradeType, createAt';
            $order = '_id desc';
            $versionUpdateRecord = $versionUpdateModel->field($field)->order($order)->page(I('get.p', 1).',4')->where($map)->select();
            $this->assign('versionUpdateList', $versionUpdateRecord);

            $versionUpdateCount = $versionUpdateModel->where($map)->count();

            $versionUpdatePage = new \Think\Page($versionUpdateCount, 4);
            $versionUpdatePage->lastSuffix = false;
            $versionUpdatePage->setConfig('prev','上一页');
            $versionUpdatePage->setConfig('next','下一页');
            $versionUpdatePage->setConfig('last','末页');
            $versionUpdatePage->setConfig('first','首页');
            $versionUpdatePage->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $versionUpdatePage->setConfig('header',"<li class='rows'>共<b>%TOTAL_ROW%</b>条升级记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>");

            foreach($map as $key=>$val) {
                $versionUpdatePage->parameter[$key] = urlencode($val);
            }
            $this->assign('versionPage',$versionUpdatePage->show());

            $this->assign('macType', $map['rmac']);
            $this->assign('versionID', $map['versionID']);
            $this->assign('requestID', $map['requestID']);

            $this->assign('username', $_COOKIE['username']);

//            dump($versionUpdateRecord);
            $this->display();
        }
    }