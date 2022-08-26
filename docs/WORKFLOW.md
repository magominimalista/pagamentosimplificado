[⬅️ Voltar](https://github.com/magominimalista/pagamentosimplificado/blob/master/README.md)

## Workflow - Fluxo de trabalho

##### GIT [Vercionamento do código]

- Comandos automatizados pelo plugin: git init, git add ., git commit -m "menssagem", git push, git pull, git merge, git checkout -b 'branch', git branch, git diff, git merge 'minha/branch'.

Fluxograma das Tag:
```
git tag -a v1.4 -m "my version 1.4"
git tag
git push origin --tags
```

Fluxograma do histórico limpo
```
git log --oneline
git rebase -i 1e4308b
git commit --amend
git rebase --continue
```

Salve as alteraçõs sem commits para deixar nosso histórico limpo.
O famoso WIP (Work in Progress).
```
git stash
```

Documentaçãos das tags: (https://git-scm.com/book/pt-br/v2/Fundamentos-de-Git-Criando-Tags)
Meu tutorial de git: (https://dev.to/magominimalista/fluxo-git-descomplicado-parte-1-pn8),
(https://dev.to/magominimalista/fluxo-git-descomplicado-parte-2-3dn1)

##### MIGRATIONS [Vercionamento do banco de dados]

- Verifica as minhas opções | Gera a classe das tabelas dada pelo Doctrine | Cria uma migration
```
php vendor/bin/doctrine-migrations
php vendor/bin/doctrine-migrations migrations:diff
php vendor/bin/doctrine-migrations migrations:migrate
```

##### COMANDOS

- Roda o servidor
```
composer servidor
```

- Roda o CodeSniffer (psr-12)
```
composer cs
```

Caso eu tenha mais de uma verificação de código:
```
composer check
```
