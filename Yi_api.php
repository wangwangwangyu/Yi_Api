<?php
//code说明。200请求成功，404未找到数据，401 非法请求
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
           "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
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
      "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        "is_show": 1,
        "is_stick": 0
    },
    "code": 200
}
//--------------------------------------------------------------------------------------------------
学车技巧列表
请求地址: 
http:// http://mp.whrango.com/api/plade/plade_list
//data中"distance"为练习场和学员之间的距离km
请求参数:
lat 纬度//30.123456
lng 经度//111.123456
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,数量
"msg": , 
}

示例：{
    "msg": "练习场列表",
    "data": [
        {
            "id": 7,
            "name": "大大方方2",
            "address_detail": "反对v发v地方",
            "lng": "114.353939",
            "lat": "30.585999",
            "created_at": "1539571355",
            "updated_at": "1540267364",
            "zoom": 18,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 0,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-23 12:02:44"
        },
        {
            "id": 3,
            "name": "测试1",
            "address_detail": "欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏欣赏下欣赏/r下",
            "lng": "114.336085",
            "lat": "30.547853",
            "created_at": "1539571260",
            "updated_at": "1539571459",
            "zoom": 15,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 4.57,
            "created_time": "2018-10-15 10:41:00",
            "updated_time": "2018-10-15 10:44:19"
        },
        {
            "id": 4,
            "name": "大大方方",
            "address_detail": "反对v发v地方",
            "lng": "114.316527",
            "lat": "30.529811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 7.2,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        },
        {
            "id": 5,
            "name": "嗡嗡嗡1",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.529811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 8.66,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        },
        {
            "id": 6,
            "name": "嗡嗡嗡2",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.829811",
            "created_at": "1539571355",
            "updated_at": "1539609863",
            "zoom": 17,
            "is_show": 1,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 27.76,
            "created_time": "2018-10-15 10:42:35",
            "updated_time": "2018-10-15 21:24:23"
        }
    ],
    "count": 5,
    "code": 200
}
//-----------------------------------------------------------------------------------------

练习场详情
请求地址: 
http:// http://mp.whrango.com/api/plade/plade
请求参数:
plade_id  练习场ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例
{
    "msg": "练习场详情",
    "data": {
        "id": 7,
        "name": "大大方方2",
        "address_detail": "反对v发v地方",
        "lng": "114.353939",
        "lat": "30.585999",
        "created_at": "1539571355",
        "updated_at": "1540267364",
        "zoom": 18,
        "is_show": 1,
        "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
        "created_time": "2018-10-15 10:42:35",
        "updated_time": "2018-10-23 12:02:44"
    },
    "code": 200
}

