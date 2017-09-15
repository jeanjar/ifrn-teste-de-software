#Plano de testes para o desafio dojo

http://dojopuzzles.com/problemas/exibe/calculando-estatisticas-simples/

## Plano de testes

|  Entrada  |   Condição                          |                           |         Classe inválida        |     Classe válida      |
|-----------|-------------------------------------|---------------------------|--------------------------------|------------------------|
|$colecao   | tipo: Collection                    |                           |     $colecao->items != int     | $colecao->items == int |
|           |                                     |                           |     $colecao->count() <= 0     | $colecao->count() > 0  |
|           | valor máximo está dentro da colecao |                           |     !$colecao->has($v_max)     | $colecao->has($v_max)  |
|           | valor mínimo está dentro da colecao |                           |     !$colecao->has($v_min)     | $colecao->has($v_min)  |

## 1º Caso de teste (Tipo da entrada é uma Collection)
```php
isCollection($collection) === true
isCollection($string) === false
```

## 2º Case de teste (Os elementos da Collection são todos inteiros)
```php
allElementsAreInt(Collection(1,2,3,4,5)) === true
allElementsAreInt(Collection("1",2,4,5)) === false
```

## 3º Caso de teste (A Collection tem tamanho maior que zero)
```php
collectionSiteGTZero(Collection(1,2,3,4)) === true
collectionSiteGTZero(Collection()) === false
```

## 4º Caso de teste (O valor máximo está detro da Collection)
```php
$maximo = 5;
maxInCollection(Collection(1,2,3,4,5))->has($maximo) === true
maxInCollection(Collection(1,2,3,4))->has($maximo) === false
```

## 5º Caso de teste (O valor mínimo está detro da Collection)
```php
$minimo = 1;
maxInCollection(Collection(1,2,3,4,5))->has($minimo) === true
maxInCollection(Collection(2,3,4,5))->has($minimo) === false
```

