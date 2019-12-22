# api-php-youtube
API php youtube search by term

## Instalação

### Para utilizar a API localmente, basta seguir os seguintes passos da documentação do php:

### Para Windows

- Acesse http://php.net/downloads.php e faça o download do PHP para o Windows.
- Você pode fazer o download da versão que quiser desde que seja maior que a 7 (dê preferência para Thread Safety).
- Sugiro fazer o download da versão 7.3 ou superior.
- Após o download, descompacte o arquivo .zip na partição principal do seu computador (normalmente C:) e renomeie a pasta para simplesmente php
- Faça a instalação do Microsoft Visual C++ (o PHP precisa dele para ser executado na máquina)
- Para o PHP funcionar corretamente, precisamos ativar suas configurações padrões.
- Dentro da pasta descompactada no C:, temos vários arquivos, o executável do PHP (php.exe) e dois arquivos de configurações: php.ini-development e php.ini-production.
- renomeie o arquivo php.ini-development para somente php.ini.
- O executável do PHP sempre carregará as configurações do arquivo php.ini.
- Temos que configurar o PHP para funcionar em qualquer momento no terminal.
- Abra o Painel de Controle, vá em Sistema, selecione a guia Avançado, depois clique em Variáveis de ambiente no rodapé da janela. Na seção Variáveis do sistema, selecione Path, agora clique em Editar, em Valor da variável, vá até o final do campo de texto, agora iremos colocar o caminho onde o nosso PHP está, acrescente antes um ; (ponto e vírgula) para finalizar os caminhos anteriores e coloque c:\php, então, ficará assim: ….;c:\php. Confirme tudo e o PHP está configurado.
- Agora temos que configurar o arquivo de hosts para apontar o nome localhost para 127.0.0.1.
- Abra o menu iniciar e selecione seu editor de texto com o botão direito do mouse e clique em Executar como administrador. No menu Abrir e siga o caminho C:\Windows\System32\drivers\etc. Abra o arquivo hosts, se ele não aparecer, selecione Todos os arquivos para ele ser mostrado na janela.

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