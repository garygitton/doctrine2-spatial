<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STTranslate
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STTranslate extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Translate';

    protected $minGeomExpr = 3;

    protected $maxGeomExpr = 4;
}
