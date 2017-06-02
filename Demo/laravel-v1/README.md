## 赛狮后端Laravel API说明文档

结构上与ThinkPHP版本维持一致，返回的code也一致。数据库维持原样不动。
* 共用部分
    * [code返回码](./error.md)
    * [api请求校验](./auth.md)

* 用户部分
    * [登录 POST /user/login](./user/login.md)
    * [注册 POST /user/register](./user/register.md)
    * [注册验证码 POST /user/verifyCode](./user/verifyCode.md)
    * [重置密码验证 POST /user/resetVerifyCode](./user/resetVerifyCode.md)
    * [重置密码 PATCH /user/password](./user/password.md)
    * [个人资料 PATCH /user/:user_id/profile](./user/profile.md)
    * [用户赛事列表 GET /user/:user_id/matches](./user/matches.md)
    

* 赛事部分
    * [创建赛事 POST /match](./match/create.md)
    * [编辑赛事 PATCH /match/:match_id](./match/{match_id}.md)
    * [获取赛事设置进度 GET /match/:match_id/step](./match/step.md)
    * [设置赛事进度 PATCH /match/:match_id/step](./match/step.md#设置赛事进度)
    * [赛区列表 GET /match/:match_id/zones](./match/zones.md)
    * [赛事行业列表 GET /match/:match_id/industry](./match/{match_id}.md#赛事行业列表)
    * [宣传页信息 GET /match/:match_id/publicity](./match/publicity.md)
    * [设置宣传页信息 POST /match/:match_id/publicity](./match/publicity.md#设置宣传页信息)
    * [宣传页图片 GET /match/:match_id/publicity/image](./match/publicity.md#宣传页图片)
    * [宣传页图片上传 POST /match/publicity/upload](./match/publicity.md#宣传页图片上传)
    * [报名页信息 GET /match/:match_id/registration](./match/registration.md)
    * [设置报名页信息 POST /match/:match_id/registration](./match/registration.md#设置报名页信息)
    * [报名信息栏目 GET /match/:match_id/items](./match/items.md)
    * [新增报名栏目 POST /match/:match_id/items](./match/items.md#新增报名栏目)
    * [编辑报名栏目 PATCH /match/:match_id/item/:item_id](./match/items.md#编辑报名栏目)
    * [报名信息反馈 GET /match/:match_id/notice](./match/notice.md)
    * [设置报名反馈信息 POST /match/:match_id/notice](./match/notice.md#设置报名反馈信息)
    * [赛事评分标准 GET /match/:match_id/standard](./match/standard.md)
    * [设置赛事评分标准 POST /match/:match_id/standard](./match/standard.md#设置赛事评分标准)
    * [赛事管理员 GET /match/:match_id/admins](./match/admin.md#赛事管理员)
    * [添加赛事管理员 POST /match/:match_id/admins](./match/admin.md#添加赛事管理员)
    * [删除赛事管理员 DELETE /match/:match_id/admins/:admin_id](./match/admin.md#删除赛事管理员)
    * [报名页banner图片  GET /match/:match_id/banner](./match/banner.md#报名页banner图片)
    * [报名页banner上传  POST /match/banner/upload](./match/banner.md#报名页banner图片上传)
    * [赛事评委  GET /match/:match_id/judges](./match/judges.md)
    * [批量邀请评委  POST /match/:match_id/judges](./match/judges.md#邀请评委)
    * [参赛BP列表  POST /match/:match_id/bp](./match/bp.md#参赛BP列表)
    * [BP指派  POST /match/:match_id/bp/assign](./match/bp.md#BP指派)
    
* 赛区部分
    * [创建赛区 POST /zone](./zone/create.md)
    * [编辑赛区 POST PATCH /zone/:zone_id](./zone/{zone_id}.md)
    * [删除赛区 DELETE /zone/:zone_id](./zone/{zone_id}.md#删除赛区)
    * [赛区行业 GET /zone/:zone_id/industry](./zone/industry.md)
    * [赛区评分标准 GET /zone/:zone_id/standard](./zone/standard.md)
    * [设置个别评分标准 POST /zone/:zone_id/standard](./zone/standard.md#设置个别评分标准)
    * [是否使用个别评分标准 GET /zone/:zone_id/standard/individual](./zone/standard.md#是否使用个别评分标准)
    * [设置是否使用个别评分标准 PATCH /zone/:zone_id/standard/individual](./zone/standard.md#设置是否使用个别评分标准)
    * [赛区指派 POST /zone/assign](./zone/assign.md)
    
* 赛程部分
    * [创建赛程 POST /unit](./unit/create.md)
    * [编辑赛程 PATCH /unit/:unit_id](./unit/{unit_id}.md)
    * [删除赛程 DELETE /unit/:unit_id](./unit/{unit_id}.md#删除赛程)
    
* 行业部分
    * [添加赛事行业 POST /industry](./industry/add.md)
    * [编辑赛事行业 PATCH /industry/:industry_id](./industry/{industry_id}.md)
    
* 评委部分
    * [添加评委 POST /judge](./judge/create.md)
    * [评委列表 GET /judge/match/:match_id](./judge/match.md)
    * [编辑评委 PATCH /judge/:judge_id](./judge/{judge_id}.md)
    * [删除评委 DELETE /judge/:judge_id](./judge/{judge_id}.md#删除评委)
    * [评委点评 POST /judge/:judge_id/review](./judge/{judge_id}.md#评委点评)
    * [邀请短信发送 POST /judge/message](./judge/message.md)
    * [是否是赛事评委 GET /judge/exists/:unis](./judge/exits.md)
    * [评委赛程 GET /judge/:judge_id/units](./judge/units.md)
    * [评委BP列表 GET /judge/:judge_id/bp](./judge/bp.md)
    
* 参赛者部分
    * [参赛者BP信息 GET /player/bp](./player/bp.md)
    * [参赛者报名信息 GET /player/info](./player/info.md)
    * [附件 GET /player/attachment](./player/attachment.md)
    * [附件上传 POST /player/attachment/upload](./player/attachment.md#删除附件)
    * [参赛报名 POST /enroll/commit](./enroll/commit.md)
    * [手机参赛报名 POST /enroll/commit/mobile](./enroll/commit.md#手机参赛报名)
    
* BP部分
    * [BP详情 GET /bp/detail/:map_id](./bp/detail.md)
    * [BP评分 POST /bp/score/:map_id](./bp/score.md)
    * [BP slide信息 GET /bp/:unis/slides](./bp/slides.md)
