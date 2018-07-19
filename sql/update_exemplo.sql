/*
    A instrução update é utilizada para alteração de valores de coluna, de uma ou mais linhas em uma
    tabela do banco de dados.
*/

UPDATE tabela SET 
    coluna1 = valor1,
    coluna2 = valor2
    WHERE condicao


UPDATE produtos SET
    custo = custo * 1.2,
    venda = venda * 1.25
    WHERE fornecedor = 10;