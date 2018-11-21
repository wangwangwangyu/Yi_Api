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
            "post_url": "https://www.guaikakeji.com/api/coach/students"
        },
        {
            "title": "往期学员",
            "post_url": "https://www.guaikakeji.com/api/coach/students"
        }
    ]
}



//—————————————————————教练的学员
https://www.guaikakeji.com/api/coach/students

'in_pro'=>'当前学员/往期学员'  9，往期学员 1，当前学员
'coach_id'=>'教练id'
'subject_type'=>'科目分类' 2，科二， 3， 科三
'page'=>'页码'
'pageSize'=>'页数'
'trade_cate'=>'C1/C2' 驾照级别
'realname'=> 姓名搜索，
'phone'=> 电话搜素
返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
     "count":
}

示例：{
    "msg": "当前学员",
    "count": 1,
    "data": [
        {
            "realname": "旺X",
            "phone": 15958927172,
            "trade_id": 173,
            "user_id": 41,
            "meal_id": 2,
            "trade_cate": "C1",
            "subject_type": "科目二",
            "check": "查看",
            "check_url": "https://www.guaikakeji.com/api/coach/check_student"
        }
    ],
    "code": 200
}
     


//—————————————————————学员学车进度
https://www.guaikakeji.com/api/coach/check_student

'coach_id'=>'教练id'
'user_id'=>'用户ID'

/**
返回的参数中：
"subject_item_times": 0,  //练习项目的练习次数 没有练习过为 0
  "exercise_time": 9     //练习项目的练习时长
返回结构:
*/
 
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
                "subject_item_times": 0,  //练习项目的练习次数
                "subject_item_type": "科目二",
                "exercise_time": 9     //练习项目的练习时长
            },
            {
                "id": 2,
                "title": "倒车入库",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 2,
                "subject_item_times": 0,
                "subject_item_type": "科目二",
                "exercise_time": 3
            },
            {
                "id": 3,
                "title": "侧方停车",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 3,
                "subject_item_times": 0,
                "subject_item_type": "科目二",
                "exercise_time": 0
            },
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

//——用户可选择的预约
https://www.guaikakeji.com/api/subject/user_subjects

 'user_id' => '用户id',

返回结构:
{

    "code": 201,
    "msg": , 
     "data": , 
}

