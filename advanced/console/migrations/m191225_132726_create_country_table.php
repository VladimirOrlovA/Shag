<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m191225_132726_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'code' => $this->char(2),
            'name' => $this->char(52)->notNull(),
            'population' => $this->integer(11)->notNull()->defaultValue(0),
            'primary key (code)',
        ]);
        
        $this->batchInsert('country', ['code', 'name', 'population'], [
        
            ['code'=>'AU', 'name'=>'Australia',         'population'=>24016400     ],  
            ['code'=>'BR', 'name'=>'Brazil',            'population'=>205722000    ],  
            ['code'=>'CA', 'name'=>'Canada',            'population'=>35985751     ],
            ['code'=>'CN', 'name'=>'China',             'population'=>1375210000   ],  
            ['code'=>'DE', 'name'=>'Germany',           'population'=>81459000     ],  
            ['code'=>'FR', 'name'=>'France',            'population'=>64513242     ],
            ['code'=>'GB', 'name'=>'United Kingdom',    'population'=>65097000     ],
            ['code'=>'IN', 'name'=>'India',             'population'=>1285400000   ],
            ['code'=>'RU', 'name'=>'Russia',            'population'=>146519759    ],
            ['code'=>'US', 'name'=>'United States',     'population'=>322976000    ],
        ]);
        
        
//        $this->insert('country' ['code'=>'AU', 'name'=>'Australia',         'population'=>24016400     ];  
//        $this->insert('country' ['code'=>'BR', 'name'=>'Brazil',            'population'=>205722000    ];  
//        $this->insert('country' ['code'=>'CA', 'name'=>'Canada',            'population'=>35985751     ];
//        $this->insert('country' ['code'=>'CN', 'name'=>'China',             'population'=>1375210000   ];  
//        $this->insert('country' ['code'=>'DE', 'name'=>'Germany',           'population'=>81459000     ];  
//        $this->insert('country' ['code'=>'FR', 'name'=>'France',            'population'=>64513242     ];
//        $this->insert('country' ['code'=>'GB', 'name'=>'United Kingdom',    'population'=>65097000     ];
//        $this->insert('country' ['code'=>'IN', 'name'=>'India',             'population'=>1285400000   ];
//        $this->insert('country' ['code'=>'RU', 'name'=>'Russia',            'population'=>146519759    ];
//        $this->insert('country' ['code'=>'US', 'name'=>'United States',     'population'=>322976000    ];
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
