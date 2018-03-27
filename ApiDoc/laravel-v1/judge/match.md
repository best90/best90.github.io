## 评委列表及已选择的赛事评委

```
GET /judge/match/:match_id
```
### request example
```json
/judge/match/284
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":409,
            "name":"隔壁老王",
            "tel":"00118396008444",
            "city":"福建",
            "domain":"隔壁邻居",
            "profile":"专注挖墙角二十年",
            "choose":0
        },
        {
            "id":405,
            "name":"会飞的鱼",
            "tel":"00118396008420",
            "city":"上海",
            "domain":"O20",
            "profile":"早期天使投资人，投资过滴滴打人、吹牛逼",
            "choose":0
        },
        {
            "id":407,
            "name":"明星VC",
            "tel":"00118396008455",
            "city":"中国",
            "domain":"娱乐",
            "profile":"明星团体组成的VC团队",
            "choose":0
        },
        {
            "id":406,
            "name":"21号",
            "tel":"00118396008421",
            "city":"上海",
            "domain":"互联网",
            "profile":"寻找独角兽",
            "choose":0
        },
        {
            "id":363,
            "name":"VC",
            "tel":"18396008401",
            "city":null,
            "domain":null,
            "profile":null,
            "choose":1
        },
        {
            "id":364,
            "name":"罗小帅",
            "tel":"15559112236",
            "city":null,
            "domain":null,
            "profile":null,
            "choose":0
        },
        {
            "id":365,
            "name":"杜帅哥",
            "tel":"18750508872",
            "city":null,
            "domain":null,
            "profile":null,
            "choose":0
        },
        {
            "id":366,
            "name":"开保时捷的那位",
            "tel":"18840851506",
            "city":null,
            "domain":null,
            "profile":null,
            "choose":0
        },
        {
            "id":403,
            "name":"女",
            "tel":"00118396008409",
            "city":"南京",
            "domain":"游戏",
            "profile":"知名投资人",
            "choose":0
        },
        {
            "id":404,
            "name":"Mr. Lee",
            "tel":"00118396008405",
            "city":"上海",
            "domain":"",
            "profile":"",
            "choose":0
        }
    ],
    "msg":"成功"
}
```
#### 失败
```
{
  "code": 2,
  "data": [],
  "msg": "请求参数错误"
}
```