# Anotações DUMP

### Dump postgres:

```bash
Base:

pg_dump -U <username> -h <host> -d <database_name> > <output_file>.dump

Exemplo:

pg_dump -U estudos -h localhost -d estudos > estudos.sql
```

#### Restore postgres:

```bash
Base:

psql -U <username> -h <host> -d <database_name> < <input_file>.dump

Exemplo:
psql -U estudos -h localhost -d estudos < estudos.sql
```