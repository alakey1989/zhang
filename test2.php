<?php
// 2020-09-23
//namespace Zhang;
//ini_set("display_errors", "On");
error_reporting(E_ALL & ~E_NOTICE); //~E_DEPRECATED
date_default_timezone_set('PRC');
/*require('./Image.class.php');
require('./phpqrcode.php');*/
//ignore_user_abort(true);


var_dump(session_id('7aap7468kmnmkdqavigkqrukf5b'));
session_start();

exit;
echo 'aaa';
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
exit;

$users = [
    [
    'name'=>'test02',
    'nick'=>'测试02',
    'userid'=>'2',
    'avatar'=>''
    ],
    [
    'name'=>'test04',
    'nick'=>'测试04',
    'userid'=>'4',
    'avatar'=>''
    ]
];
//$users = json_encode($users);
$pdata = [
    'userId'=>'2',
    'appKey'=>'NTE0NzQwNzE2MjA3ODY1ODU3',
    'secret'=>'123456'
];
$pdata = [
            'name' => 'golang第一次公开课',
            'appKey' => 'NTE0NzQwNzE2MjA3ODY1ODU3',
            'secret' => '123456',
            'avatar' => '',
            'createUserId' => 2,
            'groupId' => 'gc171f8a2fef42A61812137',
        ];

$URL = 'http://192.168.8.251:8087';
$action = '/appkeygroup/save';
$URL .= $action;
/*var_dump($URL);
exit;*/
$a = POST($URL, $pdata);

var_dump($a);
exit;

//var_dump($body_obj);
foreach($body_obj->OrderList->OrderEntity as $item){
    var_dump($item->OpenDate->__toString());
    var_dump($item->PackageId->__toString());
}

exit;
$a = [1,2,3,4,5];
foreach ($a as $key => $value) {
    $n = $value;
    if ($key > 2) {
        break;
    }
}
var_dump($n);
exit;
class Cat{
    private $color = 'black';
    private function getcolor(){
        return $this->color;
    }
    public static function instan(){
        $cat = new self();
        return $cat->getcolor();
    }
}
$a = Cat::instan();
var_dump($a);

exit;
for($i=0;$i<500;$i++){
    $post_data = [
        'id'=>$i+1,
        'name'=>'alakey',
        'age'=>30,
        'ctime'=>time()
    ];
    //exit('aaa');
    $url = 'http://127.0.0.1:80/async.php';
    $rs = async_post($url,$post_data);
}
var_dump($rs);

exit;
var_dump(strtotime(date("Y-m-d",strtotime("-3 day"))));
exit;
$a = '0.06';
$a = sprintf('%.04f',$a);
trigger_error('xxx is not allow!', E_USER_WARNING);
var_dump($a);
//var_dump(11); // ~ 2M
exit;
$str = 'php-饕餮-mysql';

$key = 'df53!&#987';
$a = encrypt($str, $key);

$result = decrypt($a, 'df53!&#987 ');
if(md5($str) === md5($result)){
    echo "解密成功：".$result;
}else{
    echo "解密失败";
}
exit;
$val['site_type'] = 3;
$msg_type = $val['site_type']==1 ? 1 : ($val['site_type']==2 ? 6 : 5);
var_dump($msg_type);exit;
/*exec('rm /mnt/shared/zhang/async_log.txt');
for($i=0;$i<1000;$i++){
    $post_data = [
        'id'=>$i+1,
        'name'=>'alakey',
        'age'=>mt_rand(10,99),
        'ctime'=>time()
    ];
    
    $url = 'http://127.0.0.1/async.php';
    $rs = async_post($url,$post_data);
}
var_dump('the end');
exit;*/
$ts_id_arr = ['a','a','b'];
$ts_id_arr = array_values(array_unique($ts_id_arr));
var_dump($ts_id_arr);
exit;
$result = [
    ['id'=>1,'ts_id'=>'a001','func'=>1,'info_guid'=>'g1111','str'=>'aa','ver'=>1],
    ['id'=>3,'ts_id'=>'a002','func'=>1,'info_guid'=>'g1111','str'=>'bb','ver'=>2],
    ['id'=>4,'ts_id'=>'a003','func'=>2,'info_guid'=>'g1113','str'=>'cc','ver'=>2],
    ['id'=>7,'ts_id'=>'a004','func'=>1,'info_guid'=>'g1111','str'=>'dd','ver'=>2],
    ['id'=>11,'ts_id'=>'a005','func'=>4,'info_guid'=>'g1112','str'=>'ee','ver'=>1],
    ['id'=>13,'ts_id'=>'a006','func'=>4,'info_guid'=>'g1112','str'=>'ff','ver'=>2],
    ['id'=>14,'ts_id'=>'a006','func'=>4,'info_guid'=>'g1112','str'=>'ff','ver'=>2],
];
$ret = [];
foreach($result as $k=>$v){
    if($k > 0){
        if($v['func'] == $result[$k-1]['func']){
            $result[$k]['ts_id'] = array_merge((array)$result[$k-1]['ts_id'],[$v['ts_id']]);
            $result[$k]['id'] = array_merge((array)$result[$k-1]['id'],[$v['id']]);
        }else{
            $ret[] = $result[$k-1];
        }
    }
}
$ret[] = $result[$k];

