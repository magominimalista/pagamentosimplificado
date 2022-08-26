- 🍔 Menu
    - 📚 [LIBRAIRES](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/LIBRARIES.md)
    - 🔌 [PLUGINS](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/PLUGINS.md)
    - 📜 [RULES](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/RULES.md)
    - 📖 [SCOPE](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/SCOPE.md)
    - ✅ [TODO](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/TODO.md)
    - ♾️ [WORKFLOW](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/WORKFLOW.md)
    - 🐛 [XDEBUG](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/XDEBUG.md)

## Sistema de pagamento simplificado

#### Objetivos do projeto

- O QUE É?
    - Um banco fictício | Cadastro de 2 tipos de usuário | Métodos para receber, enviar e sacar dinheiro | Manter o histórico das transações (Extrato);

- ASPECTO TÉCNICO:
    - App
        - Api restfull;
        - Camada de contato com o cliente;
    - Postman
        - A coleção de conversa com o cliente Postman;

- CENÁRIO:
    - Entidades: "Comum" e "Lojista";
        - Regras: 
            - Comum envia para Comum;
            - Comum envia para Lojista;
            - Lojista só recebe;
    - Cadastro
        Dados principais: Nome Completo, CPF, E-mail e Senha;
        Value Objects: CPF e E-mail (devem ser únicos);
        Extra: Ativação real por e-mail;
    - Contexto da aplicação
        - Dashboard:
            - Saldo;
            - Extrato;
                - Permições: Todos;
                - Registro de atividades: recebeu, sacou, enviou;
        - Menu:
            - Receber;
                Comportamento:
                    - Permições: Todos;
                    - Define quantia e seleciona banco fictício;
            - Enviar;
                    - Permições: Comum;
                    - Define quantia e seleciona o usuário;
            - Extra: Sacar;
                    - Permições: Todos;
                    - Saca se tiver saldo;

- STORYTELLING
    - Cria uma conta;
    - Verifica e-mail;
    - Ativa a conta;
        - Todos começam com saldo zero;
        - Primeiras etapas para mudar o saldo:
            - Usuários podem clicar em receber escolhe um valor;
        - Ações do usuário:
            - Ver saldo | Receber | Enviar | Sacar | Extrato

- REGRA DE NEGÓCIO: 
    - Para finalizar a transferência checar o moc [requisição http]:
        - (https://run.mocky.io/v3/8fafdd68-a090-496f-8c9a-3442cf30dae6)
    - No recebimento de pagamento:
        - De um usuário para outro
        - De um usuário para um lojista
        - Notificação por e-mail ou SMS usando este moc [requisição http]:
            - (http://o4d9z.mocklab.io/notify)

- VALIDAÇÔES
    - Dados se são válidos;
    - Dados se CPF e EMAIL são únicos;
    - Validar valores:
        - Saldo suficiente?
        - Saldo insuficiente?

- EXEMPLO DE SAÍDA DA API

POST transations

```
{
    "value" : 100.00,
    "payer" : 4,
    "payee" : 15
}

```

- PRIORIDADES
    - API
    - Coleção no Postman
    - Interface

---

#### Documentos de apoio aos desenvolvedores

Em docs constam os seguintes documentos:
- [LIBRAIRES](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/LIBRARIES.md) [ Todas as bibliotecas do nosso projeto com descrição e link ]
- [PLUGINS](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/PLUGINS.md) [ Todos os plugins usados em nosso workflow git e agilidade de código ]
- [RULES](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/RULES.md) [ Regras de desenvolvimento: git, idioma, classes e métodos ]
- [SCOPE](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/SCOPE.md) [ Escopo do projeto explicado ]
- [TODO](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/TODO.md) [ Lista de tarefas ]
- [WORKFLOW](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/WORKFLOW.md) [ Comando utilizados no projeto ]
- [XDEBUG](https://github.com/magominimalista/pagamentosimplificado/blob/master/docs/XDEBUG.md) [ Configurações do xDebug]

> * Outros documentos podem ser adicionados durante o desenvolvimento; O objetivo é fazer um registro da arquitetura utilizada no projeto, os padrões de projetos utilizados no desenvolvimento, o fluxograma do git no projeto;
