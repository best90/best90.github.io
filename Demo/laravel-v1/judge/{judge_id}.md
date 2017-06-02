## 编辑评委

```
PATCH /judge/:judge_id
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `name` | string | √ | |姓名|
| `city` | string |  | |城市|
| `domain` | string |  | |投资领域|
| `profile` | string |  | |简介|

### request example
```json
/judge/410

{
   'name':'xxx',
   'city':'',
   'domain':'',
   'profile':'',
}
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[],
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


## 删除评委

```
DELETE /judge/:judge_id
```

### request example
```json
/judge/410
```

### response:
#### 成功
```json
{
    "code":0,
    "data":[],
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


## 评委点评

```
POST /judge/:judge_id/review
```
### 参数
| Attribute | Type(长度) | Required | Default | Description |
| ---------- | --- | -------- | ---- | ----------- |
| `bp_id` | int | √ | |BP id|
| `unit_id` | int | √ | |赛程id|
| `content` | string | | |点评内容|

### request example
```json
/judge/363/review

{
    'bp_id': 330,
    'unit_id': 255,
    'content': '牛逼'
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