echo "<pre>";
print_r($ret);

exit;
$card_no = '2147483647'; //FFFFFF7F
$card_no = '4294967295'; //FFFFFFFF
$card_no = '4294967296'; //FFFFFFFF
$str = strtoupper(dechex($card_no));
$str = str_pad($str,8,'0',STR_PAD_LEFT);
$i = strlen($str);
$card_no = '';
while($i>0){
    $card_no .= $i>=2 ? $str[$i-2] : '';
    $card_no .= $i>=1 ? $str[$i-1] : '';
    $i -= 2;
}

var_dump($card_no);

exit;
$a = ['http_code'=>200,'ftp_code'=>300];
$b = array();
var_dump($b['h']);
exit;
$tar_gum_arr = [
    ['id'=>1,'name'=>'一年级'],
    ['id'=>2,'name'=>'二年级'],
    ['id'=>3,'name'=>'三年级'],
];
$gum_arr = [];
//需要插入的年级
foreach ($tar_gum_arr as $value) {
    $gum_arr[$value['id']] = $gum_arr;
}
echo "<pre>";
var_dump($gum_arr);
exit;  
//$a = hex2bin(date('YmdHis'));
$f = 0.58;
//var_dump(intval($f * 100)); //为啥输出57
var_dump((int)floatval($f * 100)); //为啥输出57
exit;
$a = hex2bin('503469'); //80 52 105  // P 4 i
var_dump($a);
file_put_contents('bin_test.txt', $a);
//$b = bin2hex($a);
//var_dump($b);
exit;


//var_dump(mt_rand(1,999));
exit;

$a = strtoupper(dechex('1707751549'));
//var_dump($a);// 14380F6

$i = strlen($a);
$card_no = '';
while($i>0){
    $card_no .= $i>=2 ? $a[$i-2] : '';
    $card_no .= $i>=1 ? $a[$i-1] : '';
    $i -= 2;
}

var_dump($card_no);
exit;
 
/* 记录日志 */
file_put_contents('loog.txt', '...');

exit;

