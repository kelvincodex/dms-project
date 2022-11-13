<?php

namespace App\Util\ListUtil;

trait SidebarListUtil
{
    public array $sidebarList = array(
        [
            'icon' => 'bi bi-grid',
            'heading' => 'Dashboard',
            'navItem' => 'Overviews',
            'link' => 'overview',
        ],
        //user
        [
            'icon' => 'bi bi-bag',
            'heading' => 'User Management',
            'navItem' => 'Users',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Add User(admins)',
                    'link' => 'mail'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'View User',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //user role
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'User Roles',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'User Role',
                    'link' => 'user-role'
                ],
            ],
        ],
        //office
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'Office',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Add Office',
                    'link' => 'mail'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'View Office',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //mail
        [
            'icon' => 'bi bi-bag',
            'heading' => 'Pages',
            'navItem' => 'Register New Mail',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Add New Mail',
                    'link' => 'docInfo'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Capture Document Information',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //digitize
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'Digitize Document',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Add Document',
                    'link' => 'mail'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Add Digitize Type',
                    'link' => 'mail'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Upload Scanned Document',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //view document
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'View Document Info',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Search Document',
                    'link' => 'mail'
                ],
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Trace Document',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //report
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'Report',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Document History',
                    'link' => 'docInfo'
                ],
            ],
        ],
        //print
        [
            'icon' => 'bi bi-bag',
            'heading' => '',
            'navItem' => 'Print',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'View/Print Report',
                    'link' => 'mail'
                ],
            ],
        ],
        //exit
        [
            'icon' => 'bi bi-bag',
            'heading' => 'Exit',
            'navItem' => 'logout',
            'link' => 'mail',
        ],
    );
    public array $adminSidebarList = array(
        [
            'icon' => 'bi bi-grid',
            'heading' => '',
            'navItem' => 'OverView',
            'child' =>[
                [
                    'icon' => 'bi bi-book-half',
                    'title' => 'Overview',
                    'link' => 'overview',
                ],
            ],
        ],

        [
            'icon' => 'bi bi-bag',
            'heading' => 'Register New Mail',
            'navItem' => 'Register New Mail',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Capture Document Information',
                    'link' => 'captureDocumentInformation'
                ],
            ],
        ],
    );
    public array $SuperAdminSidebarList = array(
        [
            'icon' => 'bi bi-grid',
            'heading' => '',
            'navItem' => 'OverView',
            'child' =>[
                [
                    'icon' => 'bi bi-book-half',
                    'title' => 'Overview',
                    'link' => 'overview',
                ],
            ],
        ],

        [
            'icon' => 'bi bi-bag',
            'heading' => 'Register New Mail',
            'navItem' => 'Register New Mail',
            'child' =>[
                [
                    'icon' => 'bi bi-bag',
                    'title' => 'Capture Document Information',
                    'link' => 'captureDocumentInformation'
                ],
            ],
        ],
    );

}
