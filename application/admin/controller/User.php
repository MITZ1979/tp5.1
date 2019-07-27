<?php
namespace app\admin\controller;
//use think\facade\Config;

Class User{
	public function get()
	{
	//获取全部的配置项
	//dump(Config::get());
	//获取app下面的配置项，app是一级配置项，与config/app.php文件对应
	//dump(Config::get('app.'));
	
	//仅仅获取一级配置项，推荐使用pull()
	//dump(Config::pull('app'));
	
	//获取二级配置项，
	//dump(Config::get('app.app_debug'));

	//app是默认的一级配置前缀，可以省略
    //dump(Config::get('app_debug'));	
	//dump(Config::get('default_lang'));
	
	//查询default_lang配置项是否存在
	//dump(Config::has('default_lang'));
	
	// 查询database一级配置项下的内容内容是否存在
	dump(Config::has('database.hostname'));
	}
	
	//设置配置项
	public function set()
	{
		//指的是动态设置；静态设置是直接修改配置文件
		//动态设置使用的是Config类的set()方法
		dump(Config::get('app_debug'));
		Config::set('app_debug',true);
		dump(Config::get('app_debug'));
	}
	
	public function helper()//助手函数隐藏太多细节，得不到 开发环境ide的支持。
	{
		//助手函数不依赖Config类
//		dump(config());//不传入参数就是默认全部配置项
		
		//dump(config('default_module'));
		dump(config('?database.username')); //查看是否存在username，用？表示
		dump(config('database.username'));
		config('database.username','localhost');
		dump(config('database.username'));
	}
}