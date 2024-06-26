<?php

namespace PhpClickHouseLaravel\Events;

use Illuminate\Database\Events\QueryExecuted as BaseQueryExecuted;

class QueryExecuted extends BaseQueryExecuted
{
    public function __construct(
        $sql,
        $bindings,
        public $elapsed,
        public $rowsRead,
        public $bytesRead,
        $connection,
    ) {
        parent::__construct($sql, $bindings, $elapsed * 1000, $connection);
    }
}
