grammar SQLMod;

sql_statement: select_statement | update_statement;

select_statement: SELECT select_list FROM table_expression WHERE where_clause;

update_statement: UPDATE table_name SET update_list WHERE where_clause;

select_list: select_item (',' select_item)*;

select_item: identifier;

table_expression: identifier;

where_clause: 'WHERE' condition;

update_list: update_item (',' update_item)*;

update_item: identifier '=' value | identifier '=' QUESTIONMARK;

condition: logical_expression;

logical_expression: expression (logical_operator expression)*;

expression: value | '(' logical_expression ')' | identifier IN '(' value_list ')' | value_list;

logical_operator: 'AND' | 'OR';

value_list: value (',' value)*;

value: literal | identifier;

literal: NUMBER | STRING | FLOAT;

identifier: QUESTIONMARK (IDENTIFIER | NUMBER | FLOAT) | QUESTIONMARK;

table_name: IDENTIFIER;

NUMBER: [0-9]+;
STRING: '\'' (~'\'')* '\'';
FLOAT: [0-9]+'.'[0-9]+;

QUESTIONMARK: '?';
IDENTIFIER: [a-zA-Z_][a-zA-Z0-9_]*;

WS: [ \t\r\n]+ -> skip;
