<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions;

/**
 * Class STMakeEnvelope
 * @package CrEOF\Spatial\ORM\Query\AST\Functions
 */
class STMakeEnvelope extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql',
        'postgresql'
    ];

    protected $functionName = 'ST_MakeEnvelope';

    /**
     * From Postgis 2.0, the 5th parameter (SRID) is not required.
     *
     * @var integer
     */
    protected $minGeomExpr = 4;

    protected $maxGeomExpr = 5;
}
