<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STEquals
 * @package CrEOF\Spatial\ORM\Query\AST\Functions\MySql
 */
class STEquals extends AbstractSpatialDQLFunction {

    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Equals';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
