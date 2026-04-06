# README - Instalação e Execução do Projeto

## Requisitos
Antes de executar o projeto, é necessário ter instalado:

- MySQL Workbench
- XAMPP

---

## 1. Configurar o Banco de Dados

1. Abra o MySQL Workbench.
2. Caso você tenha definido uma senha para o seu banco de dados, abra o arquivo `DBO.php` que está dentro da pasta do projeto.
3. No arquivo, altere a senha para a mesma senha configurada no seu MySQL.

Exemplo:

```php
$senha = "sua_senha";
```

4. Depois disso, execute o script do banco de dados no Workbench para criar as tabelas e demais informações necessárias.

---

## 2. Colocar o Projeto no XAMPP

1. Abra a pasta onde o XAMPP foi instalado.
2. Entre na pasta:

```text
htdocs
```

3. Copie a pasta completa do projeto para dentro da pasta `htdocs`.

Exemplo:

```text
xampp/htdocs/NomeDoProjeto
```

---

## 3. Iniciar o Projeto

1. Abra o painel de controle do XAMPP.
2. Inicie apenas o módulo `Apache`.
   - Não é necessário iniciar o `MySQL` pelo XAMPP.

3. Abra o navegador e acesse:

```text
http://localhost/NomeDoProjeto/arquivo.php
```

Substitua:
- `NomeDoProjeto` pelo nome da pasta do seu projeto
- `arquivo.php` pelo arquivo que deseja abrir

Exemplo:

```text
http://localhost/MeuProjeto/index.php
```

---

## Atenção
Os três pontos mais importantes são:

1. Configurar corretamente a senha do banco no arquivo `DBO.php`
2. Rodar o script do banco no Workbench
3. Colocar a pasta do projeto dentro de `htdocs` antes de acessar pelo navegador

