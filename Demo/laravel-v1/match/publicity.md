## 宣传页信息

```
GET /match/:match_id/publicity
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|

### request example
```json
/match/251/publicity

{
  'admin_id': 196
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "introInfo":{
            "id":17,
            "race_affair_id":251,
            "name":"大赛简介",
            "value":"<p>其实我很牛逼啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>",
            "sort":1,
            "display":1
        },
        "matchRule":{
            "id":18,
            "race_affair_id":251,
            "name":"大赛规则",
            "value":"<p>省时间手机号结绳记事结合实际好几十季后赛金花假数据好几十就</p>",
            "sort":2,
            "display":1
        },
        "onlineEnroll":{
            "id":19,
            "race_affair_id":251,
            "name":"报名入口",
            "value":null,
            "sort":3,
            "display":1
        },
        "supportInfo":{
            "id":20,
            "race_affair_id":251,
            "name":"指导单位与合作伙伴",
            "value":"<p>什么什么嘛什么什么什么秘密什么什么嘛没事 </p>",
            "sort":4,
            "display":1
        },
        "otherInfo":{
            "id":21,
            "race_affair_id":251,
            "name":"其他",
            "value":"<p>什么事吗木马扫描模式没什么嘛没什么没忙什么没忙什么吗</p>",
            "sort":5,
            "display":1
        },
        "contactInfo":{
            "id":22,
            "race_affair_id":251,
            "name":"contact",
            "value":"<p><strong>联系我们</strong></p> <p>联系人：疯狂小助手</p> <p>联系地址：福建省厦门市软件园1期A102头家科技</p> <p>联系电话：0592-6633848</p> <p>联系邮箱：service@nutsbp.com</p>",
            "sort":6,
            "display":1
        },
        "aboutInfo":{
            "id":23,
            "race_affair_id":251,
            "name":"about",
            "value":"<p>疯狂BP是一个专门为创业者服务的，专业打造商业计划书的高效工具。在这个平台上不仅仅能够快速制作精美商业计划书，还能投递给海量投资人。非常棒,疯狂BP是一个专门为创业者服务的，专业打造商业计划书的高效工具。在这个平台上不仅仅能够快速制作精美商业计划书，还能投递给海量投资人。非常棒疯狂BP是一个专门为创业者服务的，专业打造商业计划书的高效工具。</p>",
            "sort":7,
            "display":1
        },
        "banner":"2017-04-19/58f721b260f92.png"
    },
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

## 设置宣传页信息

```
POST /match/:match_id/publicity
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `admin_id` | int | √ | |管理员id|
| `data` | array | √ | |宣传页数据|

### request example
```json
/match/251/publicity

{
  'admin_id': 196,
  'data' : {
    "introInfo":{
        "name":"大赛简介",
        "value":"xxxxxxxxxx",
        "sort":1,
        "display":1
    },
    "matchRule":{
        "name":"大赛规则",
        "value":"xxxxxx",
        "sort":2,
        "display":1
    },
    "onlineEnroll":{
        "name":"报名入口",
        "value":null,
        "sort":3,
        "display":1
    },
    "supportInfo":{
        "name":"指导单位与合作伙伴",
        "value":"xxxxxxx",
        "sort":4,
        "display":1
    },
    "otherInfo":{
        "name":"其他",
        "value":"xxxxxxxxxx",
        "sort":5,
        "display":1
    },
    "contactInfo":{
        "name":"contact",
        "value":"xxxxxxx",
        "sort":6,
        "display":1
    },
    "aboutInfo":{
        "name":"about",
        "value":"xxxxxxxxxxxx",
        "sort":7,
        "display":1
    },
  }
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
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


## 宣传页图片

```
GET /match/:match_id/publicity/image
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `type` | string | √ | |图片类型 有banner, logo|

### request example
```json
/match/251/publicity/image

{
  'type': 'banner'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "url":"2017-04-19/58f721b260f92.png"
    },
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

## 宣传页图片上传

```
POST /match/publicity/upload
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `match_id` | int | √ | | 赛事id|
| `type` | string | √ | |图片类型 有banner, logo|

### request example
```json
{
  'match_id': 196,
  'type': 'banner'
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "url":"2017-04-19/58f721b260f92.png"
    },
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