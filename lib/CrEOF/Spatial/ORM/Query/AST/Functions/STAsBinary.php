<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STAsBinary
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STAsBinary extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_AsBinary';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
