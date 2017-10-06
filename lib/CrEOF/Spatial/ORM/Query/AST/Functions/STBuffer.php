<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STBuffer
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STBuffer extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Buffer';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 3;
}
