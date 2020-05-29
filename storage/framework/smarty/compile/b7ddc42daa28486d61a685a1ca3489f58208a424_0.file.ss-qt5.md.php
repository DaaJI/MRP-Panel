<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 11:08:53
  from '/www/wwwroot/sspanel/resources/views/material/user/markdown/ss-qt5.md' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5c78c5af1dc8_80596073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ddc42daa28486d61a685a1ca3489f58208a424' => 
    array (
      0 => '/www/wwwroot/sspanel/resources/views/material/user/markdown/ss-qt5.md',
      1 => 1567409435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5c78c5af1dc8_80596073 (Smarty_Internal_Template $_smarty_tpl) {
?>### Ubuntu使用Shadowsocks-qt5科学上网

#### 说明：shadowsocks-qt5是ubuntu上一个可视化的版本

* * *

##### 安装shadowsocks-qt5

\`\`\`bash
$ sudo add-apt-repository ppa:hzwhuang/ss-qt5 2.$ sudo apt-get update 3.$ sudo apt-get install shadowsocks-qt5
\`\`\`

##### 如果安装成功之后，按\`win\`键搜索应该能够找到软件，如下图所示：

![](/images/c-linux-1.png)

##### 配置shadowsocks-qt5

###### 填写对应的服务器IP，端口，密码，加密方式，红色标注地方请与图片一样

![](/images/c-linux-4.png)

##### 配置系统代理模式

![](/images/c-linux-5.png)

##### 配置浏览器代理模式（本次为Ubuntu自带FireFox浏览器为例）

![](/images/c-linux-6.png)

##### 连接并开始上网

![](/images/c-linux-7.png)
<?php }
}
