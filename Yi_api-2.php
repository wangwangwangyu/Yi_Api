<?php
//—————————————————————个人中心
https://www.guaikakeji.com/api/coach/my_center

 'coach_id' => '教练id',

返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}

示例：{
    "code": 200,
    "msg": "请求成功",
    "data": {
        "my_students": {
            "title": "我的学员",
            "post_url": "https://www.guaikakeji.com/api/coach/my_students"
        },
        "my_lesson": {
            "title": "我的课程表",
            "post_url": "https://www.guaikakeji.com/api/coach/my_lesson"
        }
    }
}

//—————————————————————我的学员
https://www.guaikakeji.com/api/coach/my_students

返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}

示例：{
    "code": 200,
    "msg": "请求成功",
    "data": [
        {
            "title": "当前学员",
            "post_url": "https://www.guaikakeji.com/api/coach/ing_students"
        },
        {
            "title": "往期学员",
            "post_url": "https://www.guaikakeji.com/api/coach/end_students"
        }
    ]
}



//—————————————————————当前学员
https://www.guaikakeji.com/api/coach/ing_students

'coach_id'=>'教练id'
返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}

示例：{
    "code": 200,
    "msg": "请求成功",
    "data": {
        "subject_2": [
            {
                "realname": "旺X",
                "phone": 15958927172,
                "trade_id": 173,
                "user_id": 41,
                "subject_type": "科目二",
                "check": "查看",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            },
            {
                "realname": "郑飞",
                "phone": 18162718162,
                "trade_id": 171,
                "user_id": 40,
                "subject_type": "科目二",
                "check": "查看",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            }
        ],
        "subject_3": [
            {
                "realname": "何恒兆",
                "phone": 13007111605,
                "trade_id": 172,
                "user_id": 42,
                "subject_type": "科目三",
                "check": "查看",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            },
            {
                "realname": "郑飞",
                "phone": 18162718162,
                "trade_id": 171,
                "user_id": 40,
                "subject_type": "科目三",
                "check": "查看",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            }
        ]
    }
}
，{
    "code": 200,
    "msg": "请求成功",
    "data": {
        "subject_3": [],
        "subject_2": []
    }
}

//—————————————————————过往学员
https://www.guaikakeji.com/api/coach/end_students

'coach_id'=>'教练id'
返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}

示例：{
    "code": 200,
    "msg": "请求成功",
    "data": {
        "subject_2": [
            {
                "realname": "旺X",
                "phone": 15958927172,
                "trade_id": 173,
                "user_id": 41,
                "subject_type": "科目二",
                "check": "查看进度",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            },
            {
                "realname": "郑飞",
                "phone": 18162718162,
                "trade_id": 171,
                "user_id": 40,
                "subject_type": "科目二",
                "check": "查看进度",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            }
        ],
        "subject_3": [
            {
                "realname": "何恒兆",
                "phone": 13007111605,
                "trade_id": 172,
                "user_id": 42,
                "subject_type": "科目三",
                "check": "查看进度",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            },
            {
                "realname": "郑飞",
                "phone": 18162718162,
                "trade_id": 171,
                "user_id": 40,
                "subject_type": "科目三",
                "check": "查看进度",
                "check_url": "https://www.guaikakeji.com/api/coach/check_student"
            }
        ]
    }
}
，{
    "code": 200,
    "msg": "请求成功",
    "data": {
        "subject_3": [],
        "subject_2": []
    }
}

//—————————————————————学员学车进度
https://www.guaikakeji.com/api/coach/check_students

'coach_id'=>'教练id'
'user_id'=>'用户ID'
返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}


示例：
{
    "data": {
        "subject_2": [
            {
                "id": 1,
                "title": "压离合",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 1,
                "subject_item_times": 3,
                "subject_item_type": "科目二"
            },
            {
                "id": 2,
                "title": "倒车入库",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 2,
                "subject_item_times": 1,
                "subject_item_type": "科目二"
            },
            {
                "id": 3,
                "title": "侧方停车",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 3,
                "subject_item_times": 0,
                "subject_item_type": "科目二"
            },
            {
                "id": 4,
                "title": "山坡起步",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 4,
                "subject_item_times": 1,
                "subject_item_type": "科目二"
            },
            {
                "id": 5,
                "title": "直角转弯",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 5,
                "subject_item_times": 0,
                "subject_item_type": "科目二"
            },
            {
                "id": 6,
                "title": "S路",
                "type": 2,
                "cate_id": 1,
                "max": 6,
                "order": 6,
                "subject_item_times": 0,
                "subject_item_type": "科目二"
            }
        ],
        "subject_3": []
    },
    "code": 200,
    "msg": "查到信息"
}

{
    "data": {
        "subject_2": [],
        "subject_3": []
    },
    "code": 200,
    "msg": "查到信息"
}



//—————————————————————我的课程
https://www.guaikakeji.com/api/coach/my_lesson 
'coach_id'=>'教练ID'
返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
     "add_url": , 
}
示例：
{
    "add_url": "https://www.guaikakeji.com/api/coach/add_subject",
    "code": 200,
    "msg": "没有可用的发布",
    "data": ""
}

{
    "add_url": "https://www.guaikakeji.com/api/coach/add_subject",
    "code": 200,
    "msg": "有发布",
    "data": [
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月16日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 3,
            "number": 8,
            "id": 1,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月17日 ",
            "place": "武纺后街训练场",
            "max_number": 2,
            "number": 2,
            "id": 3,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月17日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 2,
            "number": 2,
            "id": 4,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月16日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 2,
            "number": 2,
            "id": 8,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月18日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 2,
            "number": 3,
            "id": 9,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月21日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 2,
            "number": 2,
            "id": 11,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月19日 ",
            "place": "武汉科技大学大型训练场",
            "max_number": 2,
            "number": 2,
            "id": 12,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        },
        {
            "type": "下午2:00-5:00",
            "day": "2018年11月20日 ",
            "place": "江夏大型训练基地",
            "max_number": 4,
            "number": 0,
            "id": 13,
            "check_url": "https://www.guaikakeji.com/api/coach/subject_info",
            "edit_url": "https://www.guaikakeji.com/api/coach/edit_subject",
            "del_url": "https://www.guaikakeji.com/api/coach/del_subject"
        }
    ]
}


//—————————————————————我的课程参与的学员
 https://www.guaikakeji.com/api/coach/subject_info
'subject_id'=>'发布ID'
返回结构:
{

    "code": 201,
    "msg": , 
    "data": [],
    "count": 0,
    "info"：
}
示例：

{
    "data": [
        {
            "user_id": 40,
            "trade_id": 171,
            "user_name": "郑飞",
            "subject_item_name": "压离合"
        },
        {
            "user_id": 40,
            "trade_id": 171,
            "user_name": "郑飞",
            "subject_item_name": "压离合"
        },
        {
            "user_id": 40,
            "trade_id": 171,
            "user_name": "郑飞",
            "subject_item_name": "压离合"
        }
    ],
    "info": {
        "day": "2018年11月18日 ,上午8:00-11:00",
        "place": "武汉科技大学大型训练场"
    },
    "count": 3,
    "code": 200,
    "msg": "参与学员"
}
{
    "data": [],
    "count": 0,
    "info": {
        "day": "2018年11月16日 ,上午8:00-11:00",
        "place": "武汉科技大学大型训练场"
    },
    "code": 200,
    "msg": "参与学员"
}