示例：{
{
    "count": 0,
    "code": 201,
    "msg": "没有可选的预约",
    "data": ""
}

{
    "count": 3,
    "code": 200,
    "msg": "有可选的预约",
    "data": [
        {
            "coach_name": "郑飞",
            "coach_phone": 18162718162,
            "day": "2018-11-20上午",
            "subject_id": 13,
            "subject_item_id": 1,
            "subject_name": "压离合",
            "subject_place": "江夏大型训练基地",
            "subject_type": "科目二"
        },
        {
            "coach_name": "郑飞",
            "coach_phone": 18162718162,
            "day": "2018-11-21下午",
            "subject_id": 14,
            "subject_item_id": 1,
            "subject_name": "压离合",
            "subject_place": "武汉工商校内训练场",
            "subject_type": "科目二"
        },
        {
            "coach_name": "郑飞",
            "coach_phone": 18162718162,
            "day": "2018-11-22上午",
            "subject_id": 15,
            "subject_item_id": 5,
            "subject_name": "直角转弯",
            "subject_place": "武汉科技大学大型训练场",
            "subject_type": "科目二"
        }
    ]
}

//——用户提交预约
https://www.guaikakeji.com/api/subject/make_subjectapply

 'user_id' => '用户id',
 'subject_apply_id' => '教练的发布id',


返回结构:
{

    "code": 200,
    "msg": , 

}

示例：{
    "code": 201,
    "msg": "预约失败了"
}

//——用户取消预约
https://www.guaikakeji.com/api/subject/del_subjectapply

 'subject_apply_id' => '预约订单ID',


返回结构:
{

    "code": 201,
    "msg": , 

}

示例：{
    "code": 200,
    "msg": "取消成功"
}
//——用户学车进程
https://www.guaikakeji.com/api/user/process

 'user_id' => '用户ID',


返回结构:
{

    "code": 200,
    "msg": , 
    "data":,

}

示例：
1,{
    "data": {
        "over": 9,
        "ready": {
            "code": 9,
            "time": ""
        },
        "lesson_1": 9,
        "lesson_2": 9,
        "lesson_3": 9,
        "lesson_4": 9,
        "is_subject_1": 9,
        "is_subject_2": 9,
        "is_subject_3": 9,
        "is_subject_4": 9
    },
    "msg": "获取成功",
    "code": 200
}
2,{
    "data": {
        "over": 9,   // 拿证成功
        "ready": {   //报名成功（付款成功）
            "code": 1,
            "time": "2018年11月09日"
        },
        "lesson_1": 1,
        "lesson_2": 1,
        "lesson_3": 9,
        "lesson_4": 9,
        "is_subject_1": 1,
        "is_subject_2": 9,
        "is_subject_3": 9,
        "is_subject_4": 9,
        "is_exam": 1
    },
    "msg": "获取成功",
    "code": 200
}
//——用户的预约（我的课程）  /预约成功还没有去的预约
https://www.guaikakeji.com/api/user/user_subjectapply

 'user_id' => '用户ID',
 'type'=>'科目' ，2 科二，3 科三
 返回结构：
 示例：{
    "count": ,
    "del_url": ,
    "code": 200,
    "msg": "",
    "data": 
}
示例：{
    "count": 18,
    "del_url": "https://www.guaikakeji.com/api/subject/del_subjectapply",
    "code": 200,
    "msg": "科二的预约",
    "data": [
        {
            "subject_apply_id": 25,
            "day": "2018-11-19下午",
            "place": "武汉科技大学大型训练场",
            "coach_2": "郑飞",
            "status": "预约中"
        },
        {
            "subject_apply_id": 30,
            "day": "2018-11-18下午",
            "place": "武汉科技大学大型训练场",
            "coach_2": "郑飞",
            "status": "预约中"
        },
 
    ]
}
//——驾照类别
https://www.guaikakeji.com/api/common/meal_cate

 返回结构：
 示例：{

    "code": 200,
    "msg": "",
    "data": 
}
示例：{
    
    "code": 200,
    "msg": "教照类别",
    "data": [
        {
            "id": 1,
            "title": "C1"
        },
        {
            "id": 2,
            "title": "C2"
        },
    ]
}

//——发布课程表单
https://www.guaikakeji.com/api/coach/add_form
'coach_id'=>教练id
 返回结构：
 示例：{

    "code": 200,
    "msg": "",
    "data": 
}
示例：{
    
{
    "data": {
        "place": [
            {
                "id": 9,
                "name": "武汉科技大学大型训练场"
            },
            {
                "id": 10,
                "name": "武纺后街训练场"
            },
            {
                "id": 11,
                "name": "江夏大型训练基地"
            },
            {
                "id": 12,
                "name": "武汉工商校内训练场"
            }
        ],
        "subject_item": [
            {
                "id": 1,
                "title": "压离合",
                "type": 2,
                "cate_id": 1,
                "max": 5,
                "order": 1,
                "type_name": "科目二",
                "cate_name": "C1"
            },
   
            {
                "id": 10,
                "title": "直线加速",
                "type": 3,
                "cate_id": 1,
                "max": 2,
                "order": 1,
                "type_name": "科目三",
                "cate_name": "C1"
            },
          
        ]
    },
    "code": 200,
    "msg": "发布表单"
}
//——教练删除课程
https://www.guaikakeji.com/api/coach/del_subject
                'subject_id'=>'发布的Id',
                
 返回结构：
 示例：{

    "code": 200,
    "msg": "",
  
}
示例：{
    
{
   
    "code": 200,
    "msg": "删除成功"
}

//——教练发布课程
https://www.guaikakeji.com/api/coach/add_subject
                'coach_id'=>'教练',
                'day_time' => '练车时间段', 1,上午，2 下午
                'subject_item_id' => '练习项目',
                'max_number'=>'可预约人数',
                'day' => '练车日期',
                'place_id' => '练习地址',
 返回结构：
 示例：{

    "code": 200,
    "msg": "",
  
}
示例：{
    
{
   
    "code": 200,
    "msg": "新增成功"
}

//——教练确认学员科目通过情况（科目进度）
https://www.guaikakeji.com/api/coach/edit_students_subject
                'coach_id'=>'教练',
                'is_subject'=>'2/3'  2，科二 3，科三
                'user_id'=>'学员ID'
               
 返回结构：
 示例：{

    "code": 200,
    "msg": "",
  
}
示例：{
    
{
   
    "code": 200,
    "msg": "修改成功"
}

