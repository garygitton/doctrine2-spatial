<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STMakeBox2D
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STMakeBox2D extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_MakeBox2D';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
