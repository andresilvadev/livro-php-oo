/*
    Lista pessoas juntamente com sua cidade, relacionadas as tabelas pessoas e cidades, afim de
    produzir um produto carteziano (matriz), restringindo a ligação entre as duas tabelas através do 
    código da cidade
*/
SELECT coluna1, coluna2
    FROM tabela1, tabela2
    WHERE condicoes
    GROUP BY coluna1, coluna2
    HAVING condicao
    ORDER BY colunaX, colunaY

SELECT 
    pessoas.codigo,
    pessoas.nome,
    cidades.codigo,
    cidades.nome
    FROM pessoas, cidades
    WHERE pessoas.cidade = cidades.codigo
    GROUP BY pessoas.nome
