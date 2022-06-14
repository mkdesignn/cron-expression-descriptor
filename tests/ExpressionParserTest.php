<?php

use Mkdesignn\CronExpressionDescriptor\Exceptions\ExpressionException;
use Mkdesignn\CronExpressionDescriptor\ExpressionParser;
use PHPUnit\Framework\TestCase;

class ExpressionParserTest extends TestCase
{
    /**
     * @throws ExpressionException
     */
    public function testParse(): void
    {
        $rows = [
            '* * * * MON#3' => ['', '*', '*', '*', '*', '1#3', ''],
            '5-10 * * * * *' => ['5-10', '*', '*', '*', '*', '*', ''],

            '* */15 3 * * *' => ['*', '*/15', '3-3', '*', '*', '*', ''],
            '* 0,15,30,45 3 * * *' => ['*', '0,15,30,45', '3-3', '*', '*', '*', ''],
        ];

        foreach ($rows as $expr => $expected) {
            $ret = (new ExpressionParser($expr))->parse();
            $this->assertEquals($expected, $ret);
        }
    }
}
