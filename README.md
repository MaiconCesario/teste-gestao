# App Gestão de Vendas

Este projeto é um sistema feito utilizando a linguagem PHP, o Framework Laravel e o banco de dados MySQL para a gestão de vendas realizadas.

Principais Rotas: 

- login
- app/vendedor
- app/vendedor/create
- app/vendedor/{id}
- app/vendedor/{id}/edit
- app/vendas/create

A primeira rota a ser acessada é a de “login”, isso porque as demais rotas estão protegidas por um middleware, sendo necessária a realização de autenticação antes de acessá-las. Poderá utilizar o seguinte usuário para logar no sistema:
Usuário: “teste@teste.com”
Senha:”123456”;

Ao realizar o login, será redirecionado para a página com a listagem de todos os vendedores cadastrados.

Nesta página, ao clicar no botão “Vendas”, é possível verificar as vendas feitas por um vendedor específico.

Clicando no botão “Editar”, é possível alterar as informações do usuário.

Clicando no botão “Deletar’, é possível deletar o vendedor, caso este não tenha vendas atreladas a seu usuário.

No menu superior, clicando no botão “Nova Venda”, é possível cadastrar uma nova venda que ficará atrelada ao vendedor selecionado no banco de dados.

Neste mesmo menu, ao clicar na opção “Cadastrar Vendedor” é possível cadastrar um novo vendedor.



