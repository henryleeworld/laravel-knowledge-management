<?php

return [
    'userManagement' => [
        'title'          => '使用者管理',
        'title_singular' => '使用者管理',
    ],
    'permission'     => [
        'title'          => '權限',
        'title_singular' => '權限',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => '角色',
        'title_singular' => '角色',
        'fields'         => [
            'id'                 => '編號',
            'id_helper'          => '',
            'title'              => '標題',
            'title_helper'       => '',
            'permissions'        => '權限',
            'permissions_helper' => '',
            'created_at'         => '建立時間',
            'created_at_helper'  => '',
            'updated_at'         => '更新時間',
            'updated_at_helper'  => '',
            'deleted_at'         => '刪除時間',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => '使用者',
        'title_singular' => '使用者',
        'fields'         => [
            'id'                       => '編號',
            'id_helper'                => '',
            'name'                     => '名稱',
            'name_helper'              => '',
            'email'                    => '電子郵件',
            'email_helper'             => '',
            'email_verified_at'        => '電子郵件驗證時間',
            'email_verified_at_helper' => '',
            'password'                 => '密碼',
            'password_helper'          => '',
            'roles'                    => '角色',
            'roles_helper'             => '',
            'remember_token'           => '記住令牌',
            'remember_token_helper'    => '',
            'created_at'               => '建立時間',
            'created_at_helper'        => '',
            'updated_at'               => '更新時間',
            'updated_at_helper'        => '',
            'deleted_at'               => '刪除時間',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => '分類',
        'title_singular' => '分類',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'slug'              => '代稱',
            'slug_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'tag'            => [
        'title'          => '標籤',
        'title_singular' => '標籤',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'name'              => '名稱',
            'name_helper'       => '',
            'slug'              => '代稱',
            'slug_helper'       => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'article'        => [
        'title'          => '文章',
        'title_singular' => '文章',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'title'             => '標題',
            'title_helper'      => '',
            'slug'              => '代稱',
            'slug_helper'       => '',
            'short_text'        => '短文',
            'short_text_helper' => '',
            'full_text'         => '全文',
            'full_text_helper'  => '',
            'category'          => '分類',
            'category_helper'   => '',
            'tags'              => '標籤',
            'tags_helper'       => '',
            'views_count'       => '瀏覽次數',
            'views_count_helper'=> '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'faqManagement'  => [
        'title'          => '常見問題管理',
        'title_singular' => '常見問題管理',
    ],
    'faqCategory'    => [
        'title'          => '分類',
        'title_singular' => '分類',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'category'          => '分類',
            'category_helper'   => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
    'faqQuestion'    => [
        'title'          => '問題',
        'title_singular' => '問題',
        'fields'         => [
            'id'                => '編號',
            'id_helper'         => '',
            'category'          => '分類',
            'category_helper'   => '',
            'question'          => '問題',
            'question_helper'   => '',
            'answer'            => '解答',
            'answer_helper'     => '',
            'created_at'        => '建立時間',
            'created_at_helper' => '',
            'updated_at'        => '更新時間',
            'updated_at_helper' => '',
            'deleted_at'        => '刪除時間',
            'deleted_at_helper' => '',
        ],
    ],
];
