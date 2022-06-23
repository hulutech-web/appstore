<?php
return [
    [
        'id' => 1,
        'parent_id' => 0,
        'path' => '/admin/index',
        'icon' => 'bar-chart',
        'meta' => array(
            'title' => '首頁',
            'permission' => 'admin.index',
            'description' => '展示后台首页',
        ),
        'name' => 'admin.index',
    ],
    [
        'id' => 2,
        'parent_id' => 0,
        'path' => '/admin/user',
        'icon' => 'user',
        'meta' => array(
            'title' => '用戶管理',
            'permission' => 'admin.user',
            'description' => '展示所有用户管理页面',
        ),
        'name' => 'admin.user',
        'children' => array(
            [
                'id' => 3,
                'parent_id' => 2,
                'icon' => 'desktop',
                'path' => '/admin/user/index',
                'meta' => array(
                    'title' => '用户列表',
                    'permission' => 'admin.user.index',
                    'description' => '展示所有用户列表,您可以修改、删除、设置用户角色',
                ),
                'name' => 'admin.user.index',
            ])
    ],
    [
        'id' => 4,
        'parent_id' => 0,
        'path' => '/admin/category',
        'icon' => 'ordered-list',
        'meta' => array(
            'title' => '游戏分类',
            'permission' => 'admin.category',
            'description' => '游戏分类管理',
        ),
        'name' => 'admin.category',
        'children' => array(

            [
                'id' => 5,
                'parent_id' => 4,
                'icon' => 'bars',
                'path' => '/admin/category/index',
                'meta' => array(
                    'title' => '游戏分类列表',
                    'permission' => 'admin.category.index',
                    'description' => '游戏分类列表',
                ),
                'name' => 'admin.category.index',
            ], [
                'id' => 6,
                'parent_id' => 4,
                'icon' => 'medicine-box',
                'path' => '/admin/category/add',
                'meta' => array(
                    'title' => '游戏分类添加',
                    'permission' => 'admin.category.add',
                    'description' => '游戏分类添加',
                ),
                'name' => 'admin.category.add',
            ])
    ],
    [
        'id' => 7,
        'parent_id' => 0,
        'path' => '/admin/game',
        'icon' => 'thunderbolt',
        'meta' => array(
            'title' => '游戏列表',
            'permission' => 'admin.game',
            'description' => '游戏列表',
        ),
        'name' => 'admin.game',
        'children' => array(
            [
                'id' => 8,
                'parent_id' => 7,
                'icon' => 'hdd',
                'path' => '/admin/game/index',
                'meta' => array(
                    'title' => '游戏列表',
                    'permission' => 'admin.game.index',
                    'description' => '游戏列表',
                ),
                'name' => 'admin.charge.index',
            ],
            [
                'id' => 9,
                'parent_id' => 7,
                'icon' => 'cluster',
                'path' => '/admin/game/sync',
                'meta' => array(
                    'title' => '同步游戏',
                    'permission' => 'admin.game.create',
                    'description' => '同步游戏',
                ),
                'name' => 'admin.game.create',
            ])
    ],
    [
        'id' =>10,
        'parent_id' => 0,
        'path' => '/admin/integral',
        'icon' => 'thunderbolt',
        'meta' => array(
            'title' => '用户积分',
            'permission' => 'admin.integral',
            'description' => '用户积分',
        ),
        'name' => 'admin.integral',
        'children' => array(
            [
                'id' => 11,
                'parent_id' => 10,
                'icon' => 'hdd',
                'path' => '/admin/integral/index',
                'meta' => array(
                    'title' => '积分排行',
                    'permission' => 'admin.integral.index',
                    'description' => '积分列表',
                ),
                'name' => 'admin.integral.index',
            ])
    ],
    [
        'id' =>12,
        'parent_id' => 0,
        'path' => '/admin/sign',
        'icon' => 'thunderbolt',
        'meta' => array(
            'title' => '用户签到',
            'permission' => 'admin.sign',
            'description' => '用户签到',
        ),
        'name' => 'admin.sign',
        'children' => array(
            [
                'id' => 13,
                'parent_id' => 12,
                'icon' => 'hdd',
                'path' => '/admin/sign/index',
                'meta' => array(
                    'title' => '签到排行',
                    'permission' => 'admin.sign.index',
                    'description' => '签到排行',
                ),
                'name' => 'admin.sign.index',
            ])
    ],
    [
        'id' => 14,
        'parent_id' => 0,
        'path' => '/admin/system',
        'icon' => 'setting',
        'meta' => array(
            'title' => '系统管理',
            'permission' => 'admin.system',
            'description' => '展示所有系统管理页面',
        ),
        'name' => 'admin.system',
        'children' => array(
            [
                'id' => 15,
                'parent_id' => 14,
                'icon' => 'contacts',
                'path' => '/admin/system/roles',
                'meta' => array(
                    'title' => '角色管理',
                    'permission' => 'admin.system.roles',
                    'description' => '展示所有角色管理页面,您可以初始化角色,并为角色添加权限',
                ),
                'name' => 'admin.system.roles',
            ],
            [
                'id' => 16,
                'parent_id' => 14,
                'icon' => 'insurance',
                'path' => '/admin/system/permissions',
                'meta' => array(
                    'title' => '权限管理',
                    'permission' => 'admin.system.permissions',
                    'description' => '初始化权限，全局菜单生成',
                ),
                'name' => 'admin.system.permissions',
            ],
            [
                'id' => 17,
                'parent_id' => 14,
                'icon' => 'car',
                'path' => '/admin/system/car',
                'meta' => array(
                    'title' => '汽车報告配置',
                    'permission' => 'admin.system.car',
                    'description' => '配置汽车报告项目字段',
                ),
                'name' => 'admin.system.car',
            ], [
                'id' => 18,
                'parent_id' => 14,
                'icon' => 'api',
                'path' => '/admin/system/charge',
                'meta' => array(
                    'title' => '充电樁報告配置',
                    'permission' => 'admin.system.charge',
                    'description' => '配置充电桩报告项目字段',
                ),
                'name' => 'admin.system.charge',
            ],
            [
                'id' => 19,
                'parent_id' => 14,
                'icon' => 'bars',
                'path' => '/admin/system/localgame',
                'meta' => array(
                    'title' => '本地服务器游戏',
                    'permission' => 'admin.system.localgame',
                    'description' => '本地服务器游戏',
                ),
                'name' => 'admin.system.localgame',
            ])
    ],
];