<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STLineSubstring
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STLineSubstring extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Line_Substring';

    protected $minGeomExpr = 3;

    protected $maxGeomExpr = 3;
}
