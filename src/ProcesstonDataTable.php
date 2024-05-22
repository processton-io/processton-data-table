<?php

namespace Processton\ProcesstonDataTable;
use Processton\ProcesstonInteraction\ProcesstonInteraction;

class ProcesstonDataTable
{
    
    public static function generateDataTable(
        $title,
        $columns,
        $paginatedData, 
        $enableColumnsSelection = false, 
        $enableSearch = false,
        $enableFilter = false,
        $selectedCols = [],
        $filters = [],
        $actions = [],
        $actionsLabel = '',
        $subTitle = '',
        $attachments = [],
        $width = false,
        $name = ''
    ){
        return ProcesstonInteraction::generateElement(
            'data_table',
            $title,
            self::generateDataTableData(
                $columns,
                $paginatedData, 
                $enableColumnsSelection, 
                $enableSearch,
                $enableFilter,
                $selectedCols,
                $filters,
                $actions,
                $actionsLabel
            ),
            $subTitle,
            $attachments,
            [],
            false,
            (
                $name ? $name : $title
            )
        );
    }

    public static function generateDataTableFromURL(
        $dataSrc,
        $title = '',
        $subTitle = '',
        $attachments = [],
        $width = false,
        $name = ''
    ) {
        return ProcesstonInteraction::generateElementByUrl(
            $dataSrc,
            $title,
            $subTitle,
            'data_table',
            $attachments,
            [],
            $width,
            (
                $name ? $name : $title
            )
        );
    }

    public static function generateDataTableData(
        $columns,
        $paginatedData,
        $enableColumnsSelection = false, 
        $enableSearch = false,
        $enableFilter = false,
        $selectedCols = [],
        $filters = [],
        $actions = [],
        $actionsLabel = ''
    ){
        return [
            'data' => $paginatedData,
            'config' => [
                'enableColumnsSelection' => $enableColumnsSelection,
                'enableSearch' => $enableSearch,
                'enableFilter' => $enableFilter,
            ],
            'columns' => $columns,
            'selectedCols' => $selectedCols && count($selectedCols) > 0 ? $selectedCols : $columns,
            'filters' => $filters,
            'actions' => $actions,
            'actionsLabel' => $actionsLabel,
        ];

    }

    public static function generateDataTableColumn(
        $label,
        $map,
        $type = 'text'
    ) {
        return [
            'label' => $label,
            'map' => $map,
            'type' => $type,
        ];

    }
}