function async_post($url, $post_data = array()) {
    if (empty($post_data)) {
        return FALSE;
    }
    $url_array = parse_url($url); //获取URL信息，以便平凑HTTP HEADER
    $port = isset($url_array['port']) ? $url_array['port'] : 80;
    $fp = fsockopen($url_array['host'], $port, $errno, $errstr, 30);
    if (!$fp) {
        return FALSE;
    }
    $headerArr[] = 'POST ' . $url_array['path'] . ' HTTP/1.1';
    $headerArr[] = 'Host: ' . $url_array['host'];
    $headerArr[] = 'Connection: Close';
    $_post = http_build_query($post_data);
    $headerArr[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8"; //POST数据
    $headerArr[] = 'Content-Length: ' . strlen($_post); //POST数据的长度
    $headerArr[] = ''; //空一行
    $headerArr[] = $_post; //传递POST数据
    $header = implode("\r\n", $headerArr);
    fwrite($fp, $header);
    usleep(10000); // 10ms
    fclose($fp);
    return true;
}

// 日志工具基类
class LogTool
{
    private static $type;
    
    public static function instance(){
        $class = get_called_class();
        return new $class;
    }

    public function getType(){
        return self::$type;
    }

    public static function debug($msg) {
        switch (static::$type) {
        case 'biz':
            echo '把日志写入数据库表1';
            //static::$type = 'xxx';
            self::$type = 'xxxxy';
            break;
        case 'opt':
            echo '把日志写入数据库表2';
            break;
        default:
            echo 'error';
        }
    }
    
    // 其他代码省略
}

// 运维日志类
class OptTool extends LogTool
{
    protected static $type = 'opt';
}

// 业务日志类
class BizTool extends LogTool
{
    public static $type = 'biz';
}


//exit;
BizTool::debug('王小虎已登录');
var_dump(LogTool::instance()->getType());



exit;
class A {
    private $var = 101;
    /*private function foo() {
        echo 'a';
    }*/
    public function test() {
        echo get_class($this)."<br/>";
        echo __CLASS__."<br/>";
        echo get_called_class()."<br/>";
        echo $this->var."<br/>";
        $this->getVar();
        //$this->foo();
    }

    public function kk(){
        $bb = new B();
        $bb->foo();
    }

    public function qq(){
        echo 'q';
    }
}
class B extends A {
    
    public $var = 102; 

    public function foo() {
        echo "b";
    }

    public function getVar(){
        echo $this->var."<br/>";
    }
}
$b = new B();
$b->test();

//$a = new A();
//$a->test();

exit;

class P{

    private static $pdo = null;
    public $conn = null;
    private function setActive(){
        $rand = mt_rand(1000,9999);
        if(!self::$pdo){
            self::$pdo = $rand;
        }
        $this->conn = self::$pdo;
        var_dump($this);
    }

    public function create(){
        var_dump($this);
        $this->setActive();
        return $this->conn;
    }

    public static function getPdo(){
        return self::$pdo;
    }
}
class S extends P{
    public $conn;
    public function __construct(){
        $r = $this->create();
        var_dump($this);
    }
}

$s = new S();
//$p = new P();
unset($s);
var_dump(P::getPdo());

exit;
//$aa = Closure::bind($a, null, K::class);
//$aa();
//var_dump($var);
//var_dump($var->getParam('name'));
$b = function(){
    $this->name = 'mmm';
    $this->age = 35;
};
$d = new D;
$bb = Closure::bind($b, $d, D::class);
//$bb();
call_user_func($bb);
var_dump($d);

//6236 6828 3000 0543 651 建行

/*
买入      所得份额
10000     6376.13
3000      1945.14
2000      1350.24
3000      2039.15
3000      2063.02
2000      1385.84

合计
23000     15159.52   

实际赎回成本(按30天~365天计算0.5%费率)：23000*(1+0.5%)/15159.52 = 1.5248
13000*(1+0.5%)/8783.39 = 1.4875
*/  
exit;
//
//echo 0x5c; //5*16+12*1=92
if(is_uploaded_file($_FILES['file']['tmp_name'])){
    $ext = substr(strstr($_FILES['file']['type'],'/'),1);
    move_uploaded_file($_FILES['file']['tmp_name'], 'test_upload/'.date('YmdHis').'.'.$ext);
}


exit;
header('Content-Type: image/png');


/*$text = 'Four short words sum up what has lifted most successful individuals above the crowd: a little bit more.';
$text = 'Four';
QRcode::png($text, false, QR_ECLEVEL_L, 6, 3, false); //246*246*/

$image = imagecreatefrompng('t_thumb.png');
imagepng($image);

exit;
$fail_msg = '';
$arr = range(1,3);
foreach($arr as $v){
    $fail_msg .= '此次转账遇到如下问题：\n';
    $fail_msg .= 'ID'.$v.'\n';
    $fail_msg .= '后续账单转账可能因此中断，请重试\n';
    break;
}
//$fail_msg ='abc';
exit("<script>alert('$fail_msg');</script>");
//exit("<script>alert('$fail_msg');history.back();</script>");
//bdd976319194c7ae5a4a0a60f3f52b8d
//http://www.gravatar.com/avatar/bdd976319194c7ae5a4a0a60f3f52b8d?s=40&d=mm&r=g
exit;

$imgfile = "qrcode_bg.jpg";

//$a = file_get_contents($imgfile);
ob_start();
readfile($imgfile);
$img = ob_get_contents();
ob_end_clean();
//var_dump($a);
//echo $a;
//$a = ob_get_contents();
//ob_end_clean();
exit;
$url='http://192.168.1.190:83/app2/spread/invite_spread.php?code=alakey';
//http://pan.baidu.com/share/qrcode?w=200&h=200&url=http://192.168.1.190:83/app2/spread/invite_spread.php?code=alakey

echo base64_decode('NTI4Njg5MTU4');

exit;

$text = 'sdaNI';
$tmpStr = json_encode($text); //暴露出unicode  
//$tmpStr = preg_replace_callback("(\\\u(e|d)[0-9a-f]{3})","addslashes('\\1')",$tmpStr); //将emoji的unicode留下，其他不动  
$tmpStr = preg_replace_callback("(\\\u(e|d)[0-9a-f]{3})",
                    function($matches){
                        //return addslashes($matches[0]);
                        return '';
                    },
                    $tmpStr);
$text = json_decode($tmpStr);

echo $text;

exit;
//鱼^ω^
//$s = '🐯'; //0x01F42F-0x10000= 0xf42f // \ud83d\udc2f
// 0000 1111 0100 0010 1111
// 0000111101=>0x003d + 0xD800 = 0xD83d
// 0000101111=>0x002f + 0xDC00 = 0xDC2f
$s = '"\ud83d\udc2f"';
$s = '"\ue050"';
$s = json_decode($s);
var_dump($s);
exit;
$s = '☁';
//$s = '"\ue049"';
//$s = json_decode($s);
$s = json_encode($s);
/*$s = preg_replace_callback("#(\\\ue[0-9a-f]{3})#i",
            function($matches){
                return addslashes($matches[0]);
            },
            $s);*/
//$s = json_decode($s);
var_dump($s);
exit;
//$s = '꧁꧂'; A9C1 A9C2   
// 11101010 10100111 10000001
// \xEA \xA7 \x81
$s = '꧁';

var_dump($s);
exit;
//exit;
//$s  = '\xE5\xA4\xA9\xE4\xBA\x91'; //天云
//$s  = '\xE7\x94\xB5\xE8\xAF\x9D';
// 11100101 10100100 10101001 
// 01011001 00101001  =>5929 | 22825
// 11100100 10111010 10010001
// 100111010010001    =>4e91 | 20113
// 11100111 
function checkExitEmoji($str){
    preg_match_all('/./u', $str, $match);
    if(!empty($match[0])){
        foreach($match[0] as $v){
            if(strlen($v) >= 4){
                return true;
            }
        }
    }
    return false;
}
function replaceEmoji($str)
{
    $str = preg_replace_callback( '/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '□' : $match[0];
            },
            $str);

     return $str;
}

