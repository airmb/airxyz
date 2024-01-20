# airxyz
air.airxyz.xyz 空气面板 服务器运维监控 线路负载均衡 AppleID自动解锁

全新自动解锁苹果Apple ID账号 自动解锁 自动关闭手机双重验证 自动删除设备 自动适配密保安全问题 定时任务

官方telegram群 [t.me/apidlock](t.me/apidlock)

功能：
* 服务器监控 已完成
* 空气加密隧道线路组建 测试中
* AppleID 自动解锁 自动删除手机绑定 完成解锁
* AppleID 一键分享 已完成
* AppleID 代理IP解锁 已完成
* AppleID 解锁telegram通知 已完成

  [![AppleID_Unlock.png](https://github.com/airmb/airxyz/blob/main/demoImg/demo1.png?raw=true)]()
  [![AppleID_Unlock.png](https://github.com/airmb/airxyz/blob/main/demoImg/demo2.png?raw=true)]()
  



## 服务端 安装教程
### 空气面板 airxyz 服务端 基于宝塔详细安装教程

#### 0）安装基础脚本
```
apt update
apt -y install ntpdate
timedatectl set-timezone Asia/Shanghai
ntpdate ntp1.aliyun.com
```
```
apt install -y python3-pip chromium-driver
```
```
pip3 install pymysql
pip3 install requests
pip3 install selenium
pip3 install urllib3
pip3 install python-telegram-bot
pip3 install ddddocr
pip3 uninstall -y Pillow
pip3 install Pillow==9.5.0
```
#### 1）安装宝塔(此脚本为第三方纯净版本) 安装基础脚本 务必使用debian11系统(建议使用国外服务器，国内服务器屏蔽了一些国外api导致有数不清问题） 最新脚本可以查看宝塔官网
```
wget -O install.sh http://v7.hostcli.com/install/install-ubuntu_6.0.sh && bash install.sh
```
#### 2）登录宝塔，安装 Nginx1.2+ MySQL5.5+ PHP7.4 phpMyAdmin4.9+
#### 3）宝塔 进入 软件商店 > PHP设置 > 安装扩展 > 找到ssh2 [点击安装]，还有 PHP设置 > 禁用函数 > exec删除
#### 4）宝塔 进入 网站 > 添加站点  
```
域名 > 填写你解析好的域名
数据库 > MySQL utf8
PHP版本 > 你安装的php版本 建议PHP7.4
其他默认即可
```
#### 5）宝塔 进入 网站 > 站点设置 > SSL [申请证书并开启强制HTTPS]
#### 6）ssh 进入宝塔网站根目录,运行脚本下载文件
```
wget -O update.sh https://raw.githubusercontent.com/airmb/airxyz/main/update.sh && chmod +x update.sh && ./update.sh
```
#### 7）复制一份 ```info.text``` 文件，重命名为 ```info.json```，然后编辑文件
```
{
  "air_host":"你的网站地址",
  "sql_hostname":"localhost",
  "sql_username":"数据库用户名",
  "sql_passwd":"数据库密码",
  "airOpensslKey":"abcdefg123321"//建议自定义设置其他字符串，主要用于加密
}
```
#### 8）将网站目录权限改为755，然后导入数据库，数据库 > 导入 > 上传```airxyzXXXXXX.sql.gz```并导入

#### 9）宝塔 计划任务 添加第1个任务 访问url
```
# 任务名称 air服务器在线状况监控
# 执行周期 N分钟 设置3分钟
# URL地址如下
https://网站域名/api/airTimer.php
```

#### 10）宝塔 计划任务 添加第2个任务 访问url
```
# 任务名称 air中转线路监控
# 执行周期 N分钟 设置1分钟
# URL地址如下
https://网站域名/api/airTimerAll.php
```

#### 11）宝塔 计划任务 添加第3个任务 shell脚本
```
# 任务名称 air定时解锁appleid账号
# 执行周期 N分钟 设置5分钟
# 脚本如下
python3 /www/wwwroot/网站目录名称/main.pyc
```

#### 12）尝试打开域名访问面板 默认账号密码 ```admin@airxyz.xyz``` ```111111```

## 其他---客户端 一键脚本
```
wget -O airxyz.sh https://raw.githubusercontent.com/airmb/airxyz/main/airxyz.sh && chmod +x airxyz.sh && ./airxyz.sh
```


### 常见问题
*  若你的vps的ip倍苹果封禁，或者不是动态家宽vps，可以使用http代理，http代理推荐 https://www.ip2world.com 使用我的推荐码```R8MXHLM8NG```注册，有可能享受25%折扣。

* 【问1】为什么不能删除绑定手机/二次验证
* 【答1】必须要有 ```donnot recognize this number?```（不认识这个号码吗？）提示才可以删除。参考下面两个图片，自行对比。目前我们会提示```此账号无法通过密保删除手机二次验证，请更换账号```

 [![AppleID_Unlock.png](https://github.com/airmb/airxyz/blob/main/demoImg/phone1.png?raw=true)]()
 
 [![AppleID_Unlock.png](https://github.com/airmb/airxyz/blob/main/demoImg/phone2.png?raw=true)]()

