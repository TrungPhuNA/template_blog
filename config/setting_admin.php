<?php
return [
    'sidebar' => [
        [
            'name'       => 'Tổng quan',
            'route'      => 'get_admin.dashboard',
            'class-icon' => 'la la-tachometer-alt'
        ],
        [
            'name'       => 'Tin tức && Sự kiện',
            'class-icon' => 'la la-edit',
            'sub'        => [
//                [
//                    'name'  => 'Từ khoá',
//                    'route' => 'get_admin.keyword.index'
//                ],
                [
                    'name'  => 'Menu',
                    'route' => 'get_admin.menu.index'
                ],
                [
                    'name'  => 'Bài viết',
                    'route' => 'get_admin.article.index'
                ],
            ]
        ],
        [
            'name'       => 'Sản phẩm',
            'class-icon' => 'la la-database',
            'sub'        => [
                [
                    'name'  => 'Từ khoá',
                    'route' => 'get_admin.keyword.index'
                ],
                [
                    'name'  => 'Danh mục',
                    'route' => 'get_admin.category.index'
                ],
                [
                    'name'  => 'Sản phẩm',
                    'route' => 'get_admin.product.index'
                ],
            ]
        ],
        [
            'name'       => 'Người dùng',
            'class-icon' => 'la la-user',
            'sub'        => [
                [
                    'name'  => 'Thành viên',
                    'route' => 'get_admin.user.index'
                ]
            ]
        ],
        [
            'name'       => 'Đơn hàng',
            'route'      => 'get_admin.transaction.index',
            'class-icon' => 'la la-shopping-bag'
        ],
        [
            'name'       => 'Dữ liệu nền',
            'class-icon' => 'la la-database',
            'sub'        => [
                [
                    'name'  => 'Slide',
                    'route' => 'get_admin.slide.index'
                ],
                [
                    'name'  => 'Config Data',
                    'route' => 'get_admin.configuration.index'
                ],
                [
                    'name'  => 'Phone Support',
                    'route' => 'get_admin.phone_support.index'
                ],
                [
                    'name'  => 'Config Link',
                    'route' => 'get_admin.config_link.index'
                ],
            ]
        ],
        [
            'name'       => 'Page',
            'route'      => 'get_admin.page.index',
            'class-icon' => 'la la-file-alt'
        ],
        [
            'name'       => 'Branch',
            'route'      => 'get_admin.branch.index',
            'class-icon' => 'la la-map-o'
        ],
        [
            'name'       => 'Config Email',
            'route'      => 'get_admin.email.index',
            'class-icon' => 'la la-envelope'
        ],
        [
            'name'       => 'Command',
            'route'      => 'get_admin.cmd.index',
            'class-icon' => 'la la-terminal'
        ],
        [
            'name'       => 'Menu Navbar',
            'route'      => 'get_admin.navbar.index',
            'class-icon' => 'la la-bars'
        ],
        [
            'name'       => 'Url Seo',
            'route'      => 'get_admin.seo_product.index',
            'class-icon' => 'la la-unlink'
        ],
        [
            'name'       => 'Admin',
            'class-icon' => 'la la-cogs',
            'sub'        => [
                [
                    'name'  => 'Permission',
                    'route' => 'get_admin.permission.index'
                ],
                [
                    'name'  => 'Role',
                    'route' => 'get_admin.role.index'
                ],
                [
                    'name'  => 'Quản trị viên',
                    'route' => 'get_admin.account.index'
                ],
            ]
        ],
    ]
];
