<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * ST_Distance_Sphere DQL function
 */
class STDistanceSphere extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Distance_Sphere';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
