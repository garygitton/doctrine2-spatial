<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STAsGeoJson
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STAsGeoJson extends AbstractSpatialDQLFunction implements ReturnsGeometryInterface
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_AsGeoJson';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
