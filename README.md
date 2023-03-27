> 诞生缘由

由于本人常天混迹于各大技术博客网站与公众号文章之间，见识了很多特优秀且特实用的技术文章。然而，本人的七秒钟记忆总是学习秒忘，又苦于找不到原文，且原文也有可能失效无法浏览。所以选择转载他人文章(膜拜大佬)。

在转载他人文章时，那些文章的图片还需要手动下载再上传，所以非常麻烦。当然，也可以直接引用图片原地址，但是如果文章失效图片失效呢？因此诞生了这款插件----`自动保存外链图片插件`。

> 功能简介

大家在引用非本站图片链接时，保存文章或发布文章时会自动下载图片至自己网站，且会将文章的图片链接替换为本站链接。

[note type="warning flat"]只适用 markdown 文章[/note]

> 开发历程

本来是想从网上找找现成的插件，皇天不负白嫖人，找到了[AutoSaveImage][1]。但是有很多痛点：

 1. 创建自己的附件目录和附件命名，与typecho不一致。
 2. 图片附件没有向数据库插入附件数据，所以在管理文件和文章的附件是看不到图片附件。不方便管理。
 3. 功能简单、业务简单、只能下载普通网站的图片文件，不能下载公众号文章的图片。

除这款插件还找到了一款功能类似的插件--[地址][2]，有更痛的痛点：

 1. 为什么是地址，而不是插件名？因为插件收费不白嫖。
 2. 是复制内容在编写文章粘贴时，下载外链文件且上传至附件。因为这一个功能会诞生以下问题：
  - 自己写的外链文件不会下载
  - 同一个外链文件如果粘贴多次呢？会不会多次下载
  - 非纯后端代码（当然这也不算痛点）
  - 不知能否下载公众号图片

> 看效果
[video title="小视频 " url="https://culturesun.site/usr/uploads/2023/03/1450754303.mp4 " container="bhehc3oscco" subtitle=" " poster=" "] [/video]


> 获取方式

因为没有白嫖到，所以我也本着不白嫖的原则（哈哈）。
评论+点赞，给博主一点动力，毕竟不是专业php，肝了好几天。然后我会将插件发至你的邮箱。
使用方式：解压即可。


  [1]: https://github.com/gxuzf/AutoSaveImage
  [2]: https://dyedd.cn/940.html