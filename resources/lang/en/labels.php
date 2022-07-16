<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'All',
        'yes' => 'Yes',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Custom',
        'actions' => 'Actions',
        'active' => 'Active',
        'buttons' => [
            'save' => 'Save',
            'update' => 'Update',
        ],
        'hide' => 'Hide',
        'inactive' => 'Inactive',
        'none' => 'None',
        'show' => 'Show',
        'toggle_navigation' => 'Toggle Navigation',
        'create_new' => 'Create New',
        'toolbar_btn_groups' => 'Toolbar with button groups',
        'more' => 'More',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Create Role',
                'edit' => 'Edit Role',
                'management' => 'Role Management',
                'label' => 'Roles',
                'all' => 'Roles',

                'table' => [
                    'number_of_users' => 'Number of Users',
                    'permissions' => 'Permissions',
                    'role' => 'Role',
                    'sort' => 'Sort',
                    'total' => 'role total|roles total',
                ],
            ],

            'permissions' => [
                'all' => 'All Permissions',
                'active' => 'Permission List',
                'create' => 'Create Permission',
                'deactivated' => 'Deactivated Permission',
                'deleted' => 'Deleted Permission',
                'edit' => 'Edit Permission',
                'management' => 'Permission Management',
                'label' => 'Permissions',
                'list' => 'Permission List',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'permission' => 'Permission',
                    'display_name' => 'Display Name',
                    'sort' => 'Sort',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'permissions total|permissions total',
                ],
            ],

            'users' => [
                'active' => 'Active Users',
                'all_permissions' => 'All Permissions',
                'change_password' => 'Change Password',
                'change_password_for' => 'Change Password for :user',
                'create' => 'Create User',
                'deactivated' => 'Deactivated Users',
                'deleted' => 'Deleted Users',
                'edit' => 'Edit User',
                'management' => 'User Management',
                'no_permissions' => 'No Permissions',
                'no_roles' => 'No Roles to set.',
                'permissions' => 'Permissions',
                'user_actions' => 'User Actions',

                'table' => [
                    'confirmed' => 'Confirmed',
                    'created' => 'Created',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Name',
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'no_deactivated' => 'No Deactivated Users',
                    'no_deleted' => 'No Deleted Users',
                    'other_permissions' => 'Other Permissions',
                    'permissions' => 'Permissions',
                    'abilities' => 'Abilities',
                    'roles' => 'Roles',
                    'social' => 'Social',
                    'total' => 'user total|users total',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Overview',
                        'history' => 'History',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmed',
                            'created_at' => 'Created At',
                            'deleted_at' => 'Deleted At',
                            'email' => 'E-mail',
                            'last_login_at' => 'Last Login At',
                            'last_login_ip' => 'Last Login IP',
                            'last_updated' => 'Last Updated',
                            'name' => 'Name',
                            'first_name' => 'First Name',
                            'last_name' => 'Last Name',
                            'status' => 'Status',
                            'timezone' => 'Timezone',
                        ],
                    ],
                ],

                'view' => 'View User',
            ],

            'blogs' => [
                'all' => 'All Blogs',
                'active' => 'Blog List',
                'create' => 'Create Blog',
                'deactivated' => 'Deactivated Blogs',
                'deleted' => 'Deleted Blog',
                'edit' => 'Edit Blog',
                'management' => 'Blog Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'title' => 'Blog Title',
                    'category' => 'Blog Categories',
                    'published' => 'Publish Date & Time',
                    'featured_image' => 'Featured Image',
                    'content' => 'Content',
                    'tags' => 'Tags',
                    'meta_title' => 'Meta Title',
                    'slug' => 'Slug',
                    'cannonical_link' => 'Cannonical Link',
                    'meta_keywords' => 'Meta Keywords',
                    'meta_description' => 'Meta Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog total|blogs total',
                ],
            ],

            'blog-category' => [
                'all' => 'All Blog Categories',
                'active' => 'Blog Category List',
                'create' => 'Create Blog Category',
                'deactivated' => 'Deactivated Blog Category',
                'deleted' => 'Deleted Blog Category',
                'edit' => 'Edit Blog Category',
                'management' => 'Blog Categories',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Category Name',
                    'category' => 'Blog Categories',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog cateories total|blog categories total',
                ],
            ],

            'blog-tag' => [
                'all' => 'All Blog Tags',
                'active' => 'Blog Tag List',
                'create' => 'Create Blog Tag',
                'deactivated' => 'Deactivated Blog Tag',
                'deleted' => 'Deleted Blog Tag',
                'edit' => 'Edit Blog Tag',
                'management' => 'Blog Tags',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'name' => 'Tag Name',
                    'tag' => 'Blog Tag',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'blog tags total|blog tags total',
                ],
            ],

            'pages' => [
                'all' => 'All Pages',
                'active' => 'Page List',
                'create' => 'Create Page',
                'deactivated' => 'Deactivated Page',
                'deleted' => 'Deleted Page',
                'edit' => 'Edit Page',
                'management' => 'Pages Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'page_slug' => 'Page Slug',
                    'name' => 'Page Name',
                    'description' => 'Description',
                    'cannonical_link' => 'Cannonical Link',
                    'seo_title' => 'SEO Title',
                    'seo_keyword' => 'SEO Keyword',
                    'seo_description' => 'SEO Description',
                    'status' => 'Status',
                    'createdby' => 'Created By',
                    'createdat' => 'Created At',
                    'total' => 'pages total|pages total',
                ],
            ],

            'faqs' => [
                'all' => 'All Faqs',
                'active' => 'Faq List',
                'create' => 'Create Faq',
                'deactivated' => 'Deactivated Faq',
                'deleted' => 'Deleted Faq',
                'edit' => 'Edit Faq',
                'management' => 'Faq Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'question' => 'Question',
                    'answer' => 'Answer',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'total' => 'faqs total|faqs total',
                ],
            ],

            'email-templates' => [
                'all' => 'All Email Templates',
                'active' => 'Email Templates List',
                'create' => 'Create Email Template',
                'deactivated' => 'Deactivated Email Template',
                'deleted' => 'Deleted Email Template',
                'edit' => 'Edit Email Template',
                'management' => 'Email Template Management',

                'table' => [
                    'created' => 'Created',
                    'id' => 'ID',
                    'last_updated' => 'Last Updated',
                    'slug' => 'Slug',
                    'title' => 'Email Template Title',
                    'content' => 'Content',
                    'status' => 'Status',
                    'createdat' => 'Created At',
                    'createdby' => 'Created By',
                    'total' => 'email templates total|email templates total',
                ],
            ],
            'Home'=>[
                'Home'=>'Home',

                'Main Section' =>'Main Section',
                'About Us Company' =>'About us',
                'Servicess' =>'Servicess',
                'Projects' =>'Projects',
                'Project_Name'=>'Project Name',
                'Project_desc'=>'Project description',
                'Project_loc'=>'Project detailed',
                'Project_img'=>'Project Image',
                'P_descOne'=>'Paragraph One',
                'P_descTwo'=>'Paragraph Two',
                'WorkMainB'=>'brief about Work',
                'workStage'=>'Stage',
'workStagedes'=>'brief about Stage',
                'testimonials' =>'testimonials',
                'Section1'=>'First Section',
                'Section2'=>'Second Section',
                'Section2-Main'=>'Main',
                'Section2-Lists'=>'Lists',
                'Section3'=>'Third Section',
                'Servicedep'=>'Servicess department',
                'ServiceT'=>'Servicess brief',

                'website details'=>'Website details',
                'Social Media'=>'Social Media Links',
                'Our Projects'=>'Our Projects',
                'ServicessPage3'=>'Exterior Servicess',
                'servicessOne'=>'Section One',
                'servicessTwo'=>'Servicess details',
                'servicessThree'=>'Section Three',
                'servdep1'=>'General Contracting',
                'servdep2'=>'Real estate management business',
                'servdep2-Main'=>'Main section',
                'servdep2-cat'=>'Category section',
                'slider'=>'Slider',
                'components'=>'Components',
                'vision_2030'=>'Vision department', 
                'about-us'=>'About-us department',
                'aboutusM'=>'About-us Main',
                'AboutUsCat'=>'About-us Category',

                'Projects'=>'Projects',
                'HowWeWork'=>'How We Work',
                'WorkM'=>'Main Section',
                'workStage'=>'Work Stages',


                'servdep3'=>'Engineering consultancy',
                'servdep4'=>'Real estate development',
                'servdep4-Main'=>'Main section',
                'servdep4-cat'=>'Circle section',

'contactus'=>'Contact Form',
                'MainTittle'=>'Main tittle',
                'Stage tittle'=>'Stage tittle',
                'Stage details'=>'Stage details',
                'stage'=>'stage',
                'breif'=>'Breif',
                'Image'=>'Image',
                'Paragraph1'=>'Paragraph one',
                'Paragraph2'=>'Paragraph two',
                'Icon'=>'Icon',
                'Paragraph'=>'brief about vision',

                'description'=>'Description',
                'Conact'=>'Customer inquiries',
                'id'=>'id',
                'list'=>'List',

                
                'AboutusPage'=>'About-us Page',
                'AboutusSecOne'=>'Section One',
                'AboutusSecTwo'=>'Section Two',
                'AboutusTeamwork'=>'Team Work',

                
                'section brief'=>'Section brief',
                'vedio'=>'Vedio',
                'Employee_Name'=>'Employee Name',
                'Employee_img'=>'Employee Image',
                'Employee_job'=>'Job Tittle',

                
                'Mainsectionf'=>[
                    'all Record' => 'All Record',
                    'active' => 'active',
                    'deactivated' => 'deactivated',
                    'deleted' => 'deleted',
                    'edit' => 'edit ',



                    'table'=>[
                        'img' =>'Images',
                        'P1'=>'Tittle',
                        'p2'=>'Description',
                        'Service name'=>'Service name',
                        'created_at'=>'created_at',
                        'updated_at'=>'updated_at',
                        'images before'=>'Before',
                        'images aftar'=>'Aftar',
                    ],
                ],
                'Mainsection'=>[
                    'img'=>'Images',
                    'Main header'=>'Main header',
                    'Component'=>'Component',
                    'Paragraph'=>'Paragraph',

                    'Component Image'=>'Component Image',
                    'Component Tittle'=>'Component Tittle',
                ],
                
                'aboutsec1'=>[
                    'img'=>'Images',
                    'Paragraph1'=>'About Paragraph1',
                    'Paragraph'=>'Paragraph',
                    'Paragraph2'=>'About Paragraph2',
                    'P1'=>'Service Name',
                    'TestCareer'=>'Job Tittle',
                    'Test opinion'=>'Customer´s opinion',
                    'name'=>'Name',
                    'logo'=>'Logo',
                    'facebook'=>'Facebook url',
                    'whatsapp'=>'Whatsapp Number',
                    'instgram'=>'Instgram url',
                    'tiwtter'=>'Twitter url',
                    'Tittle'=>'Tittle',

                ],

                'button'=>[
                    'About Us'=>'About Us',
                    'Our Services'=>'Our Services',
                    'Have A Project!'=>'Have A Project!',

                ],
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Login',
            'login_button' => 'Login',
            'login_with' => 'Login with :social_media',
            'register_box_title' => 'Register',
            'register_button' => 'Register',
            'remember_me' => 'Remember Me',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Your password has expired.',
            'forgot_password' => 'Forgot Your Password?',
            'reset_password_box_title' => 'Reset Password',
            'reset_password_button' => 'Reset Password',
            'update_password_button' => 'Update Password',
            'send_password_reset_link_button' => 'Send Password Reset Link',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Change Password',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Created At',
                'edit_information' => 'Edit Information',
                'email' => 'E-mail',
                'last_updated' => 'Last Updated',
                'name' => 'Name',
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'update_information' => 'Update Information',
            ],
        ],
    ],
];
