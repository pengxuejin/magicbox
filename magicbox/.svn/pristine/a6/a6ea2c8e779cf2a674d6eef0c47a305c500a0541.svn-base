<?php
/**
 * Created by PhpStorm.
 * User: loveinbottle
 * Date: 16-3-29
 * Time: 下午1:35
 */
    namespace Home\Controller;
    use Think\Controller;

    class StatisticsController extends BaseController {
        public function _before_statSales() {
            // echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action _before_versionList"."'); </script>";
            if (empty($_COOKIE["username"])) {
                cookie('preurl', U('statistics/statsales'));
                $this->error('请登录', U('access/login'), 2);
            }
        }
        public function statSales() {
            // echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action statSales"."'); </script>";
            // echo "<script> alert('"."i am controller " .I('post.goodsNamePicker'). " action _empty"."'); </script>";

//            echo "<script> alert('"."i am controller " .CONTROLLER_NAME. " action statSales"."'); </script>";

            $salesModel = M('sales_statistics');
            $field = 'sales_statistics.mac as mac, sales_statistics.price, sales_statistics.sell_count, sales_statistics.sell_at, sales_statistics.goods_id as goods_id, goods_info.name';
            $join = array('LEFT JOIN '.'goods_info ON goods_id = goods_info.id');
            $macType = I('post.macType', '');
            if (!empty($macType)) {
                $map['mac'] = $macType;
            }

            // I('get.sales_statistics.mac', '')无法取到值，所以给了个别名
            $macNow = I('get.mac', '');
            if (!empty($macNow)) {
                $map['mac'] = $macNow;
            }

            $goodsIdNow = I('get.goods_id', '');
            if (!empty($goodsIdNow)) {
                $map['goods_id'] = $goodsIdNow;

                $goodsModel = M('goods_info');
                $goodsNameShow = $goodsModel->getFieldById($goodsIdNow, 'name');
            }

            $goodsNameNow = I('post.goodsName', '');
            if (!empty($goodsNameNow)) {
                $goodsModel = M('goods_info');
                $map['goods_id'] = $goodsModel->getFieldByName($goodsNameNow, 'id');
                $goodsNameShow = $goodsNameNow;
            }
//            echo "<script> alert('"."i am controller " .$macNow. " action statSales111112222"."'); </script>";
//            echo "<script> alert('"."i am controller " .$map['mac']. " action statSales11111"."'); </script>";
            $salesRecord = $salesModel
                ->field($field)
                ->join($join)
                ->order('sales_statistics.id desc')
                ->page(I('get.p', 1).',7')
                ->where($map)
                ->select();
            $this->assign('salesList', $salesRecord);

            $salesCount = $salesModel->where($map)->count();
            $salesPage = new \Think\Page($salesCount, 7);
            $salesPage->lastSuffix = false;
            $salesPage->setConfig('prev','上一页');
            $salesPage->setConfig('next','下一页');
            $salesPage->setConfig('last','末页');
            $salesPage->setConfig('first','首页');
            $salesPage->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
            $salesPage->setConfig('header',"<li class='rows'>共<b>%TOTAL_ROW%</b>条销售记录&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>");

            foreach($map as $key=>$val) {
                $salesPage->parameter[$key] = urlencode($val);
            }

            $this->assign('salesPage',$salesPage->show());

            $this->assign('macType',$map['mac']);
            $this->assign('goodsName',$goodsNameShow);

            $this->assign('username', $_COOKIE['username']);
            $this->display();
        }
    }