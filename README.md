# 🚀 Gerenciador de Clientes - Teste Técnico

Este projeto é um sistema de gerenciamento de clientes (CRUD) desenvolvido para um teste técnico. A aplicação permite cadastrar, listar, buscar, editar e excluir clientes, focando em usabilidade, segurança e organização de código.

## 🛠️ Tecnologias Utilizadas

* **Framework:** [Laravel 11](https://laravel.com/docs/11.x)
* **Linguagem:** PHP 8.2+
* **Banco de Dados:** MySQL (via XAMPP)
* **Frontend:** Bootstrap 5 & Bootstrap Icons

## 📋 Funcionalidades

* **CRUD Completo:** Cadastro, Listagem, Edição e Exclusão.
* **Busca Inteligente:** Filtro dinâmico por Nome ou E-mail diretamente na listagem.
* **Paginação:** Organização de 10 registros por página para navegação fluida.
* **Validação de Dados:** Regras robustas para evitar campos vazios e e-mails duplicados.
* **Layout Responsivo:** Interface limpa e adaptável para dispositivos móveis e desktop.

## ⚙️ Pré-requisitos

Para rodar este projeto, você precisará de:
1.  **XAMPP** (ou servidor local com PHP 8.2+ e MySQL) instalado.
2.  **Composer** instalado.

## 🚀 Como Instalar e Executar

Siga este passo a passo para configurar o ambiente em sua máquina:

### 1. Clonar o Repositório
Abra o seu terminal e execute:
```bash
git clone https://github.com/DanielMello07/DesafioResidenciaTanda.git
cd DesafioResidenciaTanda
```
### 2. Instalar dependências
Utilize o Composer para baixar as bibliotecas do framework, execute no terminal do projeto:
```bash
composer install
```
### 3. Configração do ambiente
1. Na raiz do projeto, renomeie o arquivo .env.example para .env.
2. Abra o arquivo .env e configure as credenciais do seu banco de dados local (MySQL do XAMPP):
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gerenciadorDeClientes
    DB_USERNAME=root
    DB_PASSWORD=
* **Importante:** Crie manualmente o banco de dados chamado gerenciadorDeClientes no seu **phpMyAdmin** antes de seguir para o próximo passo.
### 4. Configurar a Aplicação
Execute os comandos para gerar a chave de segurança e criar as tabelas no banco de dados, no terminal:

```Bash
php artisan key:generate
php artisan migrate
```
(Opcional) Caso deseje popular o banco com dados fictícios para teste:
```Bash
php artisan db:seed
```
### Iniciar o servidor
Com tudo preparado e configurado, agora é só iniciar o servidor, rode o comando no terminal:
```Bash
php artisan serve
```
E acesse em: http://localhost:8000
---
Desenvolvido por: **Daniel Marcos da Silva Mello**
