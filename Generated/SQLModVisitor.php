<?php

/*
 * Generated from SQLMod.g4 by ANTLR 4.13.1
 */

namespace SQLMod;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see SQLModParser}.
 */
interface SQLModVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see SQLModParser::sql_statement()}.
	 *
	 * @param Context\Sql_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSql_statement(Context\Sql_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::select_statement()}.
	 *
	 * @param Context\Select_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_statement(Context\Select_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::update_statement()}.
	 *
	 * @param Context\Update_statementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpdate_statement(Context\Update_statementContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::select_list()}.
	 *
	 * @param Context\Select_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_list(Context\Select_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::select_item()}.
	 *
	 * @param Context\Select_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSelect_item(Context\Select_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::table_expression()}.
	 *
	 * @param Context\Table_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_expression(Context\Table_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::where_clause()}.
	 *
	 * @param Context\Where_clauseContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhere_clause(Context\Where_clauseContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::update_list()}.
	 *
	 * @param Context\Update_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpdate_list(Context\Update_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::update_item()}.
	 *
	 * @param Context\Update_itemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUpdate_item(Context\Update_itemContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::condition()}.
	 *
	 * @param Context\ConditionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondition(Context\ConditionContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::logical_expression()}.
	 *
	 * @param Context\Logical_expressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogical_expression(Context\Logical_expressionContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::logical_operator()}.
	 *
	 * @param Context\Logical_operatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogical_operator(Context\Logical_operatorContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::value_list()}.
	 *
	 * @param Context\Value_listContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValue_list(Context\Value_listContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::value()}.
	 *
	 * @param Context\ValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValue(Context\ValueContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see SQLModParser::table_name()}.
	 *
	 * @param Context\Table_nameContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTable_name(Context\Table_nameContext $context);
}