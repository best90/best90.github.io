## 编辑赛事

```
PATCH /match/:match_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |赛事名称|
| `del` | string | √ | |是否删除 1是 0否|
| `admin_id` | string | √ | |当前管理员id|

### request example
```json
/match/274

{
    'del':0,
    'name':'水果大赛',
    'admin_id':196
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":{
        "id":"274"
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

## 赛事行业列表

```
GET /match/:match_id/industry
```

### request example
```json
/match/251/industry
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":7,
            "industry_name":"电商",
            "customize":0
        },
        {
            "id":8,
            "industry_name":"企业服务",
            "customize":0
        },
        {
            "id":9,
            "industry_name":"金融",
            "customize":0
        },
        {
            "id":10,
            "industry_name":"医疗健康",
            "customize":0
        },
        {
            "id":11,
            "industry_name":"教育",
            "customize":0
        },
        {
            "id":12,
            "industry_name":"文体娱乐",
            "customize":0
        },
        {
            "id":13,
            "industry_name":"游戏",
            "customize":0
        },
        {
            "id":14,
            "industry_name":"社交",
            "customize":0
        },
        {
            "id":15,
            "industry_name":"智能硬件",
            "customize":0
        },
        {
            "id":16,
            "industry_name":"消费升级",
            "customize":0
        },
        {
            "id":17,
            "industry_name":"广告营销",
            "customize":0
        },
        {
            "id":18,
            "industry_name":"汽车交通",
            "customize":0
        },
        {
            "id":19,
            "industry_name":"VR/AR",
            "customize":0
        },
        {
            "id":20,
            "industry_name":"内容经济",
            "customize":0
        },
        {
            "id":21,
            "industry_name":"大数据",
            "customize":0
        },
        {
            "id":56,
            "industry_name":"移动互联网",
            "customize":1
        },
        {
            "id":82,
            "industry_name":"牛逼1",
            "customize":1
        },
        {
            "id":83,
            "industry_name":"牛逼2",
            "customize":1
        },
        {
            "id":84,
            "industry_name":"牛逼x",
            "customize":1
        },
        {
            "id":85,
            "industry_name":"其他",
            "customize":1
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