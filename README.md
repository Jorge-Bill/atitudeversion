## Exercício

Vocês devem criar uma classe que seja capaz de realizar 
o login ao banco de dados do tipo MYSQL.

Essa classe e\ou pacote (Definam entre vocês) deve ser capaz de identificar
se e a conexão é para o Mysql ou não, ou seja, de alguma
forma ao chamar a classe e gerar o seu objeto ela deve
ser suficientemente inteligente para conectar ao seu socket correto
de banco de dados.

A classe deve ser baseada na PDO sendo assim ela sabera
o socket correto de Mysql. Caso ocorra erros retornar
as Exceptions de erro para o usuário. A PDO já possui suas Excpetions
porém vocês devem retornar a de vocês.

Essa classe após ser gerado o objeto deve ser capaz de prover:

 - Execução de querys
 - Lista de dados
 - Excluir
 - Adicionar
 - Editar
 - Ou seja, um CRUD.
 
 Lembrando que, vocês precisam criar os testes unitários e sim eu sei que vocês ainda não 
 conhecem muito o teste mas alguns vocês são capazes de fazer tais como:
 
 - O HOST do banco de dados é uma sring ou um ip?
 - A senha não é null
 - O usuário não é null
 - E etc.

Tudo com orientação a objetos. Evitem estruturado........ 