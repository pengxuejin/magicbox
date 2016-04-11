<?php
	namespace Home\Controller;
	use Think\Controller;
	
	class VersionController extends BaseController {
		public function _before_versionList() {
			if (empty($_COOKIE["username"])) {
				cookie('preurl', U('version/versionlist'));
				$this->error('请登录', U('access/login'), 2);
			}
		}
		public function versionList() {
			$versionModel = M('app_version'); // 实例化User对象
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			// 注意I('get.p') 与 $_GET[p]的区别
			$versionRecord = $versionModel->order('_id desc')->page(I('get.p', 1).',4')->select();
			// $versionRecord = $versionModel->order('_id desc')->page($_GET['p'].',4')->select();
			// var_dump($versionModel->getLastSql());
			$this->assign('versionList',$versionRecord);// 赋值数据集
			// var_dump($versionRecord);
			$versionCount = $versionModel->count();// 查询满足要求的总记录数
			$versionPage = new \Think\Page($versionCount, 4);// 实例化分页类 传入总记录数和每页显示的记录数
			$versionPage->lastSuffix = false;
			$versionPage->setConfig('prev','上一页');
			$versionPage->setConfig('next','下一页');
			$versionPage->setConfig('last','末页');
			$versionPage->setConfig('first','首页');
			$versionPage->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
			$versionPage->setConfig('header',"<li class='rows'>共<b>%TOTAL_ROW%</b>个发布版本&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>");
			$this->assign('versionPage',$versionPage->show());

			$this->assign('username', $_COOKIE['username']);
			$this->display();
		}

		public function _before_versionAdd() {
			// echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action _before_versionList"."'); </script>";
			if (empty($_COOKIE["username"])) {
				cookie('preurl', U('version/versionadd'));
				$this->error('请登录', U('access/login'), 2);
			}
		}
		public function versionAdd() {
			$this->assign('username', $_COOKIE['username']);
			$this->display();
		}

		public function newVersionAdd() {
			// var_dump(I('post.'));
			$versionData['appType'] = I('post.productType', 0);
			$versionData['versionName'] = I('post.versionName', '');
			$versionData['city'] = I('post.city', '');
			$versionData['hardware'] = I('post.hardware', '');
			$versionData['rmac'] = I('post.mac', '');
			$versionData['tarUrl'] = I('post.tarUrl', '');
			$publishType = I('post.publishType', 0);
			if (0 == $versionData['appType']) {
				$this->error('产品类型不能为空');
			}
			if (empty($versionData['versionName'])) {
				$this->error('版本名称不能为空');
			}
			if (0 == $publishType) {
				$this->error('发布类型不能为空');
			}
			switch ($publishType) {
				case 0:
					$this->error('发布类型不能为空');
					break;
				case 1:
					if (empty($versionData['city'])) {
						$this->error('城市不能为空');
					}
					break;
				case 2:
					if (empty($versionData['hardware'])) {
						$this->error('硬件版本号不能为空');
					}
					break;
				case 3:
					if (empty($versionData['rmac'])) {
						$this->error('Mac不能为空');
					}
					break;
				case 4:
					if (empty($versionData['city'])) {
						$this->error('城市不能为空');
					}
					if (empty($versionData['hardware'])) {
						$this->error('硬件版本号不能为空');
					}
					break;
				default:
					break;
			}
			if (empty($versionData['tarUrl'])) {
				$this->error('版本下载url不能为空');
			}

			$versionData['createAt'] = date("Y-m-d H:i:s", time());
			// var_dump($versionData);
			$versionModel = M('app_version');
			// if ($newAddId = $versionModel->data($versionData)->add()) {
			if ($versionModel->data($versionData)->add()) {
				// redirect(U('version/versionlist'), 2, '新增版本成功');
				// redirect能不停留直接跳转即0 success至少停留1秒
				$this->success('新增版本成功', U('version/versionlist'), 0);
			} else {
				$this->error('新增版本失败');
			}
		}

		public function _before_versionUpdate() {
			// echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action _before_versionList"."'); </script>";
			if (empty($_COOKIE["username"])) {
				cookie('preurl', U('version/versionupdate'));
				$this->error('请登录', U('access/login'), 2);
			}
		}
		public function versionUpdate() {
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

			$map['upgradeType'] = array('IN', '1, 2');

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
			$this->display();
		}

		public function versiontest() {
			$this->display();
		}
	}
?>