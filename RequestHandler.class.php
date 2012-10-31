<?php
/**
 * 请求类
 * ============================================================================
 * api说明：
 * init(),初始化函数，默认给一些参数赋值，如cmdno,date等。
 * getGateURL()/setGateURL(),获取/设置入口地址,不包含参数值
 * getKey()/setKey(),获取/设置密钥
 * getParameter()/setParameter(),获取/设置参数值
 * getAllParameters(),获取所有参数
 * getRequestURL(),获取带参数的请求URL
 * doSend(),重定向到财付通支付
 * getDebugInfo(),获取debug信息
 *
 * ============================================================================
 *
 */
class RequestHandler {

	/** 网关url地址 */
	var $gateUrl;

	/** 密钥 */
	var $key;

	/** 请求的参数 */
	var $parameters;

	/** debug信息 */
	var $debugInfo;

	function __construct() {
		$this->RequestHandler();
	}

	/**
	*设置入口地址,不包含参数值
	*/
	function setGateURL($gateUrl) {
		$this->gateUrl = $gateUrl;
	}

	/**
	*获取密钥
	*/
	function getKey() {
		return $this->key;
	}

	/**
	*设置密钥
	*/
	function setKey($key) {
		$this->key = $key;
	}

	/**
	*获取参数值
	*/
	function getParameter($parameter) {
		return $this->parameters[$parameter];
	}

	/**
	*获取debug信息
	*/
	function getDebugInfo() {
		return $this->debugInfo;
	}

	/**
	*重定向
	*/
	function doSend() {
		header("Location:" . $this->getRequestURL());
		exit;
	}
	/**
	*设置debug信息
	*/
	function _setDebugInfo($debugInfo) {
		$this->debugInfo = $debugInfo;
	}

}

?>
