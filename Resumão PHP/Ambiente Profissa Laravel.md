[Tutorial](https://www.youtube.com/watch?v=V-MDfE1I6u0)
# Ambiente Docker

- [[#Com o app criado]]

**Arquivos necessários**:
- Dockerfile
- docker-compose.yml
- Makefile

**Dockerfile**:
- Escolher imagem php
	> php:apache

**Comandos**:
```bash
make setup
```

```bash
make create_app
```

## Com o app criado
- configurar o arquivo .env (de acordo com o as informações do docker-compose.yml)
	```
	DB_CONNECTION=mysql
	DB_HOST=mysql_db
	DB_PORT=3306
	DB_DATABASE=Laravel_docker
	DB_USERNAME=root
	DB_PASSWORD=root
	```

- Executar `make data`
	```bash
	make data
	```

## Portas

**PHP Admin**
```
localhost:9001
```

**Laravel**
```
localhost:8080
```

**MySQL**
```
3306
```