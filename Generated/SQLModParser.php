<?php

/*
 * Generated from SQLMod.g4 by ANTLR 4.13.1
 */

namespace SQLMod {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class SQLModParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, SELECT = 21, UPDATE = 22, 
               FROM = 23, WHERE = 24, IN = 25, AND = 26, SET = 27, QUESTIONMARK = 28, 
               SHARP = 29, ASmall = 30, COMMA = 31, ASTERISK = 32, OPEN_PAR = 33, 
               CLOSE_PAR = 34, OPEN_CURLY_PAR = 35, CLOSE_CURLY_PAR = 36, 
               EQ = 37, NUMBER = 38, STRING = 39, FLOAT = 40, IDENTIFIER = 41, 
               LINE_COMMENT = 42, BLOCK_COMMENT = 43, WS = 44;

		public const RULE_sql_statement = 0, RULE_select_statement = 1, RULE_select_list = 2, 
               RULE_select_item = 3, RULE_table_expression = 4, RULE_where_clause = 5, 
               RULE_update_statement = 6, RULE_singleUpdateStatement = 7, 
               RULE_orderByClause = 8, RULE_orderByExpression = 9, RULE_updatedElement = 10, 
               RULE_fullColumnName = 11, RULE_uid = 12, RULE_simpleId = 13, 
               RULE_update_list = 14, RULE_update_item = 15, RULE_condition = 16, 
               RULE_logical_expression = 17, RULE_optional_logical_expression = 18, 
               RULE_expression = 19, RULE_predicate = 20, RULE_expressionOrDefault = 21, 
               RULE_expressions = 22, RULE_expressionAtom = 23, RULE_nullNotnull = 24, 
               RULE_unaryOperator = 25, RULE_comparisonOperator = 26, RULE_logical_operator = 27, 
               RULE_value_list = 28, RULE_value = 29, RULE_literal = 30, 
               RULE_directive = 31, RULE_table_name = 32;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'sql_statement', 'select_statement', 'select_list', 'select_item', 'table_expression', 
			'where_clause', 'update_statement', 'singleUpdateStatement', 'orderByClause', 
			'orderByExpression', 'updatedElement', 'fullColumnName', 'uid', 'simpleId', 
			'update_list', 'update_item', 'condition', 'logical_expression', 'optional_logical_expression', 
			'expression', 'predicate', 'expressionOrDefault', 'expressions', 'expressionAtom', 
			'nullNotnull', 'unaryOperator', 'comparisonOperator', 'logical_operator', 
			'value_list', 'value', 'literal', 'directive', 'table_name'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'ORDER BY'", "'ASC'", "'DESC'", "'DEFAULT'", "'NOT'", "'!'", 
		    "'IS NOT'", "'TRUE'", "'FALSE'", "'UNKNOWN'", "'NULL'", "'~'", "'+'", 
		    "'-'", "'>'", "'<'", "'&'", "'XOR'", "'OR'", "'|'", "'SELECT'", "'UPDATE'", 
		    "'FROM'", "'WHERE'", "'IN'", "'AND'", "'SET'", "'?'", "'#'", "'a'", 
		    "','", "'*'", "'('", "')'", "'{'", "'}'", "'='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, "SELECT", 
		    "UPDATE", "FROM", "WHERE", "IN", "AND", "SET", "QUESTIONMARK", "SHARP", 
		    "ASmall", "COMMA", "ASTERISK", "OPEN_PAR", "CLOSE_PAR", "OPEN_CURLY_PAR", 
		    "CLOSE_CURLY_PAR", "EQ", "NUMBER", "STRING", "FLOAT", "IDENTIFIER", 
		    "LINE_COMMENT", "BLOCK_COMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 44, 334, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 1, 0, 1, 0, 
		    3, 0, 69, 8, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 76, 8, 1, 10, 
		    1, 12, 1, 79, 9, 1, 1, 2, 1, 2, 1, 2, 5, 2, 84, 8, 2, 10, 2, 12, 2, 
		    87, 9, 2, 1, 3, 1, 3, 1, 3, 3, 3, 92, 8, 3, 1, 4, 1, 4, 1, 5, 1, 5, 
		    1, 5, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 1, 7, 5, 7, 107, 8, 
		    7, 10, 7, 12, 7, 110, 9, 7, 1, 7, 1, 7, 3, 7, 114, 8, 7, 1, 8, 1, 
		    8, 1, 8, 1, 8, 5, 8, 120, 8, 8, 10, 8, 12, 8, 123, 9, 8, 1, 9, 1, 
		    9, 3, 9, 127, 8, 9, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 133, 8, 10, 
		    1, 10, 3, 10, 136, 8, 10, 1, 11, 1, 11, 1, 12, 1, 12, 3, 12, 142, 
		    8, 12, 1, 13, 1, 13, 1, 14, 1, 14, 1, 14, 5, 14, 149, 8, 14, 10, 14, 
		    12, 14, 152, 9, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 
		    160, 8, 15, 1, 16, 1, 16, 1, 17, 1, 17, 3, 17, 166, 8, 17, 1, 17, 
		    1, 17, 1, 17, 1, 17, 5, 17, 172, 8, 17, 10, 17, 12, 17, 175, 9, 17, 
		    1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 5, 17, 183, 8, 17, 10, 17, 
		    12, 17, 186, 9, 17, 3, 17, 188, 8, 17, 1, 18, 3, 18, 191, 8, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 
		    1, 19, 1, 19, 3, 19, 205, 8, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 219, 8, 19, 
		    1, 19, 1, 19, 1, 19, 1, 19, 5, 19, 225, 8, 19, 10, 19, 12, 19, 228, 
		    9, 19, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 234, 8, 20, 1, 20, 1, 20, 
		    1, 20, 1, 20, 5, 20, 240, 8, 20, 10, 20, 12, 20, 243, 9, 20, 1, 21, 
		    1, 21, 3, 21, 247, 8, 21, 1, 22, 1, 22, 1, 22, 5, 22, 252, 8, 22, 
		    10, 22, 12, 22, 255, 9, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 
		    23, 1, 23, 1, 23, 1, 23, 5, 23, 266, 8, 23, 10, 23, 12, 23, 269, 9, 
		    23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 277, 8, 23, 1, 
		    24, 3, 24, 280, 8, 24, 1, 24, 1, 24, 1, 25, 1, 25, 1, 26, 1, 26, 1, 
		    26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 1, 26, 
		    1, 26, 1, 26, 3, 26, 300, 8, 26, 1, 27, 1, 27, 1, 27, 1, 27, 1, 27, 
		    1, 27, 1, 27, 3, 27, 309, 8, 27, 1, 28, 1, 28, 1, 28, 5, 28, 314, 
		    8, 28, 10, 28, 12, 28, 317, 9, 28, 1, 29, 1, 29, 3, 29, 321, 8, 29, 
		    1, 30, 1, 30, 1, 31, 1, 31, 5, 31, 327, 8, 31, 10, 31, 12, 31, 330, 
		    9, 31, 1, 32, 1, 32, 1, 32, 0, 2, 38, 40, 33, 0, 2, 4, 6, 8, 10, 12, 
		    14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 
		    48, 50, 52, 54, 56, 58, 60, 62, 64, 0, 6, 1, 0, 2, 3, 1, 0, 5, 6, 
		    1, 0, 8, 10, 2, 0, 5, 6, 12, 14, 1, 0, 38, 40, 3, 0, 29, 30, 38, 38, 
		    40, 41, 352, 0, 68, 1, 0, 0, 0, 2, 70, 1, 0, 0, 0, 4, 80, 1, 0, 0, 
		    0, 6, 91, 1, 0, 0, 0, 8, 93, 1, 0, 0, 0, 10, 95, 1, 0, 0, 0, 12, 98, 
		    1, 0, 0, 0, 14, 100, 1, 0, 0, 0, 16, 115, 1, 0, 0, 0, 18, 124, 1, 
		    0, 0, 0, 20, 135, 1, 0, 0, 0, 22, 137, 1, 0, 0, 0, 24, 141, 1, 0, 
		    0, 0, 26, 143, 1, 0, 0, 0, 28, 145, 1, 0, 0, 0, 30, 159, 1, 0, 0, 
		    0, 32, 161, 1, 0, 0, 0, 34, 187, 1, 0, 0, 0, 36, 190, 1, 0, 0, 0, 
		    38, 218, 1, 0, 0, 0, 40, 233, 1, 0, 0, 0, 42, 246, 1, 0, 0, 0, 44, 
		    248, 1, 0, 0, 0, 46, 276, 1, 0, 0, 0, 48, 279, 1, 0, 0, 0, 50, 283, 
		    1, 0, 0, 0, 52, 299, 1, 0, 0, 0, 54, 308, 1, 0, 0, 0, 56, 310, 1, 
		    0, 0, 0, 58, 320, 1, 0, 0, 0, 60, 322, 1, 0, 0, 0, 62, 324, 1, 0, 
		    0, 0, 64, 331, 1, 0, 0, 0, 66, 69, 3, 2, 1, 0, 67, 69, 3, 12, 6, 0, 
		    68, 66, 1, 0, 0, 0, 68, 67, 1, 0, 0, 0, 69, 1, 1, 0, 0, 0, 70, 71, 
		    5, 21, 0, 0, 71, 72, 3, 4, 2, 0, 72, 73, 5, 23, 0, 0, 73, 77, 3, 8, 
		    4, 0, 74, 76, 3, 10, 5, 0, 75, 74, 1, 0, 0, 0, 76, 79, 1, 0, 0, 0, 
		    77, 75, 1, 0, 0, 0, 77, 78, 1, 0, 0, 0, 78, 3, 1, 0, 0, 0, 79, 77, 
		    1, 0, 0, 0, 80, 85, 3, 6, 3, 0, 81, 82, 5, 31, 0, 0, 82, 84, 3, 6, 
		    3, 0, 83, 81, 1, 0, 0, 0, 84, 87, 1, 0, 0, 0, 85, 83, 1, 0, 0, 0, 
		    85, 86, 1, 0, 0, 0, 86, 5, 1, 0, 0, 0, 87, 85, 1, 0, 0, 0, 88, 92, 
		    5, 32, 0, 0, 89, 92, 5, 41, 0, 0, 90, 92, 3, 62, 31, 0, 91, 88, 1, 
		    0, 0, 0, 91, 89, 1, 0, 0, 0, 91, 90, 1, 0, 0, 0, 92, 7, 1, 0, 0, 0, 
		    93, 94, 5, 41, 0, 0, 94, 9, 1, 0, 0, 0, 95, 96, 5, 24, 0, 0, 96, 97, 
		    3, 32, 16, 0, 97, 11, 1, 0, 0, 0, 98, 99, 3, 14, 7, 0, 99, 13, 1, 
		    0, 0, 0, 100, 101, 5, 22, 0, 0, 101, 102, 3, 64, 32, 0, 102, 103, 
		    5, 27, 0, 0, 103, 108, 3, 20, 10, 0, 104, 105, 5, 31, 0, 0, 105, 107, 
		    3, 20, 10, 0, 106, 104, 1, 0, 0, 0, 107, 110, 1, 0, 0, 0, 108, 106, 
		    1, 0, 0, 0, 108, 109, 1, 0, 0, 0, 109, 113, 1, 0, 0, 0, 110, 108, 
		    1, 0, 0, 0, 111, 112, 5, 24, 0, 0, 112, 114, 3, 38, 19, 0, 113, 111, 
		    1, 0, 0, 0, 113, 114, 1, 0, 0, 0, 114, 15, 1, 0, 0, 0, 115, 116, 5, 
		    1, 0, 0, 116, 121, 3, 18, 9, 0, 117, 118, 5, 31, 0, 0, 118, 120, 3, 
		    18, 9, 0, 119, 117, 1, 0, 0, 0, 120, 123, 1, 0, 0, 0, 121, 119, 1, 
		    0, 0, 0, 121, 122, 1, 0, 0, 0, 122, 17, 1, 0, 0, 0, 123, 121, 1, 0, 
		    0, 0, 124, 126, 3, 38, 19, 0, 125, 127, 7, 0, 0, 0, 126, 125, 1, 0, 
		    0, 0, 126, 127, 1, 0, 0, 0, 127, 19, 1, 0, 0, 0, 128, 129, 3, 22, 
		    11, 0, 129, 132, 5, 37, 0, 0, 130, 133, 3, 38, 19, 0, 131, 133, 5, 
		    4, 0, 0, 132, 130, 1, 0, 0, 0, 132, 131, 1, 0, 0, 0, 133, 136, 1, 
		    0, 0, 0, 134, 136, 3, 62, 31, 0, 135, 128, 1, 0, 0, 0, 135, 134, 1, 
		    0, 0, 0, 136, 21, 1, 0, 0, 0, 137, 138, 3, 24, 12, 0, 138, 23, 1, 
		    0, 0, 0, 139, 142, 3, 26, 13, 0, 140, 142, 5, 39, 0, 0, 141, 139, 
		    1, 0, 0, 0, 141, 140, 1, 0, 0, 0, 142, 25, 1, 0, 0, 0, 143, 144, 5, 
		    41, 0, 0, 144, 27, 1, 0, 0, 0, 145, 150, 3, 30, 15, 0, 146, 147, 5, 
		    31, 0, 0, 147, 149, 3, 30, 15, 0, 148, 146, 1, 0, 0, 0, 149, 152, 
		    1, 0, 0, 0, 150, 148, 1, 0, 0, 0, 150, 151, 1, 0, 0, 0, 151, 29, 1, 
		    0, 0, 0, 152, 150, 1, 0, 0, 0, 153, 154, 5, 41, 0, 0, 154, 155, 5, 
		    37, 0, 0, 155, 160, 3, 58, 29, 0, 156, 157, 5, 41, 0, 0, 157, 158, 
		    5, 37, 0, 0, 158, 160, 3, 62, 31, 0, 159, 153, 1, 0, 0, 0, 159, 156, 
		    1, 0, 0, 0, 160, 31, 1, 0, 0, 0, 161, 162, 3, 34, 17, 0, 162, 33, 
		    1, 0, 0, 0, 163, 173, 3, 38, 19, 0, 164, 166, 5, 35, 0, 0, 165, 164, 
		    1, 0, 0, 0, 165, 166, 1, 0, 0, 0, 166, 167, 1, 0, 0, 0, 167, 168, 
		    3, 54, 27, 0, 168, 169, 3, 38, 19, 0, 169, 170, 5, 36, 0, 0, 170, 
		    172, 1, 0, 0, 0, 171, 165, 1, 0, 0, 0, 172, 175, 1, 0, 0, 0, 173, 
		    171, 1, 0, 0, 0, 173, 174, 1, 0, 0, 0, 174, 188, 1, 0, 0, 0, 175, 
		    173, 1, 0, 0, 0, 176, 177, 3, 38, 19, 0, 177, 178, 5, 25, 0, 0, 178, 
		    179, 5, 33, 0, 0, 179, 180, 3, 38, 19, 0, 180, 184, 5, 34, 0, 0, 181, 
		    183, 3, 36, 18, 0, 182, 181, 1, 0, 0, 0, 183, 186, 1, 0, 0, 0, 184, 
		    182, 1, 0, 0, 0, 184, 185, 1, 0, 0, 0, 185, 188, 1, 0, 0, 0, 186, 
		    184, 1, 0, 0, 0, 187, 163, 1, 0, 0, 0, 187, 176, 1, 0, 0, 0, 188, 
		    35, 1, 0, 0, 0, 189, 191, 5, 35, 0, 0, 190, 189, 1, 0, 0, 0, 190, 
		    191, 1, 0, 0, 0, 191, 192, 1, 0, 0, 0, 192, 193, 3, 54, 27, 0, 193, 
		    194, 3, 38, 19, 0, 194, 195, 5, 36, 0, 0, 195, 37, 1, 0, 0, 0, 196, 
		    197, 6, 19, -1, 0, 197, 198, 7, 1, 0, 0, 198, 219, 3, 38, 19, 7, 199, 
		    200, 3, 54, 27, 0, 200, 201, 3, 38, 19, 5, 201, 219, 1, 0, 0, 0, 202, 
		    204, 3, 40, 20, 0, 203, 205, 5, 7, 0, 0, 204, 203, 1, 0, 0, 0, 204, 
		    205, 1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 207, 7, 2, 0, 0, 207, 
		    219, 1, 0, 0, 0, 208, 219, 3, 40, 20, 0, 209, 210, 5, 25, 0, 0, 210, 
		    211, 5, 33, 0, 0, 211, 212, 3, 44, 22, 0, 212, 213, 5, 34, 0, 0, 213, 
		    219, 1, 0, 0, 0, 214, 215, 5, 35, 0, 0, 215, 216, 3, 38, 19, 0, 216, 
		    217, 5, 36, 0, 0, 217, 219, 1, 0, 0, 0, 218, 196, 1, 0, 0, 0, 218, 
		    199, 1, 0, 0, 0, 218, 202, 1, 0, 0, 0, 218, 208, 1, 0, 0, 0, 218, 
		    209, 1, 0, 0, 0, 218, 214, 1, 0, 0, 0, 219, 226, 1, 0, 0, 0, 220, 
		    221, 10, 6, 0, 0, 221, 222, 3, 54, 27, 0, 222, 223, 3, 38, 19, 7, 
		    223, 225, 1, 0, 0, 0, 224, 220, 1, 0, 0, 0, 225, 228, 1, 0, 0, 0, 
		    226, 224, 1, 0, 0, 0, 226, 227, 1, 0, 0, 0, 227, 39, 1, 0, 0, 0, 228, 
		    226, 1, 0, 0, 0, 229, 234, 6, 20, -1, 0, 230, 234, 3, 58, 29, 0, 231, 
		    234, 3, 62, 31, 0, 232, 234, 3, 46, 23, 0, 233, 229, 1, 0, 0, 0, 233, 
		    230, 1, 0, 0, 0, 233, 231, 1, 0, 0, 0, 233, 232, 1, 0, 0, 0, 234, 
		    241, 1, 0, 0, 0, 235, 236, 10, 3, 0, 0, 236, 237, 3, 52, 26, 0, 237, 
		    238, 3, 40, 20, 4, 238, 240, 1, 0, 0, 0, 239, 235, 1, 0, 0, 0, 240, 
		    243, 1, 0, 0, 0, 241, 239, 1, 0, 0, 0, 241, 242, 1, 0, 0, 0, 242, 
		    41, 1, 0, 0, 0, 243, 241, 1, 0, 0, 0, 244, 247, 3, 38, 19, 0, 245, 
		    247, 5, 4, 0, 0, 246, 244, 1, 0, 0, 0, 246, 245, 1, 0, 0, 0, 247, 
		    43, 1, 0, 0, 0, 248, 253, 3, 38, 19, 0, 249, 250, 5, 31, 0, 0, 250, 
		    252, 3, 38, 19, 0, 251, 249, 1, 0, 0, 0, 252, 255, 1, 0, 0, 0, 253, 
		    251, 1, 0, 0, 0, 253, 254, 1, 0, 0, 0, 254, 45, 1, 0, 0, 0, 255, 253, 
		    1, 0, 0, 0, 256, 277, 3, 62, 31, 0, 257, 277, 3, 22, 11, 0, 258, 259, 
		    3, 50, 25, 0, 259, 260, 3, 46, 23, 0, 260, 277, 1, 0, 0, 0, 261, 262, 
		    5, 33, 0, 0, 262, 267, 3, 38, 19, 0, 263, 264, 5, 31, 0, 0, 264, 266, 
		    3, 38, 19, 0, 265, 263, 1, 0, 0, 0, 266, 269, 1, 0, 0, 0, 267, 265, 
		    1, 0, 0, 0, 267, 268, 1, 0, 0, 0, 268, 270, 1, 0, 0, 0, 269, 267, 
		    1, 0, 0, 0, 270, 271, 5, 34, 0, 0, 271, 277, 1, 0, 0, 0, 272, 273, 
		    5, 33, 0, 0, 273, 274, 3, 2, 1, 0, 274, 275, 5, 34, 0, 0, 275, 277, 
		    1, 0, 0, 0, 276, 256, 1, 0, 0, 0, 276, 257, 1, 0, 0, 0, 276, 258, 
		    1, 0, 0, 0, 276, 261, 1, 0, 0, 0, 276, 272, 1, 0, 0, 0, 277, 47, 1, 
		    0, 0, 0, 278, 280, 5, 5, 0, 0, 279, 278, 1, 0, 0, 0, 279, 280, 1, 
		    0, 0, 0, 280, 281, 1, 0, 0, 0, 281, 282, 5, 11, 0, 0, 282, 49, 1, 
		    0, 0, 0, 283, 284, 7, 3, 0, 0, 284, 51, 1, 0, 0, 0, 285, 300, 5, 37, 
		    0, 0, 286, 300, 5, 15, 0, 0, 287, 300, 5, 16, 0, 0, 288, 289, 5, 16, 
		    0, 0, 289, 300, 5, 37, 0, 0, 290, 291, 5, 15, 0, 0, 291, 300, 5, 37, 
		    0, 0, 292, 293, 5, 16, 0, 0, 293, 300, 5, 15, 0, 0, 294, 295, 5, 6, 
		    0, 0, 295, 300, 5, 37, 0, 0, 296, 297, 5, 16, 0, 0, 297, 298, 5, 37, 
		    0, 0, 298, 300, 5, 15, 0, 0, 299, 285, 1, 0, 0, 0, 299, 286, 1, 0, 
		    0, 0, 299, 287, 1, 0, 0, 0, 299, 288, 1, 0, 0, 0, 299, 290, 1, 0, 
		    0, 0, 299, 292, 1, 0, 0, 0, 299, 294, 1, 0, 0, 0, 299, 296, 1, 0, 
		    0, 0, 300, 53, 1, 0, 0, 0, 301, 309, 5, 26, 0, 0, 302, 303, 5, 17, 
		    0, 0, 303, 309, 5, 17, 0, 0, 304, 309, 5, 18, 0, 0, 305, 309, 5, 19, 
		    0, 0, 306, 307, 5, 20, 0, 0, 307, 309, 5, 20, 0, 0, 308, 301, 1, 0, 
		    0, 0, 308, 302, 1, 0, 0, 0, 308, 304, 1, 0, 0, 0, 308, 305, 1, 0, 
		    0, 0, 308, 306, 1, 0, 0, 0, 309, 55, 1, 0, 0, 0, 310, 315, 3, 58, 
		    29, 0, 311, 312, 5, 31, 0, 0, 312, 314, 3, 58, 29, 0, 313, 311, 1, 
		    0, 0, 0, 314, 317, 1, 0, 0, 0, 315, 313, 1, 0, 0, 0, 315, 316, 1, 
		    0, 0, 0, 316, 57, 1, 0, 0, 0, 317, 315, 1, 0, 0, 0, 318, 321, 3, 60, 
		    30, 0, 319, 321, 5, 41, 0, 0, 320, 318, 1, 0, 0, 0, 320, 319, 1, 0, 
		    0, 0, 321, 59, 1, 0, 0, 0, 322, 323, 7, 4, 0, 0, 323, 61, 1, 0, 0, 
		    0, 324, 328, 5, 28, 0, 0, 325, 327, 7, 5, 0, 0, 326, 325, 1, 0, 0, 
		    0, 327, 330, 1, 0, 0, 0, 328, 326, 1, 0, 0, 0, 328, 329, 1, 0, 0, 
		    0, 329, 63, 1, 0, 0, 0, 330, 328, 1, 0, 0, 0, 331, 332, 5, 41, 0, 
		    0, 332, 65, 1, 0, 0, 0, 33, 68, 77, 85, 91, 108, 113, 121, 126, 132, 
		    135, 141, 150, 159, 165, 173, 184, 187, 190, 204, 218, 226, 233, 241, 
		    246, 253, 267, 276, 279, 299, 308, 315, 320, 328];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "SQLMod.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function sql_statement(): Context\Sql_statementContext
		{
		    $localContext = new Context\Sql_statementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_sql_statement);

		    try {
		        $this->setState(68);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SELECT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(66);
		            	$this->select_statement();
		            	break;

		            case self::UPDATE:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(67);
		            	$this->update_statement();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function select_statement(): Context\Select_statementContext
		{
		    $localContext = new Context\Select_statementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_select_statement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(70);
		        $this->match(self::SELECT);
		        $this->setState(71);
		        $this->select_list();
		        $this->setState(72);
		        $this->match(self::FROM);
		        $this->setState(73);
		        $this->table_expression();
		        $this->setState(77);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::WHERE) {
		        	$this->setState(74);
		        	$this->where_clause();
		        	$this->setState(79);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function select_list(): Context\Select_listContext
		{
		    $localContext = new Context\Select_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_select_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(80);
		        $this->select_item();
		        $this->setState(85);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(81);
		        	$this->match(self::COMMA);
		        	$this->setState(82);
		        	$this->select_item();
		        	$this->setState(87);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function select_item(): Context\Select_itemContext
		{
		    $localContext = new Context\Select_itemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_select_item);

		    try {
		        $this->setState(91);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASTERISK:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(88);
		            	$this->match(self::ASTERISK);
		            	break;

		            case self::IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(89);
		            	$this->match(self::IDENTIFIER);
		            	break;

		            case self::QUESTIONMARK:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(90);
		            	$this->directive();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function table_expression(): Context\Table_expressionContext
		{
		    $localContext = new Context\Table_expressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_table_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(93);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function where_clause(): Context\Where_clauseContext
		{
		    $localContext = new Context\Where_clauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_where_clause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->match(self::WHERE);
		        $this->setState(96);
		        $this->condition();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function update_statement(): Context\Update_statementContext
		{
		    $localContext = new Context\Update_statementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_update_statement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(98);
		        $this->singleUpdateStatement();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function singleUpdateStatement(): Context\SingleUpdateStatementContext
		{
		    $localContext = new Context\SingleUpdateStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_singleUpdateStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(100);
		        $this->match(self::UPDATE);
		        $this->setState(101);
		        $this->table_name();
		        $this->setState(102);
		        $this->match(self::SET);
		        $this->setState(103);
		        $this->updatedElement();
		        $this->setState(108);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(104);
		        	$this->match(self::COMMA);
		        	$this->setState(105);
		        	$this->updatedElement();
		        	$this->setState(110);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(113);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::WHERE) {
		        	$this->setState(111);
		        	$this->match(self::WHERE);
		        	$this->setState(112);
		        	$this->recursiveExpression(0);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orderByClause(): Context\OrderByClauseContext
		{
		    $localContext = new Context\OrderByClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_orderByClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(115);
		        $this->match(self::T__0);
		        $this->setState(116);
		        $this->orderByExpression();
		        $this->setState(121);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(117);
		        	$this->match(self::COMMA);
		        	$this->setState(118);
		        	$this->orderByExpression();
		        	$this->setState(123);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orderByExpression(): Context\OrderByExpressionContext
		{
		    $localContext = new Context\OrderByExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_orderByExpression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->recursiveExpression(0);
		        $this->setState(126);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1 || $_la === self::T__2) {
		        	$this->setState(125);

		        	$localContext->order = $this->input->LT(1);
		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__1 || $_la === self::T__2)) {
		        		    $localContext->order = $this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function updatedElement(): Context\UpdatedElementContext
		{
		    $localContext = new Context\UpdatedElementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_updatedElement);

		    try {
		        $this->setState(135);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::STRING:
		            case self::IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(128);
		            	$this->fullColumnName();
		            	$this->setState(129);
		            	$this->match(self::EQ);
		            	$this->setState(132);
		            	$this->errorHandler->sync($this);

		            	switch ($this->getInterpreter()->adaptivePredict($this->input, 8, $this->ctx)) {
		            		case 1:
		            		    $this->setState(130);
		            		    $this->recursiveExpression(0);
		            		break;

		            		case 2:
		            		    $this->setState(131);
		            		    $this->match(self::T__3);
		            		break;
		            	}
		            	break;

		            case self::QUESTIONMARK:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(134);
		            	$this->directive();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fullColumnName(): Context\FullColumnNameContext
		{
		    $localContext = new Context\FullColumnNameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_fullColumnName);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(137);
		        $this->uid();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function uid(): Context\UidContext
		{
		    $localContext = new Context\UidContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_uid);

		    try {
		        $this->setState(141);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(139);
		            	$this->simpleId();
		            	break;

		            case self::STRING:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(140);
		            	$this->match(self::STRING);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleId(): Context\SimpleIdContext
		{
		    $localContext = new Context\SimpleIdContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_simpleId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(143);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function update_list(): Context\Update_listContext
		{
		    $localContext = new Context\Update_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_update_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(145);
		        $this->update_item();
		        $this->setState(150);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(146);
		        	$this->match(self::COMMA);
		        	$this->setState(147);
		        	$this->update_item();
		        	$this->setState(152);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function update_item(): Context\Update_itemContext
		{
		    $localContext = new Context\Update_itemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_update_item);

		    try {
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(153);
		        	    $this->match(self::IDENTIFIER);
		        	    $this->setState(154);
		        	    $this->match(self::EQ);
		        	    $this->setState(155);
		        	    $this->value();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(156);
		        	    $this->match(self::IDENTIFIER);
		        	    $this->setState(157);
		        	    $this->match(self::EQ);
		        	    $this->setState(158);
		        	    $this->directive();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condition(): Context\ConditionContext
		{
		    $localContext = new Context\ConditionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_condition);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(161);
		        $this->logical_expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logical_expression(): Context\Logical_expressionContext
		{
		    $localContext = new Context\Logical_expressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_logical_expression);

		    try {
		        $this->setState(187);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(163);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(173);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 34428813312) !== 0)) {
		        	    	$this->setState(165);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);

		        	    	if ($_la === self::OPEN_CURLY_PAR) {
		        	    		$this->setState(164);
		        	    		$this->match(self::OPEN_CURLY_PAR);
		        	    	}
		        	    	$this->setState(167);
		        	    	$this->logical_operator();
		        	    	$this->setState(168);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(169);
		        	    	$this->match(self::CLOSE_CURLY_PAR);
		        	    	$this->setState(175);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(176);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(177);
		        	    $this->match(self::IN);
		        	    $this->setState(178);
		        	    $this->match(self::OPEN_PAR);
		        	    $this->setState(179);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(180);
		        	    $this->match(self::CLOSE_PAR);
		        	    $this->setState(184);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 34428813312) !== 0)) {
		        	    	$this->setState(181);
		        	    	$this->optional_logical_expression();
		        	    	$this->setState(186);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function optional_logical_expression(): Context\Optional_logical_expressionContext
		{
		    $localContext = new Context\Optional_logical_expressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_optional_logical_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(190);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::OPEN_CURLY_PAR) {
		        	$this->setState(189);
		        	$this->match(self::OPEN_CURLY_PAR);
		        }
		        $this->setState(192);
		        $this->logical_operator();
		        $this->setState(193);
		        $this->recursiveExpression(0);
		        $this->setState(194);
		        $this->match(self::CLOSE_CURLY_PAR);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
			return $this->recursiveExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpression(int $precedence): Context\ExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 38;
			$this->enterRecursionRule($localContext, 38, self::RULE_expression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(218);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
					case 1:
					    $this->setState(197);

					    $localContext->notOperator = $this->input->LT(1);
					    $_la = $this->input->LA(1);

					    if (!($_la === self::T__4 || $_la === self::T__5)) {
					    	    $localContext->notOperator = $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					    $this->setState(198);
					    $this->recursiveExpression(7);
					break;

					case 2:
					    $this->setState(199);
					    $this->logical_operator();
					    $this->setState(200);
					    $this->recursiveExpression(5);
					break;

					case 3:
					    $this->setState(202);
					    $this->recursivePredicate(0);
					    $this->setState(204);
					    $this->errorHandler->sync($this);
					    $_la = $this->input->LA(1);

					    if ($_la === self::T__6) {
					    	$this->setState(203);
					    	$this->match(self::T__6);
					    }
					    $this->setState(206);

					    $localContext->testValue = $this->input->LT(1);
					    $_la = $this->input->LA(1);

					    if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1792) !== 0))) {
					    	    $localContext->testValue = $this->errorHandler->recoverInline($this);
					    } else {
					    	if ($this->input->LA(1) === Token::EOF) {
					    	    $this->matchedEOF = true;
					        }

					    	$this->errorHandler->reportMatch($this);
					    	$this->consume();
					    }
					break;

					case 4:
					    $this->setState(208);
					    $this->recursivePredicate(0);
					break;

					case 5:
					    $this->setState(209);
					    $this->match(self::IN);
					    $this->setState(210);
					    $this->match(self::OPEN_PAR);
					    $this->setState(211);
					    $this->expressions();
					    $this->setState(212);
					    $this->match(self::CLOSE_PAR);
					break;

					case 6:
					    $this->setState(214);
					    $this->match(self::OPEN_CURLY_PAR);
					    $this->setState(215);
					    $this->recursiveExpression(0);
					    $this->setState(216);
					    $this->match(self::CLOSE_CURLY_PAR);
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(226);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\ExpressionContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_expression);
						$this->setState(220);

						if (!($this->precpred($this->ctx, 6))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 6)");
						}
						$this->setState(221);
						$this->logical_operator();
						$this->setState(222);
						$this->recursiveExpression(7); 
					}

					$this->setState(228);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicate(): Context\PredicateContext
		{
			return $this->recursivePredicate(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursivePredicate(int $precedence): Context\PredicateContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\PredicateContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 40;
			$this->enterRecursionRule($localContext, 40, self::RULE_predicate, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(233);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
					case 1:
					break;

					case 2:
					    $this->setState(230);
					    $this->value();
					break;

					case 3:
					    $this->setState(231);
					    $this->directive();
					break;

					case 4:
					    $this->setState(232);
					    $this->expressionAtom();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(241);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\PredicateContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_predicate);
						$this->setState(235);

						if (!($this->precpred($this->ctx, 3))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
						}
						$this->setState(236);
						$this->comparisonOperator();
						$this->setState(237);
						$this->recursivePredicate(4); 
					}

					$this->setState(243);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 22, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionOrDefault(): Context\ExpressionOrDefaultContext
		{
		    $localContext = new Context\ExpressionOrDefaultContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_expressionOrDefault);

		    try {
		        $this->setState(246);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(244);
		        	    $this->recursiveExpression(0);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(245);
		        	    $this->match(self::T__3);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressions(): Context\ExpressionsContext
		{
		    $localContext = new Context\ExpressionsContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_expressions);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(248);
		        $this->recursiveExpression(0);
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(249);
		        	$this->match(self::COMMA);
		        	$this->setState(250);
		        	$this->recursiveExpression(0);
		        	$this->setState(255);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionAtom(): Context\ExpressionAtomContext
		{
		    $localContext = new Context\ExpressionAtomContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_expressionAtom);

		    try {
		        $this->setState(276);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 26, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(256);
		        	    $this->directive();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(257);
		        	    $this->fullColumnName();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(258);
		        	    $this->unaryOperator();
		        	    $this->setState(259);
		        	    $this->expressionAtom();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(261);
		        	    $this->match(self::OPEN_PAR);
		        	    $this->setState(262);
		        	    $this->recursiveExpression(0);
		        	    $this->setState(267);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::COMMA) {
		        	    	$this->setState(263);
		        	    	$this->match(self::COMMA);
		        	    	$this->setState(264);
		        	    	$this->recursiveExpression(0);
		        	    	$this->setState(269);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(270);
		        	    $this->match(self::CLOSE_PAR);
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(272);
		        	    $this->match(self::OPEN_PAR);
		        	    $this->setState(273);
		        	    $this->select_statement();
		        	    $this->setState(274);
		        	    $this->match(self::CLOSE_PAR);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nullNotnull(): Context\NullNotnullContext
		{
		    $localContext = new Context\NullNotnullContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_nullNotnull);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__4) {
		        	$this->setState(278);
		        	$this->match(self::T__4);
		        }
		        $this->setState(281);
		        $this->match(self::T__10);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryOperator(): Context\UnaryOperatorContext
		{
		    $localContext = new Context\UnaryOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_unaryOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(283);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 28768) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function comparisonOperator(): Context\ComparisonOperatorContext
		{
		    $localContext = new Context\ComparisonOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_comparisonOperator);

		    try {
		        $this->setState(299);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(285);
		        	    $this->match(self::EQ);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(286);
		        	    $this->match(self::T__14);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(287);
		        	    $this->match(self::T__15);
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(288);
		        	    $this->match(self::T__15);
		        	    $this->setState(289);
		        	    $this->match(self::EQ);
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(290);
		        	    $this->match(self::T__14);
		        	    $this->setState(291);
		        	    $this->match(self::EQ);
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(292);
		        	    $this->match(self::T__15);
		        	    $this->setState(293);
		        	    $this->match(self::T__14);
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(294);
		        	    $this->match(self::T__5);
		        	    $this->setState(295);
		        	    $this->match(self::EQ);
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(296);
		        	    $this->match(self::T__15);
		        	    $this->setState(297);
		        	    $this->match(self::EQ);
		        	    $this->setState(298);
		        	    $this->match(self::T__14);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logical_operator(): Context\Logical_operatorContext
		{
		    $localContext = new Context\Logical_operatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_logical_operator);

		    try {
		        $this->setState(308);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::AND:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(301);
		            	$this->match(self::AND);
		            	break;

		            case self::T__16:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(302);
		            	$this->match(self::T__16);
		            	$this->setState(303);
		            	$this->match(self::T__16);
		            	break;

		            case self::T__17:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(304);
		            	$this->match(self::T__17);
		            	break;

		            case self::T__18:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(305);
		            	$this->match(self::T__18);
		            	break;

		            case self::T__19:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(306);
		            	$this->match(self::T__19);
		            	$this->setState(307);
		            	$this->match(self::T__19);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value_list(): Context\Value_listContext
		{
		    $localContext = new Context\Value_listContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_value_list);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(310);
		        $this->value();
		        $this->setState(315);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(311);
		        	$this->match(self::COMMA);
		        	$this->setState(312);
		        	$this->value();
		        	$this->setState(317);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value(): Context\ValueContext
		{
		    $localContext = new Context\ValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_value);

		    try {
		        $this->setState(320);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::NUMBER:
		            case self::STRING:
		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(318);
		            	$this->literal();
		            	break;

		            case self::IDENTIFIER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(319);
		            	$this->match(self::IDENTIFIER);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(322);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 1924145348608) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function directive(): Context\DirectiveContext
		{
		    $localContext = new Context\DirectiveContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_directive);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(324);
		        $this->match(self::QUESTIONMARK);
		        $this->setState(328);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(325);

		        		$_la = $this->input->LA(1);

		        		if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 3575023403008) !== 0))) {
		        		$this->errorHandler->recoverInline($this);
		        		} else {
		        			if ($this->input->LA(1) === Token::EOF) {
		        			    $this->matchedEOF = true;
		        		    }

		        			$this->errorHandler->reportMatch($this);
		        			$this->consume();
		        		} 
		        	}

		        	$this->setState(330);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function table_name(): Context\Table_nameContext
		{
		    $localContext = new Context\Table_nameContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_table_name);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(331);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 19:
						return $this->sempredExpression($localContext, $predicateIndex);

					case 20:
						return $this->sempredPredicate($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpression(?Context\ExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 6);
			}

			return true;
		}

		private function sempredPredicate(?Context\PredicateContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 3);
			}

			return true;
		}
	}
}

