@@Author: Demon
@@Date: 2018.12.28
@@Function: look and copy my notebook's code

使用说明:
本框架的作用迅速浏览笔记，复制代码，查看文档
的作用只需要把想要浏览的文件夹放到Data下即可
，右侧栏即会探测到data目录下的所有文件

最左导航栏
可以点击浏览文件或进入文件夹，有目录遍历攻击
的防御手段

中左解析栏
浏览器解析后的内容会显示在中间区域

中右代码栏
除了二进制文件，只要是文本文件的源内容都会显示
在此栏

最右外网栏
上网查询资料的区域

下面是更新日志: 
2018.12.28
本工具诞生，基本三个框架: 文件浏览，代码解析，源码查看

实现原理:
整体框架利用 frameset 标签实现分屏浏览和调整视区
文件浏览利用 php 的 scandir 获取data目录下的文件，
结合 bootstrap 生成文件按钮，按钮分为两类: 
文件按钮 和 目录按钮，点击文件按钮时， js 会同时更新 
文件浏览框架 和 代码解析框架的 src 属性，
代码解析能获取源码，主要是利用 php 的 htmlspecialchars 
函数进行非解析展示，通过 pre 标签保持原格式，
如果是点击目录按钮，则location跳转自己，携带path参数
因为path是用户可以改变的参数，所以有防御目录遍历攻击手段
还有的细节问题就是对点击../的一些处理，详情请看源码

2018.12.29
nav.php 添加了文件路径导航栏，通过点击路径的节点
直接跳转到相应的文件夹路径。

2018.12.30
解决了windows系统编码问题

2019.01.03
添加了 viewSite 框架，主要作用是可以访问外部网络
nav.php 头部添加了URL地址栏，可以粘贴链接访问。
viewSource.php 设置背景色为保护色

2019.01.05
nav.php 添加了自身刷新 reload按钮 功能
这样代码更新后，点击相应的文件就可以实时看到解析效果

2019.01.06
nav.php 添加了显示/隐藏框架功能

2019.01.09
nav.php 利用insertBefore将显示/隐藏功能保持了原来的位置。

2019.01.15
调整了nav.php 按钮的样式

2019.01.16
设置了main.html的LOGO首页

2019.01.17
对4个框架命名 文件浏览 代码解析 源码查看 外网访问 分别命名为:
fileNav viewParse viewSource viewSite
为 viewParse viewSource viewSite 设置了 隐藏->显示后的默认路径

2019.01.24
实现 隐藏->显示后 viewSource 和 viewParse 内容进行保持不变
如果点击显示源码查看，会获取代码解析的src并提取，传给源码查看
如果点击显示代码解析，会获取源码查看的src并提取，传给代码解析

2019.01.28
fileNav 框架添加折叠功能， viewSource 框架添加代码高亮插件
fileNav 通过get 请求发送给 viewSource 一些参数来控制代码高亮样式

