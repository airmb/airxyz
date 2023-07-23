### 空气面板 airxyz 基于宝塔详细安装教程

#### 1）安装宝塔
#### 2）安装 Nginx MySQL PHP phpMyAdmin
#### 3）进入 软件商店 > PHP设置 > 安装扩展 > 找到ssh2 [点击安装]
#### 4）进入 网站 > 添加站点 
```
域名 > 填写你解析好的域名
数据库 > MySQL utf8
PHP版本 > 你安装的php版本
其他默认即可
```
#### 5）进入 网站 > 站点设置 > SSL [申请证书并开启强制HTTPS]
#### 6）数据库 > 导入 > 上传并导入
#### 7）下载面板文件，上传到站点根目录,编辑 ```info.json``` 文件
```
{
  "sql_hostname":"localhost",
  "sql_username":"数据库用户名",
  "sql_passwd":"数据库密码",
  "airOpensslKey":"abcd1234"//自定义设置其他字符串，主要用于加密
}
```
#### 8）尝试打开域名访问面板 默认账号密码 ```admin@airxyz.com``` ```123456```



