<?php

namespace Processton\ProcesstonDataTable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonDataTable\Skeleton\SkeletonClass
 */
class ProcesstonDataTableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-data-table';
    }
}
