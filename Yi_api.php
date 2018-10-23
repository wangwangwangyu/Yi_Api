<?php
学车技巧列表
请求地址: 
http:// http://mp.whrango.com/api/skill/skill_list
请求参数:
cate_id 科目 //科一 9 科二 10 科三 11 科四 12
page  页码
pageSize 每页条数
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：{
    "msg": "学车技巧",
    "data": [
        {
            "id": 1,
            "cate_id": 2,
            "title": "dscd",
            "title_sub": "csdcdsc",
            "title_color": null,
            "url": null,
            "thumb": "/storage/201810/19/57293918bf338a7b63a9139e61449c82.jpeg",
            "thumbs": null,
            "click": 0,
            "body": "&lt;p&gt;cscsdcscdscsdcds&lt;/p&gt;",
            "keywords": null,
            "description": null,
            "sort": 500,
            "exattr": "null",
            "author": null,
            "created_at": "1539704251",
            "updated_at": "1540172756",
            "is_show": 1,
            "is_stick": 0
        }
    ],
    "count": 2,
    "code": 200
}
//-----------------------------------------------------------------------------------------

学车技巧详情
请求地址: 
http:// http://mp.whrango.com/api/skill/skill
请求参数:
skill_id  文章ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例
{
    "msg": "学车技巧详情",
    "data": {
        "id": 2,
        "cate_id": 2,
        "title": "练车技巧",
        "title_sub": "练车技巧1",
        "title_color": null,
        "url": null,
        "thumb": "/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
        "thumbs": null,
        "click": 0,
        "body": "&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/storage/201810/22/fcc9ef79940502a87c5cba5b1fcc4abb.jpeg&quot; style=&quot;height:56px; width:100px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;练车技巧&lt;/p&gt;",
        "keywords": null,
        "description": null,
        "sort": 500,
        "exattr": "null",
        "author": null,
        "created_at": "1540171629",
        "updated_at": "1540172745",
        "is_show": 1,
        "is_stick": 0
    },
    "code": 200
}
//--------------------------------------------------------------------------------------------------
