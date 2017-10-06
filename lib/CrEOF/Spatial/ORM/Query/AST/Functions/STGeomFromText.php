<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STGeomFromText
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STGeomFromText extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_GeomFromText';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 2;
}
