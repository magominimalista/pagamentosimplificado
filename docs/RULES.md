## Regras e convenções

#### Idioma
- Vamos usar o INGLÊS como padrão no nosso código;
- Nosso end-point (api) terá suas chamadas em português para o usuário final.

#### PHP

- Classes devem ser declaradas em StudlyCaps;
- Métodos devem ser declarados em camelCase;
- Abertura e fechamento de colchete em linhas separadas;
```
{
    $this->way();
}
```php

---

#### GIT
- Codou é uma etapa do projeto?
    - Etapa?
        - Testa
            - Commit
            - Push
            - Tag (Atualiza versão)
    - WIP (Salvar o trabalho)
        - Git stash
- Nova funcionalidade?
    - Novo branch
- Terminou a funcionalidade?
    - Testa
        - Commit
        - Push
        - Switch para o branch master
        - Merge
        - Rebase (organizar nossos merges)
