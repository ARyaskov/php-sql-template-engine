<?php

/*
 * Generated from SQLMod.g4 by ANTLR 4.13.1
 */

namespace SQLMod;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see SQLModParser}.
 */
interface SQLModListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see SQLModParser::sql_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSql_statement(Context\Sql_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::sql_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSql_statement(Context\Sql_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::select_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_statement(Context\Select_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::select_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_statement(Context\Select_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::select_list()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_list(Context\Select_listContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::select_list()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_list(Context\Select_listContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::select_item()}.
	 * @param $context The parse tree.
	 */
	public function enterSelect_item(Context\Select_itemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::select_item()}.
	 * @param $context The parse tree.
	 */
	public function exitSelect_item(Context\Select_itemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::table_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_expression(Context\Table_expressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::table_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_expression(Context\Table_expressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::where_clause()}.
	 * @param $context The parse tree.
	 */
	public function enterWhere_clause(Context\Where_clauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::where_clause()}.
	 * @param $context The parse tree.
	 */
	public function exitWhere_clause(Context\Where_clauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::update_statement()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdate_statement(Context\Update_statementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::update_statement()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdate_statement(Context\Update_statementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::singleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function enterSingleUpdateStatement(Context\SingleUpdateStatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::singleUpdateStatement()}.
	 * @param $context The parse tree.
	 */
	public function exitSingleUpdateStatement(Context\SingleUpdateStatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::orderByClause()}.
	 * @param $context The parse tree.
	 */
	public function enterOrderByClause(Context\OrderByClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::orderByClause()}.
	 * @param $context The parse tree.
	 */
	public function exitOrderByClause(Context\OrderByClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::orderByExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterOrderByExpression(Context\OrderByExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::orderByExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitOrderByExpression(Context\OrderByExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::updatedElement()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdatedElement(Context\UpdatedElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::updatedElement()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdatedElement(Context\UpdatedElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::fullColumnName()}.
	 * @param $context The parse tree.
	 */
	public function enterFullColumnName(Context\FullColumnNameContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::fullColumnName()}.
	 * @param $context The parse tree.
	 */
	public function exitFullColumnName(Context\FullColumnNameContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::uid()}.
	 * @param $context The parse tree.
	 */
	public function enterUid(Context\UidContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::uid()}.
	 * @param $context The parse tree.
	 */
	public function exitUid(Context\UidContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::simpleId()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleId(Context\SimpleIdContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::simpleId()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleId(Context\SimpleIdContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::update_list()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdate_list(Context\Update_listContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::update_list()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdate_list(Context\Update_listContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::update_item()}.
	 * @param $context The parse tree.
	 */
	public function enterUpdate_item(Context\Update_itemContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::update_item()}.
	 * @param $context The parse tree.
	 */
	public function exitUpdate_item(Context\Update_itemContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function enterCondition(Context\ConditionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::condition()}.
	 * @param $context The parse tree.
	 */
	public function exitCondition(Context\ConditionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterLogical_expression(Context\Logical_expressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitLogical_expression(Context\Logical_expressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::optional_logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function enterOptional_logical_expression(Context\Optional_logical_expressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::optional_logical_expression()}.
	 * @param $context The parse tree.
	 */
	public function exitOptional_logical_expression(Context\Optional_logical_expressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function enterPredicate(Context\PredicateContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::predicate()}.
	 * @param $context The parse tree.
	 */
	public function exitPredicate(Context\PredicateContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::expressionOrDefault()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionOrDefault(Context\ExpressionOrDefaultContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::expressionOrDefault()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionOrDefault(Context\ExpressionOrDefaultContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressions(Context\ExpressionsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::expressions()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressions(Context\ExpressionsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionAtom(Context\ExpressionAtomContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::expressionAtom()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionAtom(Context\ExpressionAtomContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::nullNotnull()}.
	 * @param $context The parse tree.
	 */
	public function enterNullNotnull(Context\NullNotnullContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::nullNotnull()}.
	 * @param $context The parse tree.
	 */
	public function exitNullNotnull(Context\NullNotnullContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::unaryOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterUnaryOperator(Context\UnaryOperatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::unaryOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitUnaryOperator(Context\UnaryOperatorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonOperator(Context\ComparisonOperatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonOperator(Context\ComparisonOperatorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::logical_operator()}.
	 * @param $context The parse tree.
	 */
	public function enterLogical_operator(Context\Logical_operatorContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::logical_operator()}.
	 * @param $context The parse tree.
	 */
	public function exitLogical_operator(Context\Logical_operatorContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::value_list()}.
	 * @param $context The parse tree.
	 */
	public function enterValue_list(Context\Value_listContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::value_list()}.
	 * @param $context The parse tree.
	 */
	public function exitValue_list(Context\Value_listContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValue(Context\ValueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValue(Context\ValueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::directive()}.
	 * @param $context The parse tree.
	 */
	public function enterDirective(Context\DirectiveContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::directive()}.
	 * @param $context The parse tree.
	 */
	public function exitDirective(Context\DirectiveContext $context): void;
	/**
	 * Enter a parse tree produced by {@see SQLModParser::table_name()}.
	 * @param $context The parse tree.
	 */
	public function enterTable_name(Context\Table_nameContext $context): void;
	/**
	 * Exit a parse tree produced by {@see SQLModParser::table_name()}.
	 * @param $context The parse tree.
	 */
	public function exitTable_name(Context\Table_nameContext $context): void;
}