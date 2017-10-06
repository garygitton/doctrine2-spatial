<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STTransform
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STTransform extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Transform';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