namespace SQLMod\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use SQLMod\SQLModParser;
	use SQLMod\SQLModListener;

	class Sql_statementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_sql_statement;
	    }

	    public function select_statement(): ?Select_statementContext
	    {
	    	return $this->getTypedRuleContext(Select_statementContext::class, 0);
	    }

	    public function update_statement(): ?Update_statementContext
	    {
	    	return $this->getTypedRuleContext(Update_statementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSql_statement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSql_statement($this);
		    }
		}
	} 

	class Select_statementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_select_statement;
	    }

	    public function SELECT(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::SELECT, 0);
	    }

	    public function select_list(): ?Select_listContext
	    {
	    	return $this->getTypedRuleContext(Select_listContext::class, 0);
	    }

	    public function FROM(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::FROM, 0);
	    }

	    public function table_expression(): ?Table_expressionContext
	    {
	    	return $this->getTypedRuleContext(Table_expressionContext::class, 0);
	    }

	    /**
	     * @return array<Where_clauseContext>|Where_clauseContext|null
	     */
	    public function where_clause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Where_clauseContext::class);
	    	}

	        return $this->getTypedRuleContext(Where_clauseContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSelect_statement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSelect_statement($this);
		    }
		}
	} 

	class Select_listContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_select_list;
	    }

	    /**
	     * @return array<Select_itemContext>|Select_itemContext|null
	     */
	    public function select_item(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Select_itemContext::class);
	    	}

	        return $this->getTypedRuleContext(Select_itemContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSelect_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSelect_list($this);
		    }
		}
	} 

	class Select_itemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_select_item;
	    }

	    public function ASTERISK(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::ASTERISK, 0);
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

	    public function directive(): ?DirectiveContext
	    {
	    	return $this->getTypedRuleContext(DirectiveContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSelect_item($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSelect_item($this);
		    }
		}
	} 

	class Table_expressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_table_expression;
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterTable_expression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitTable_expression($this);
		    }
		}
	} 

	class Where_clauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_where_clause;
	    }

	    public function WHERE(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::WHERE, 0);
	    }

	    public function condition(): ?ConditionContext
	    {
	    	return $this->getTypedRuleContext(ConditionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterWhere_clause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitWhere_clause($this);
		    }
		}
	} 

	class Update_statementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_update_statement;
	    }

	    public function singleUpdateStatement(): ?SingleUpdateStatementContext
	    {
	    	return $this->getTypedRuleContext(SingleUpdateStatementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUpdate_statement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUpdate_statement($this);
		    }
		}
	} 

	class SingleUpdateStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_singleUpdateStatement;
	    }

	    public function UPDATE(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::UPDATE, 0);
	    }

	    public function table_name(): ?Table_nameContext
	    {
	    	return $this->getTypedRuleContext(Table_nameContext::class, 0);
	    }

	    public function SET(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::SET, 0);
	    }

	    /**
	     * @return array<UpdatedElementContext>|UpdatedElementContext|null
	     */
	    public function updatedElement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UpdatedElementContext::class);
	    	}

	        return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

	    public function WHERE(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::WHERE, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSingleUpdateStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSingleUpdateStatement($this);
		    }
		}
	} 

	class OrderByClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_orderByClause;
	    }

	    /**
	     * @return array<OrderByExpressionContext>|OrderByExpressionContext|null
	     */
	    public function orderByExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(OrderByExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(OrderByExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterOrderByClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitOrderByClause($this);
		    }
		}
	} 

	class OrderByExpressionContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $order
		 */
		public $order;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_orderByExpression;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterOrderByExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitOrderByExpression($this);
		    }
		}
	} 

	class UpdatedElementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_updatedElement;
	    }

	    public function fullColumnName(): ?FullColumnNameContext
	    {
	    	return $this->getTypedRuleContext(FullColumnNameContext::class, 0);
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::EQ, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function directive(): ?DirectiveContext
	    {
	    	return $this->getTypedRuleContext(DirectiveContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUpdatedElement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUpdatedElement($this);
		    }
		}
	} 

	class FullColumnNameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_fullColumnName;
	    }

	    public function uid(): ?UidContext
	    {
	    	return $this->getTypedRuleContext(UidContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterFullColumnName($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitFullColumnName($this);
		    }
		}
	} 

	class UidContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_uid;
	    }

	    public function simpleId(): ?SimpleIdContext
	    {
	    	return $this->getTypedRuleContext(SimpleIdContext::class, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUid($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUid($this);
		    }
		}
	} 

	class SimpleIdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_simpleId;
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterSimpleId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitSimpleId($this);
		    }
		}
	} 

	class Update_listContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_update_list;
	    }

	    /**
	     * @return array<Update_itemContext>|Update_itemContext|null
	     */
	    public function update_item(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Update_itemContext::class);
	    	}

	        return $this->getTypedRuleContext(Update_itemContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUpdate_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUpdate_list($this);
		    }
		}
	} 

	class Update_itemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_update_item;
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::EQ, 0);
	    }

	    public function value(): ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

	    public function directive(): ?DirectiveContext
	    {
	    	return $this->getTypedRuleContext(DirectiveContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUpdate_item($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUpdate_item($this);
		    }
		}
	} 

	class ConditionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_condition;
	    }

	    public function logical_expression(): ?Logical_expressionContext
	    {
	    	return $this->getTypedRuleContext(Logical_expressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterCondition($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitCondition($this);
		    }
		}
	} 

	class Logical_expressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_logical_expression;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<Logical_operatorContext>|Logical_operatorContext|null
	     */
	    public function logical_operator(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Logical_operatorContext::class);
	    	}

	        return $this->getTypedRuleContext(Logical_operatorContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function CLOSE_CURLY_PAR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::CLOSE_CURLY_PAR);
	    	}

	        return $this->getToken(SQLModParser::CLOSE_CURLY_PAR, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function OPEN_CURLY_PAR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::OPEN_CURLY_PAR);
	    	}

	        return $this->getToken(SQLModParser::OPEN_CURLY_PAR, $index);
	    }

	    public function IN(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IN, 0);
	    }

	    public function OPEN_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::OPEN_PAR, 0);
	    }

	    public function CLOSE_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::CLOSE_PAR, 0);
	    }

	    /**
	     * @return array<Optional_logical_expressionContext>|Optional_logical_expressionContext|null
	     */
	    public function optional_logical_expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(Optional_logical_expressionContext::class);
	    	}

	        return $this->getTypedRuleContext(Optional_logical_expressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterLogical_expression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitLogical_expression($this);
		    }
		}
	} 

	class Optional_logical_expressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_optional_logical_expression;
	    }

	    public function logical_operator(): ?Logical_operatorContext
	    {
	    	return $this->getTypedRuleContext(Logical_operatorContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function CLOSE_CURLY_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::CLOSE_CURLY_PAR, 0);
	    }

	    public function OPEN_CURLY_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::OPEN_CURLY_PAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterOptional_logical_expression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitOptional_logical_expression($this);
		    }
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		/**
		 * @var Token|null $notOperator
		 */
		public $notOperator;

		/**
		 * @var Token|null $testValue
		 */
		public $testValue;

		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_expression;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function logical_operator(): ?Logical_operatorContext
	    {
	    	return $this->getTypedRuleContext(Logical_operatorContext::class, 0);
	    }

	    public function predicate(): ?PredicateContext
	    {
	    	return $this->getTypedRuleContext(PredicateContext::class, 0);
	    }

	    public function IN(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IN, 0);
	    }

	    public function OPEN_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::OPEN_PAR, 0);
	    }

	    public function expressions(): ?ExpressionsContext
	    {
	    	return $this->getTypedRuleContext(ExpressionsContext::class, 0);
	    }

	    public function CLOSE_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::CLOSE_PAR, 0);
	    }

	    public function OPEN_CURLY_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::OPEN_CURLY_PAR, 0);
	    }

	    public function CLOSE_CURLY_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::CLOSE_CURLY_PAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitExpression($this);
		    }
		}
	} 

	class PredicateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_predicate;
	    }

	    public function value(): ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

	    public function directive(): ?DirectiveContext
	    {
	    	return $this->getTypedRuleContext(DirectiveContext::class, 0);
	    }

	    public function expressionAtom(): ?ExpressionAtomContext
	    {
	    	return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
	    }

	    /**
	     * @return array<PredicateContext>|PredicateContext|null
	     */
	    public function predicate(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PredicateContext::class);
	    	}

	        return $this->getTypedRuleContext(PredicateContext::class, $index);
	    }

	    public function comparisonOperator(): ?ComparisonOperatorContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterPredicate($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitPredicate($this);
		    }
		}
	} 

	class ExpressionOrDefaultContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_expressionOrDefault;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterExpressionOrDefault($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitExpressionOrDefault($this);
		    }
		}
	} 

	class ExpressionsContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_expressions;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterExpressions($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitExpressions($this);
		    }
		}
	} 

	class ExpressionAtomContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_expressionAtom;
	    }

	    public function directive(): ?DirectiveContext
	    {
	    	return $this->getTypedRuleContext(DirectiveContext::class, 0);
	    }

	    public function fullColumnName(): ?FullColumnNameContext
	    {
	    	return $this->getTypedRuleContext(FullColumnNameContext::class, 0);
	    }

	    public function unaryOperator(): ?UnaryOperatorContext
	    {
	    	return $this->getTypedRuleContext(UnaryOperatorContext::class, 0);
	    }

	    public function expressionAtom(): ?ExpressionAtomContext
	    {
	    	return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
	    }

	    public function OPEN_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::OPEN_PAR, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function CLOSE_PAR(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::CLOSE_PAR, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

	    public function select_statement(): ?Select_statementContext
	    {
	    	return $this->getTypedRuleContext(Select_statementContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterExpressionAtom($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitExpressionAtom($this);
		    }
		}
	} 

	class NullNotnullContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_nullNotnull;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterNullNotnull($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitNullNotnull($this);
		    }
		}
	} 

	class UnaryOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_unaryOperator;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterUnaryOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitUnaryOperator($this);
		    }
		}
	} 

	class ComparisonOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_comparisonOperator;
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::EQ, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterComparisonOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitComparisonOperator($this);
		    }
		}
	} 

	class Logical_operatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_logical_operator;
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterLogical_operator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitLogical_operator($this);
		    }
		}
	} 

	class Value_listContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_value_list;
	    }

	    /**
	     * @return array<ValueContext>|ValueContext|null
	     */
	    public function value(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ValueContext::class);
	    	}

	        return $this->getTypedRuleContext(ValueContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::COMMA);
	    	}

	        return $this->getToken(SQLModParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterValue_list($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitValue_list($this);
		    }
		}
	} 

	class ValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_value;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitValue($this);
		    }
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_literal;
	    }

	    public function NUMBER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::NUMBER, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::STRING, 0);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitLiteral($this);
		    }
		}
	} 

	class DirectiveContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_directive;
	    }

	    public function QUESTIONMARK(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::QUESTIONMARK, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function IDENTIFIER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::IDENTIFIER);
	    	}

	        return $this->getToken(SQLModParser::IDENTIFIER, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function NUMBER(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::NUMBER);
	    	}

	        return $this->getToken(SQLModParser::NUMBER, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function FLOAT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::FLOAT);
	    	}

	        return $this->getToken(SQLModParser::FLOAT, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SHARP(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::SHARP);
	    	}

	        return $this->getToken(SQLModParser::SHARP, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ASmall(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(SQLModParser::ASmall);
	    	}

	        return $this->getToken(SQLModParser::ASmall, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterDirective($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitDirective($this);
		    }
		}
	} 

	class Table_nameContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return SQLModParser::RULE_table_name;
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(SQLModParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->enterTable_name($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof SQLModListener) {
			    $listener->exitTable_name($this);
		    }
		}
	} 
}