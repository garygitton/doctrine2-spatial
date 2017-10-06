<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STScale
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STScale extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Scale';

    protected $minGeomExpr = 3;

    protected $maxGeomExpr = 3;
}
