<?php
namespace tesr2\controller;

/**
* 
*/
class Testcontroller extends Controller
{
	
	function __construct(argument)
	{
		echo "初始化程序";
	}
	public function Getone()
	{
		if(isset('post')){
            echo "开始程序";
		}else{
			echo "结束";
		}
	}
}