var_dump(checkExitEmoji($s));
//var_dump(replaceEmoji($s));

exit();
$text = $a;
//$a = preg_replace("/\s+/", '', $a);
$tmpStr = json_encode($text); //暴露出unicode  
//$tmpStr = preg_replace_callback("(\\\u(e|d)[0-9a-f]{3})","addslashes('\\1')",$tmpStr); //将emoji的unicode留下，其他不动  
$tmpStr = preg_replace_callback("(\\\u(e|d)[0-9a-f]{3})",
                    function($matches){
                        return addslashes($matches[0]);
                        
                    },
                    $tmpStr);
$text = json_decode($tmpStr);

echo $text;
exit; 

class F{
    protected $house;
    protected $gift;
    private $money;
    public function __construct(){
        $this->gift = 'yasuiqian';
        $this->money = 100;
    }

    public function getData(){
        return $this;
    }
}
class C extends F{
    
    public function __construct(){
        parent::__construct();
    }

}

$c = new C();
$res = $c->getData();
var_dump($res);

exit;
function filterEmoji($str)
{
    $str = preg_replace_callback( '/./u',
            function (array $match) {
                return strlen($match[0]) >= 4 ? '{表情}' : $match[0];
            },
            $str);

     return $str;
}
$str = '\xF0\x9F\x99\x84 \xF0\x9F\x98\x90 \xF0\x9F\x98\x91';
var_dump(filterEmoji($str));
exit;
$string = 'April, 15, 2003';
$pattern = '/(\w+), (\d+), (\d+)/i';
$replacement = '$1,1,$3';
echo preg_replace($pattern, $replacement, $string);



exit();
//刺史太守长史司马县丞主簿

