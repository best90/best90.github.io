## 报名页banner图片上传

```
POST /match/banner/upload
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `match_id` | int | √ | | 赛事id|

### request example
```json
{
  'match_id': 196
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

## 报名页banner图片

```
 GET /match/:match_id/banner
```

### request example
```json
/match/307/banner
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