<?php
学车技巧首页/分类页
请求地址: 
http:// http://mp.whrango.com/api/skill/skill_index
请求参数:
返回结构:
{
  "code": 200,
  "data": ,列表信息
"count": ,文章数量
"msg": , 
}

{
    "msg": "学车技巧分类",
    "data": [
        {
            "id": 9,
            "name_cn": "科目一",
            "name_en": "subject_1"
        },
        {
            "id": 10,
            "name_cn": "科目二",
            "name_en": "subject_2"
        },
        {
            "id": 11,
            "name_cn": "科目三",
            "name_en": "subject_3"
        },
        {
            "id": 12,
            "name_cn": "科目四",
            "name_en": "subject_4"
        }
    ],
    "count": 4,
    "code": 200
}
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
            "id": 5,
            "title": "练车技巧5",
            "title_sub": "练车技巧5",
            "updated_at": "2018-10-23 10:23:49",
            "thumb": "http://mp.whrango.com/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
            "cate_name": "科目一"
        },
        {
            "id": 6,
            "title": "练车技巧6",
            "title_sub": "练车技巧6",
            "updated_at": "2018-10-23 10:23:49",
            "thumb": "http://mp.whrango.com/storage/201810/22/59057729ad734e73aeea442f13b6605a.jpeg",
            "cate_name": "科目一"
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
        "id": 18,
        "title": "科目一10",
        "title_sub": "科目一10科目一10科目一10科目一10",
        "updated_at": "2018-10-24 11:10:36",
        "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg",
        "body": "",
        "author": null,
        "click": 0，
        "cate_name": "科目一"
    },
    "code": 200
}
//--------------------------------------------------------------------------------------------------
练习场列表
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
            "id": 5,
            "name": "嗡嗡嗡1",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.529811",
            "zoom": 17,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 8.66,
        },
        {
            "id": 6,
            "name": "嗡嗡嗡2",
            "address_detail": "反对v发v地方",
            "lng": "114.416527",
            "lat": "30.829811",
            "zoom": 17,
            "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
            "distance": 27.76,
      
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
        "zoom": 18,
        "thumb": "http://mp.whrango.com/storage/201810/23/7fa9659fc66be084205ce089fe436a1d.jpeg",
    },
    "code": 200
}
//-----------------------------------------------------------------------------------------
学车套餐列表
请求地址: 
http:// http://mp.whrango.com/api/meal/meal_list
请求参数:
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
    "msg": "学车套餐",
    "data": [
       {
            "id": 2,
            "title": "套餐2",
            "subtitle": "vfdvf",
            "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "price": 33333
        },
        {
            "id": 3,
            "title": "套餐3",
            "subtitle": "vfdvf",
            "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
            "price": 3333
        },
    ],
    "count": 5,
    "code": 200
}
//-----------------------
学车套餐详情
请求地址: 
http:// http://mp.whrango.com/api/meal/meal
请求参数:
meal_id  套餐ID
返回结构:
{
  "code": 200,
  "data": , 
"msg": ,
}
示例:
{
    "msg": "套餐详情",
    "data": {
        "id": 3,
        "title": "套餐3",
        "subtitle": "vfdvf",
        "thumb": "http://mp.whrango.com/storage/201810/15/d40d13bbceffb3132460f52833b04efa.jpeg",
        "price": 3333,
        "body": "<p>efvefvf</p>"
    },
    "code": 200
}
//-----------------------------------------------------------------------------------------
页面单个banner
请求地址: 
http:// http://mp.whrango.com/api/banner/banner
请求参数:
返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：
{
    "data": [
        {
            "id": 5,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        },
        {
            "id": 12,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        },
        {
            "id": 13,
            "thumb": "http://mp.whrango.com/storage/201810/23/3a1b4d0437675e6ac09825566cb8877c.jpeg",
            "cate_id": 3,
            "title": "index",
            "sort": 50
        }
    ],
    "code": 200,
    "count": 3,
    "msg": "banner图"
}
//-----------------------
关于我们
请求地址: 
http:// http://mp.whrango.com/api/about/about
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
//code说明。200请求成功，404未找到数据，401 非法请求
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "关于我们",
        "title_sub": null,
        "body": "<p>关于我们</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "关于我们",
    "count": 1
}
//-----------------------
保证协议
请求地址: 
http:// http://mp.whrango.com/api/agreement/agreement
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "保证协议",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "保证协议",
    "count": 1
}

//-----------------------
学车流程
请求地址: 
http:// http://mp.whrango.com/api/flow/flow
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "学车流程",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "学车流程",
    "count": 1
}

//-----------------
安全保障
请求地址: 
http:// http://mp.whrango.com/api/insurance/insurance
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": {
        "id": 13,
        "cate_id": 6,
        "title": "安全保障",
        "title_sub": null,
        "body": "<p>xxx</p>",
        "updated_at": "2018-10-23 10:23:19"
    },
    "code": 200,
    "msg": "安全保障",
    "count": 1
}
//code说明。200请求成功，404未找到数据，401 非法请求
//-----------------
新闻列表
请求地址: 
http:// http://mp.whrango.com/api/news/news_list
请求参数:

page  页码
pageSize 每页条数

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "新闻列表",
    "data": [
        {
            "id": 20,
            "title": "新闻",
            "title_sub": "新闻xxx",
            "updated_at": "2018-10-23 17:35:41",
            "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg"
        },
        {
            "id": 1,
            "title": "新闻1",
            "title_sub": "新闻1",
            "updated_at": "2018-10-22 11:25:49",
            "thumb": "http://mp.whrango.com/storage/201810/19/57293918bf338a7b63a9139e61449c82.jpeg"
        }
    ],
    "count": 2,
    "code": 200
}
//-----------------
新闻详情
请求地址: 
http:// http://mp.whrango.com/api/news/news
请求参数:

news_id

返回结构:
{
  "code": 200,
  "data": ,信息

"msg": , 
}
{
    "msg": "新闻详情",
    "data": {
        "id": 20,
        "title": "新闻",
        "title_sub": "新闻xxx",
        "updated_at": "2018-10-23 17:35:41",
        "thumb": "http://mp.whrango.com/storage/201810/23/7a8e0cb3435a62ff22aa0926aa059e65.jpeg",
        "body": "xx",
        "author": null,
        "click": 0
    },
    "code": 200
}
//-----------------
常见问题列表
请求地址: 
http:// http://mp.whrango.com/api/question/questions
请求参数:

page  页码
pageSize 每页条数

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "msg": "常见问题列表",
    "data": [
        {
            "id": 26,
            "title": "一般多久可以拿证？",
            "title_sub": null,
            "body": ""
        }
    ],
    "count": 9,
    "code": 200
}


//-----------------
首页导航
请求地址: 
http:// http://mp.whrango.com/api/nav/nav
请求参数:

返回结构:
{
  "code": 200,
  "data": ,信息
"count": ,文章数量
"msg": , 
}
示例：
{
    "data": [
        {
            "id": 17,
            "url": "http://mp.whrango.com/api/flow/flow",
            "name": "学车流程",
            "thumb": "http://mp.whrango.com/storage/201810/25/d52b67473111af94b5a5dc2205711c81.png"
        },
        {
            "id": 18,
            "url": "http://mp.whrango.com/api/insurance/insurance",
            "name": "安全保障",
            "thumb": null
        },
       
    ],
    "count": 5,
    "code": 200,
    "msg": "平台首页"
}