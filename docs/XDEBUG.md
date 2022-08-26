[⬅️ Voltar](https://github.com/magominimalista/pagamentosimplificado/blob/master/README.md)

## Depuração com o xDebug

Para outras pessoas que forem trabalhar neste projeto da parte desenvolvedora.
Utilize essas configurações no php.ini para um melhor debug.

```
xdebug.force_display_errors=1
xdebug.force_error_reporting=E_ALL
xdebug.halt_level=E_NOTICE
xdebug.scream=1
xdebug.cli_color=2
xdebug.collect_params=2
xdebug.dump_globals=On
xdebug.show_local_vars=On
// xdebug.profiler_enable=1
// xdebug.profiler_output_dir=C:\Users\Cairon\projeto\profiling
xdebug.remote_enable=1
```

Também é possível trazer essas configurações no php;
```
ini_set('xdebug.dump.GET', '*');
```

TIPS: O profiller mede o desempenho da sua aplicação. Quando um método tá consumindo muito recurso significa que ele precisa ser repensado. Você pode gerar esse arquivo e usar uma ferramenta chamada Webgrind para lê-los. Existem outras melhores que ela. 


