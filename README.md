# api-php-youtube
API php youtube search by term

# Doações API

Folder de instruções para utilização da api

## Instalação

### Para utilizar a API localmente, basta seguir os seguintes passos da documentação do php:

### Para Windows

- Acesse http://php.net/downloads.php e faça o download do PHP para o Windows.
- Você pode fazer o download da versão que quiser desde que seja maior que a 7 (dê preferência para Thread Safety).
- Sugiro fazer o download da versão 7.3 ou superior.
- Após o download, descompacte o arquivo .zip na partição principal do seu computador (normalmente C:) e renomeie a pasta para simplesmente php
- Faça a instalação do Microsoft Visual C++ (o PHP precisa dele para ser executado na máquina)

https://www.php.net/manual/pt_BR/install.windows.php

### Para Linux

### Pré-requisitos

- Uma instância atualizada do servidor Ubuntu 18.04.
- Um usuário sudo

### Atualize o Ubuntu

- sudo apt-get update -y
- sudo apt-get upgrade -y

### Instalar o PHP 7.2

- apt-cache pkgnames | grep php7.2
- sudo apt-get install php -y
- sudo apt-get install php-{bcmath,bz2,intl,gd,mbstring,mysql,zip,fpm} -y

### Confirme a versão do PHP:

- php -v

### Documentação oficial do php:

Não recomendo ultilizar a documentanção oficial do php, está muito atrasada.
https://www.php.net/manual/pt_BR/install.unix.debian.php



### Ativar e configurar ambiente
Para configurar o ambiente utilize:
```
source env/bin/activate
pip install -r requirements.txt
```

### Banco
Os comandos para configurar o banco estão na pasta /api/sql/banco.sql. Basta iniciar um sql-server, criar um schema e rodar o script de criação  das tabelas. Para que a aplicação acesse o banco é necessário configurar as seguintes variaveis de ambiente: 
```
export SQL_HOST="127.0.0.1" ou outro ip
export SQL_USER="root" ou outro user
export SQL_PASS="" a senha
export SQL_DB="donations" ou outro nome de schema
```

### Credencias
Existe um arquivo de credencial que deve ser colocado na pasta /api. Como a credencial é temporária, é só pedir para o @ferreiraalves :)


## Execução
Para rodar a aplicação, basta executar o comando:
```
python main.py
```

Lembrando que a aplicação irá rodar no localhost, porta 8080. Caso prefira executar em outro host ou porta, basta alterar os parametros no arquivo main.py:
```
app.run(debug=False, port=8080, host='0.0.0.0', use_reloader=False)
```  