<?php
	namespace Home\Controller;
	use Think\Controller;
	
// add by pxj now
	class AccessController extends Controller {
		public function index() {
			echo "<script> alert('i am index')</script>";
		}
		
		public function login() {
//			echo "123";
//			$data = C('URL_MODEL');
//			$public = C('__PUBLIC__');
//			echo "$data";
//			echo "$public";
//			echo "<script> alert('i am login')</script>";
			$name = "pxj";
			$this->assign('name', $name);
			$this->display();
		}

		public function logining() {
//			echo "<script> alert('i am logining'); </script>";

			$userName = $_POST['username'];
			$password = $_POST['password'];
			if (empty($userName) || empty($password)) {
				$this->error("用户名或密码为空");
			}

			$userModel = M("sql_user");
			// select返回二维数组 find返回一维数组
			$record = $userModel->where("username='$userName'")->find();
			if ($record['password'] == $password) {
//			$record = $userModel->where("username='$userName'")->select();
//			if ($record[0]['password'] == $password) {
				// 缓存进cookie $_COOKIE['username'] 为 $userName
				cookie("username", $userName, 3600);
				if (empty($_COOKIE['preurl'])) {
					$this->success("登录成功", U('version/versionlist'));
				} else {
					$this->success("登录成功", $_COOKIE['preurl']);
				}

			} else {
				$this->error("用户名或密码错误");
			}
		}

		public function logout() {
//			echo "<script> alert('i am logout')</script>";
			cookie("username", null);
			$this->success("退出成功", U('access/login'));
		}
	}
?>
