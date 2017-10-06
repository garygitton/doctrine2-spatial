<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STAzimuth
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STAzimuth extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_Azimuth';

    protected $minGeomExpr = 2;

    protected $maxGeomExpr = 2;
}
