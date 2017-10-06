<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STLength
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STLength extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Length';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
