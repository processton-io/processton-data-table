<?php

namespace Processton\ProcesstonDataTable\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Processton\ProcesstonDataTable\ProcesstonDataTable;

class DataTableTest extends TestCase
{


    public function test_datatable_column(): void
    {
        $content = ProcesstonDataTable::generateDataTableColumn(
            'label',
            'map',
            'text'
        );

        $expected = [
            'label' => 'label',
            'map' => 'map',
            'type' => 'text',
        ];

        $this->assertEquals($expected, $content);

    }
    public function test_datatable(): void
    {
        $content = ProcesstonDataTable::generateDataTable(
            'Title',
            [
                ProcesstonDataTable::generateDataTableColumn(
                    'label',
                    'map',
                    'text'
                )
            ],
            []
        );

        $expected = [
            'type' => 'data_table',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => '',
                'attachments' => [],
            ],
            'data' => [
                'data' => [],
                'config' => [
                    'enableColumnsSelection' => false,
                    'enableSearch' => false,
                    'enableFilter' => false
                ],
                'columns' => [
                    [
                        'label' => 'label',
                        'map' => 'map',
                        'type' => 'text',
                    ]
                ],
                'selectedCols' => [
                    [
                        'label' => 'label',
                        'map' => 'map',
                        'type' => 'text',
                    ]
                ],
                'filters' => [],
                'actions' => [],
                'actionsLabel' => '',
            ],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }


    public function test_datatable_from_url(): void
    {
        $content = ProcesstonDataTable::generateDataTableFromURL(
            'abc/data.json',
            'Title'
        );

        $expected = [
            'type' => 'data_table',
            'name' => 'Title',
            'title' => 'Title',
            'subtitle' => '',
            'attachments' => [],
            'srcOfData' => [
                'api_endpoint' => 'abc/data.json',
                'attachments' => [],
            ],
            'data' => [],
            'elements' => [],
            'width' => [
                'sm' => 12,
                'lg' => 12,
                'md' => 12,
                'xs' => 12,
                'xxs' => 12,
                'xxxs' => 12,
                'xl' => 12,
                'xxl' => 12,
                'xxxl' => 12
            ],
        ];

        $this->assertEquals($expected, $content);

    }

    public function test_datatable_data(): void
    {
        $content = ProcesstonDataTable::generateDataTableData(
            [
                ProcesstonDataTable::generateDataTableColumn(
                    'label',
                    'map',
                    'text'
                )
            ],
            []
        );

        $expected = [
            'data' => [],
            'config' => [
                'enableColumnsSelection' => false,
                'enableSearch' => false,
                'enableFilter' => false
            ],
            'columns' => [
                [
                    'label' => 'label',
                    'map' => 'map',
                    'type' => 'text',
                ]
            ],
            'selectedCols' => [
                [
                    'label' => 'label',
                    'map' => 'map',
                    'type' => 'text',
                ]
            ],
            'filters' => [],
            'actions' => [],
            'actionsLabel' => '',
        
        ];

        $this->assertEquals($expected, $content);

    }


}