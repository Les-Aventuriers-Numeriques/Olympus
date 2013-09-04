<?php

namespace Gdf\IntranetBundle\Extension;

use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\QueryException;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;

/**
 * "DATE_PART" "(" StringPrimary "," ArithmeticPrimary ")"
 * 
 * @author IRCF
 */
class DatePartFunction extends FunctionNode
{
    public $dateExpression = null;
    public $unit = null;
		static $supported_date_parts = array('DAY','WEEK','MONTH','YEAR');

    public function parse(Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->unit = $parser->StringPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->dateExpression = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(SqlWalker $sqlWalker)
    {
			if (in_array(strtoupper($this->unit->value),self::$supported_date_parts)){
				return $this->unit->value.'('.$this->dateExpression->dispatch($sqlWalker).')';
			}else{
				throw new Exception('DATE_PART function only support '.implode(',',self::$supported_date_parts));
			}
    }
}
