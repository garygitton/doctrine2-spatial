<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STAsText
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STAsText extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_AsText';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
