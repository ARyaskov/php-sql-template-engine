# PHP SQL Template Engine


![PHP Shield](https://img.shields.io/badge/php-%23777BB4.svg?logo=php&logoColor=fff&style=flat)
![MySQL Shield](https://img.shields.io/badge/mysql-4479A1.svg?logo=mysql&logoColor=fff&style=flat)

#PARSERS #LEXERS #ANTLR4 #ANTLR4-PHP

![Project Documentation](https://toivo.tech/php-sql-template-engine/docs/)

# Harnessing

0. First of all, the project is fully functioning, grammar was already compiled, just run it with `php src/test.php`

But the full story is:

1. Install antlr4 4.13.1+ (e.g. on MacOS)
```brew install antlr```

Install PHP8.3.6+
```brew install php```

2. In order to generate grammar files (the project has pregenerated ones in `Generated` )
```antlr -Dlanguage=PHP SQLMod.g4 -o Generated -package SQLMod -visitor -no-listener```

3. Run it with
```php src/test.php```

4. For documentation generation
4.1 Install `phive`:
```brew install phive```
4.2 Install `gpg` for phpDocumentor
```brew install --cask gpg-suite```
4.3 Install phpDocumentor
```phive install phpDocumentor```
4.4 Run phpDocumentor
```tools/phpDocumentor -dsrc/ -tdocs/```


# Task

Написать функцию формирования sql-запросов (MySQL) из шаблона и значений параметров.

Места вставки значений в шаблон помечаются вопросительным знаком, после которого может следовать спецификатор преобразования.
Спецификаторы:
?d - конвертация в целое число
?f - конвертация в число с плавающей точкой
?a - массив значений
?# - идентификатор или массив идентификаторов

Если спецификатор не указан, то используется тип переданного значения, но допускаются только типы string, int, float, bool (приводится к 0 или 1) и null.
Параметры ?, ?d, ?f могут принимать значения null (в этом случае в шаблон вставляется NULL).
Строки и идентификаторы автоматически экранируются.

Массив (параметр ?a) преобразуется либо в список значений через запятую (список), либо в пары идентификатор и значение через запятую (ассоциативный массив).
Каждое значение из массива форматируется в зависимости от его типа (идентично универсальному параметру без спецификатора).

Также необходимо реализовать условные блоки, помечаемые фигурными скобками.
Если внутри условного блока есть хотя бы один параметр со специальным значением, то блок не попадает в сформированный запрос.
Специальное значение должно возвращаться методом skip. Нужно выбрать подходящее значение на своё усмотрение.
Условные блоки не могут быть вложенными.

При ошибках в шаблонах или значениях выбрасывать исключения.

Для упрощения задачи предполагается, что в передаваемом шаблоне не будут использоваться комментарии sql.

В файле Database.php находится заготовка класса с заглушками в виде исключений. Нужно реализовать методы buildQuery и skip.
В файле DatabaseTest.php находятся примеры (тесты). Тесты обязательно должны быть успешными (в противном случае код рассматриваться не будет).

Код должен работать с php 8.3.
