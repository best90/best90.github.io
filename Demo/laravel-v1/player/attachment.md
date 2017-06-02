## 附件

```
GET /player/attachment
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `bp_id` | int | √ | |bp id|
| `match_id` | int | √ | |赛事id|

### request example
```json
{
    'bp_id': 330,
    'match_id': 251,
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[
        {
            "id":180,
            "attachement_name":"效果图.jpg",
            "enroll_url":"2017-04-20/58f8908dc168a.jpg"
        },
        {
            "id":182,
            "attachement_name":"58f8908dc168a.jpg",
            "enroll_url":"2017-05-23/592404aee71a9.jpg"
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


## 上传附件

```
POST /player/attachment/upload
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `bp_id` | int | √ | |bp id|
| `match_id` | int | √ | |赛事id|

### request example
```json
请上传图片

{
    'bp_id': 330,
    'match_id': 251,
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


## 删除附件

```
DELETE /player/attachment/{attachment_id}
```
### request example
```json
/player/attachment/183
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