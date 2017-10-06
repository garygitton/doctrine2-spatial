<?php
namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * ST_Y DQL function
 * Return Y coordinate of Point
 *
 * @author  Gary Gitton <gary.gitton@gmail.com>
 */
class STY extends AbstractSpatialDQLFunction
{
    protected $platforms = [
        'mysql'
    ];

    protected $functionName = 'ST_Y';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
