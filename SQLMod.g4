grammar SQLMod;

sql_statement: select_statement | update_statement;

select_statement: SELECT select_list FROM table_expression where_clause*;

select_list: select_item (',' select_item)*;

select_item: ASTERISK | IDENTIFIER | directive;

table_expression: IDENTIFIER;

where_clause: WHERE condition;

update_statement: singleUpdateStatement;

singleUpdateStatement: UPDATE table_name SET updatedElement (
        COMMA updatedElement
    )* ('WHERE' expression)?;

orderByClause: 'ORDER BY' orderByExpression (',' orderByExpression)*;

orderByExpression: expression order = ('ASC' | 'DESC')?;

updatedElement: fullColumnName EQ (expression | 'DEFAULT')
| directive;    

fullColumnName: uid;

uid: simpleId | STRING;

simpleId: IDENTIFIER;

update_list: update_item (',' update_item)*;

update_item: IDENTIFIER '=' value | IDENTIFIER '=' directive;

condition: logical_expression;

logical_expression: 
    expression (OPEN_CURLY_PAR? logical_operator expression CLOSE_CURLY_PAR)*
    | expression IN OPEN_PAR expression CLOSE_PAR (optional_logical_expression)*;

optional_logical_expression: OPEN_CURLY_PAR? logical_operator expression CLOSE_CURLY_PAR;    

expression
    : notOperator = ('NOT' | '!') expression                  
    | expression logical_operator expression
    | logical_operator expression
    | predicate 'IS NOT'? testValue = ('TRUE' | 'FALSE' | 'UNKNOWN') 
    | predicate       
    | IN OPEN_PAR expressions CLOSE_PAR   
    | OPEN_CURLY_PAR expression CLOSE_CURLY_PAR
    ;

predicate:          
    | value 
    | predicate comparisonOperator predicate                             
    | directive 
    | expressionAtom  

    ;

expressionOrDefault
    : expression
    | 'DEFAULT'
    ;

expressions: expression (',' expression)*;

expressionAtom
    : directive                                                
    | fullColumnName                                           
    | unaryOperator expressionAtom                             
    | '(' expression (',' expression)* ')'                     
    | '(' select_statement ')'                                  
    ;

nullNotnull: 'NOT'? 'NULL';

unaryOperator
    : '!'
    | '~'
    | '+'
    | '-'
    | 'NOT'
    ;

comparisonOperator
    : EQ
    | '>'
    | '<'
    | '<' '='
    | '>' '='
    | '<' '>'
    | '!' '='
    | '<' '=' '>'
    ;

logical_operator
    : AND
    | '&' '&'
    | 'XOR'
    | 'OR'
    | '|' '|'
    ;

value_list: value (',' value)*;

value: literal | IDENTIFIER;

literal: NUMBER | STRING | FLOAT;

directive: '?' (IDENTIFIER | NUMBER | FLOAT | SHARP | ASmall)*;

table_name: IDENTIFIER;
SELECT: 'SELECT';
UPDATE: 'UPDATE';
FROM: 'FROM';
WHERE: 'WHERE';
IN: 'IN';
AND: 'AND';
SET: 'SET';

QUESTIONMARK: '?';
SHARP: '#';
ASmall: 'a';
COMMA: ',';
ASTERISK: '*';

OPEN_PAR: '(';
CLOSE_PAR: ')';

OPEN_CURLY_PAR: '{';
CLOSE_CURLY_PAR: '}';

EQ: '=';

NUMBER: '-'? [0-9]+ ;
STRING: '\'' (~'\'')* '\'';
FLOAT: [0-9]+'.'[0-9]+;

IDENTIFIER: [a-zA-Z_][a-zA-Z0-9_]*;

WS: [ \t\r\n]+ -> skip;