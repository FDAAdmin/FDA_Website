<?php

return [
    'pageText' => [
        'keyPerson' => 'KEY PERSON',
        'newNotifications' => 'New Notifications',
        'mahaState' => ' Maharashtra State',
        'photoAndVideo' => 'PHOTO AND VIDEO GALLERY',
        'videoGallery' => 'Video Gallery',
        'news' => 'News & Events',
        'tenders' => 'Tenders',
        'rules' => 'Rules & Guidelines',
        'circulars' =>'Circulars & Notices',
    ],

    'banner' => [
        'Slice19.png', 'asdfasd.png', 'Frame15.png', 'Frame 16.png'
    ],
    'keyPersons' => [
        [
            'name'=>'Shri Eknath Shinde',
            'post' => 'Hon. Chief Minister,',
            'photoName' => 'cm.png'
        ],
        [
            'name'=>'Shri Devendra Fadnavis',
            'post' => 'Hon. Deputy Chief Minister,',
            'photoName' => 'DCM.png'
        ],
        [
            'name'=>'Shri Sanjay Rathod',
            'post' => 'Hon. Minister, Food & Drug Administration',
            'photoName' => 'sanjayrathod.png'
        ],
        [
            'name'=>'Dr. Ashwini Joshi',
            'post' => 'Hon. Secretary, Ministry of Medical Education and Medicines, ',
            'photoName' => 'Ashwini_Joshi.png'
        ],
        [
            'name'=>'Shri Abhimanyu Kale',
            'post' => 'Hon. Commissioner, Food & Drug Administration,',
            'photoName' => 'abhimanyukale.png'
        ],
        
    ],
    'notifications' => [
        [
            'title' => 'Rate Contract for Printer Cartridge Refilling',
            'filename' => 'PrinterContract.pdf'
        ],
        [
            'title' => 'Provisional Additional Seniority List',
            'filename' => 'Paripatrak.pdf'
        ],
        [
            'title' => 'Interview schedule for Senior Law Officer and Law officer',
            'filename' => 'वविअ-विधी अधिकारी प्रसिध्दीपत्रक.pdf'
        ],
        /*
        [
            'title' => 'Food and Drug Administration seized the stock of B. P monitor and registered FIR against Apollo Pharmacy and Conceptreneur Ventures Govandi, Mumbai for manufacturing of B.P. monitor without license. Due to Regulatory non-compliances, FDA directed Apollo Pharmacy to immediately recall all the sold stock of “Apollo Pharmacy fully automatic upper arm style Blood Pressure Monitor” from the consumers.',
            'filename' => '#'
        ],
        */

    ],

    /*
    sample array element for news, tender, rules and circulars.
    [
        'title' => '',
        //date should be in dd/mm/yyyy
        'date' => '',
        //give only one, either link to website(for news, tenders and rules) 
        //or name of file(only for circulars)
        'link' => '',
        'filename' => '',
    ],
    */
    'news' => [
        [
            'title' => 'FDA Raid And Seized Fake Beauty Products',
            'date' => '27 May 2022',
            'link' => 'https://youtu.be/EG9wX-DMpB0',
            'filename' => '',
        ],

    ],
    'tenders' => [
        [
            'title' => 'Suggestions for extending the last date for submission of quotations',
            'date' => '27 May 2022',
            'link' => '/pdf file/Notice For Quotation.pdf',
            'filename' => 'Notice For Quotation.pdf',
        ],

    ],
    'rules' => [
        [
            'title' => 'National Food Security Act, 2019.',
            'date' => '',
            'link' => '/pdf file/Maharashtra Food Security Rules, 2019.pdf',
            'filename' => 'Maharashtra Food Security Rules, 2019.pdf',
        ],
        [
            'title' => 'Food Safety and Standards, 2011',
            'date' => '',
            'link' => '/pdf file/FSS_Gazete_Rules_2011.pdf',
            'filename' => 'FSS_Gazete_Rules_2011.pdf',
        ],
        [
            'title' => 'Food Safety and Standards (Food Business Licensing and Registration), Regulations 2011',
            'date' => '',
            'link' => '/pdf file/Licensing_Regulations.pdf',
            'filename' => 'Licensing_Regulations.pdf',
        ],

    ],
    'circulars' => [
        [
            'title' => 'Department of Medical Education and Drugs, Notification No. FDS-2022 / S.No. 38/22 / drugs-1, Dated April 29, 2022',
            'date' => '29 April 2022',
            'link' => '/pdf file/DRUG AREA NOTIFICATION (1).pdf',
            'filename' => 'DRUG AREA NOTIFICATION (1).pdf',
        ],
        [
            'title' => 'MANUFACTURING LICENSE STANDARD DOCUMENTS AND APPLICATION GUIDELINES',
            'date' => '27 May 2022',
            'link' => '/pdf file/Mfg guidelines.pdf',
            'filename' => 'Mfg guidelines.pdf',
        ],
        [
            'title' => 'STEPS FOR GRANT OF RETAIL/ WHOLESALE LICENSE BY APPLICANT',
            'date' => '27 May 2022',
            'link' => '/pdf file/FDAMFG_Sales_guidelines.pdf',
            'filename' => 'FDAMFG_Sales_guidelines.pdf',
        ],

    ],

    'gallery' => [
        'photos' => [
            //put images in img/news folder, then put filenames here
            'newimg1.jpg','newsimg.jpg'
        ],
        'videos' =>[
            [
                'link' => 'https://www.youtube.com/embed/EG9wX-DMpB0',
                'title' => 'FDA Raid And Seized Fake Beauty Products | 27 May 2022'
            ],
        ]
    ]

];
