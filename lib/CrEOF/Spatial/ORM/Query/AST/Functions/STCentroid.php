<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STCentroid
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STCentroid extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Centroid';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