$success_details = "2018031310313150002090^18941123936^\u5f20\u723d^30.00^S^^201803120378879858^20180312120335|";
//$batch_no = '201803121625000018';
$batch_no = '201803121625000020';
$post = array(
    'success_details'=>$success_details,
    'batch_no'=>$batch_no,
);
$url = 'http://tadmin.234wan.com/app/alipay/notify_url.php';
$res = POST($url,$post);
var_dump($res);
exit;

//$s = file_get_contents('http://api.95xiu.com/app/gift/getChannelRecord.php?uid=78586284');
exit;

class HahaException extends Exception {

    public function errorMessage()
    {
        return $this->getMessage();
    }

    public function errorCode()
    {
        return $this->getCode();
    }
}

function funny($a){
    if($a < 18){
        throw new HahaException('小屁孩一边儿去',1001);
    }
    return $a."过来，这是给你的";
}

function checkNameLength($str,$max_character_num = 12){
    //12表示英文字符个数，如果有中文，则一个汉字当作两个英文字符
    preg_match_all('/[\x{4e00}-\x{9fa5}]{1}/u',$str, $match);
    $cn_num = count($match[0]);
    $str_len = mb_strlen($str,'utf-8');
    $length = $str_len + $cn_num; //汉字自定义占两个长度
    //echo "含有{$cn_num}个汉字，总长{$length}";
    return $length <= $max_character_num ? true : false;
}

function isNumber($data)
{
    $re = "/^\d+$/";
    if(preg_match($re, $data))
        return true;
    else
        return false;
}

function POST($url, $post_data='', $timeout=10){//curl
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_POST, 1);
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
//波导 诺基亚 联想 华为 华为 联想 华为
function HmacMd5($data,$key)
{ 
    // RFC 2104 HMAC implementation for php.
    // Creates an md5 HMAC.
    // Eliminates the need to install mhash to compute a HMAC
    // Hacked by Lance Rushing(NOTE: Hacked means written)

    //需要配置环境支持iconv，否则中文参数不能正常处理
    $key = iconv("GB2312","UTF-8",$key);
    $data = iconv("GB2312","UTF-8",$data);

    $b = 64; // byte length for md5
    if (strlen($key) > $b) {
        $key = pack("H*",md5($key));
    }
    $key = str_pad($key, $b, chr(0x00));
    $ipad = str_pad('', $b, chr(0x36));
    $opad = str_pad('', $b, chr(0x5c));
    $k_ipad = $key ^ $ipad;
    $k_opad = $key ^ $opad;

    return md5($k_opad . pack("H*",md5($k_ipad . $data)));
}

function validation_filter_id_card($id_card){
    if(strlen($id_card)==18){
        return idcard_checksum18($id_card);
    }elseif((strlen($id_card)==15)){
        $id_card=idcard_15to18($id_card);
        return idcard_checksum18($id_card);
    }else{
        return false;
    }
}
// 计算身份证校验码，根据国家标准GB 11643-1999
function idcard_verify_number($idcard_base){
    if(strlen($idcard_base)!=17){
        return false;
    }
    //加权因子
    $factor=array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);
    //校验码对应值
    $verify_number_list=array('1','0','X','9','8','7','6','5','4','3','2');
    $checksum=0;
    for($i=0;$i<strlen($idcard_base);$i++){
        $checksum += substr($idcard_base,$i,1) * $factor[$i];
    }
    $mod=$checksum % 11;
    $verify_number=$verify_number_list[$mod];
    return $verify_number;
}
// 将15位身份证升级到18位
function idcard_15to18($idcard){
    if(strlen($idcard)!=15){
        return false;
    }else{
        // 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
        if(array_search(substr($idcard,12,3),array('996','997','998','999')) !== false){
            $idcard=substr($idcard,0,6).'18'.substr($idcard,6,9);
        }else{
            $idcard=substr($idcard,0,6).'19'.substr($idcard,6,9);
        }
    }
    $idcard=$idcard.idcard_verify_number($idcard);
    return $idcard;
}
// 18位身份证校验码有效性检查
function idcard_checksum18($idcard){
    if(strlen($idcard)!=18){
        return false;
    }
    $idcard_base=substr($idcard,0,17);
    if(idcard_verify_number($idcard_base)!=strtoupper(substr($idcard,17,1))){
        return false;
    }else{
        return true;
    }
}

//$a = '14243319860618072X';
//var_dump(validation_filter_id_card($a));exit;

function bulidQuery($data,$isUrlEncode=false,$isFilter=false){
    $str='';
    if(!empty($data) && is_array($data)){
        foreach ($data as $k=>$v){
            if($isUrlEncode){
				$v=urlencode($v);
			}
            if($isFilter && $v==''){
                continue;
            }
            $str.=$k."=".$v."&";
        }
        $str = trim($str,'&');
    }
    return $str;
}

function getThisMonday(){
    return date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*24*3600)); 
}

function makeAscii($a){
	//$a = 'abc';
	$sum = 0;
	for($i=0;$i<strlen($a);$i++){
		$sum += ord($a[$i]);
		//echo $a[$i]."<pre>";
	}
	return $sum;
}

function getLastMonday(){
	if(date('l',time()) == 'Monday')
		return strtotime('last monday');
	else
		return strtotime('-1 week last monday');
}

function make_nonce_str($length = 32){
	$string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$string_length = strlen($string);
	$str = '';
	for($i=0;$i<$length;$i++){
		$str .= $string[mt_rand(0,$string_length-1)];
	}
	return $str;
}

function print_server_var(){

	echo 'SCRIPT_FILENAME:'.$_SERVER['SCRIPT_FILENAME'].'<br/>';
	echo 'SCRIPT_NAME:'.$_SERVER['SCRIPT_NAME'].'<br/>';
	echo 'PHP_SELF:'.$_SERVER['PHP_SELF'].'<br/>';
	echo '__FILE__:'.__FILE__.'<br/>';
	echo '__DIR__:'.__DIR__.'<br/>';
	echo 'REQUEST_URI:'.$_SERVER['REQUEST_URI'].'<br/>';
	echo 'HTTP_HOST:'.$_SERVER['HTTP_HOST'].'<br/>';
	echo 'QUERY_STRING:'.$_SERVER['QUERY_STRING'].'<br/>';
}

//排列组合 abc(123)
function rank($base, $temp=null)
{
    global $g;
    $len = strlen($base);
    if($len <= 1)
    {
        echo $temp.$base.':'.$g.'<br/>';
        $g++;
    }
    else
    {
        for($i=0; $i< $len; ++$i)
        {
            rank(substr($base, 0, $i).substr($base, $i+1, $len-$i-1), $temp.$base[$i]);
                    //23  1       
            //3   12      //2  13
            ///123        ///132
            
        }
    }
}

function lock(){
	$fp = fopen("/tmp/lock.lock", "w");
 
	if(flock($fp, LOCK_EX|LOCK_NB)){   
	     sleep(10);
	     echo date('Y-m-d H:i:s');
	     flock($fp, LOCK_UN);    
	}else{
	    echo "Couldn't get the lock!" ;
	}
 
	fclose($fp);
}

//加密数据，用key
function encrypt($data, $key){
    $key = md5($key);
    $x = 0;
    $len = strlen($data);
    $l = strlen($key);
    for($i = 0; $i < $len; $i++){
        if($x == $l){
            $x = 0;
        }
        $char .= $key{$x};
        $x++;
        //var_dump($data[$i]);
    }
    for($i = 0; $i < $len; $i++){
        $str .= chr(ord($data[$i]) + ord($char[$i]) % 256);
    }
    return base64_encode($str);
}
//解密数据，用key
function decrypt($data, $key){
    $key = md5($key);
    $x = 0;
    $data = base64_decode($data);
    $len = strlen($data);
    $l = strlen($key);
    for($i = 0; $i < $len; $i++){
        if($x == $l){
            $x = 0;
        }
        $char .= $key{$x};
        $x++;
    }
    for($i = 0; $i < $len; $i++){
        if(ord($data[$i]) < ord($char[$i])){
            $str .= chr((ord($data[$i]) + 256) - ord($char[$i]));
        }else{
            $str .= chr(ord($data[$i]) - ord($char[$i]));
        }
    }
    return $str;
}

//共享内存
function uniqidNumber($max_id = 99999){
    $shm_id = shmop_open(0xff1, "a", 0, 0);
    if($shm_id){
        $shm_size = shmop_size($shm_id);
        $my_string = shmop_read($shm_id, 0, $shm_size);
        $id = unserialize($my_string);
        shmop_close($shm_id);
        return $id;
    }
    return false;
}