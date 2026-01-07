<div align="center">
  <img src="https://yt3.googleusercontent.com/XrP9L62UjDITNSCvsQ1SMD_QjR8L1czI4-L-U03HRNKRlyoyHCu_Ch89X2CSxIQ90ywrDfOdkw=w1707-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj" alt="ProgrammerBR" width="300"/>
</div>

<br/>

# 🚀 Laravel do Zero ao Teste – Aula com Blade

Bem-vindo(a)! 👋  
Este repositório faz parte da aula **Laravel do Zero ao Teste**, criada para **quem nunca trabalhou com Laravel** ou está dando os **primeiros passos no backend**.

👉 **Assista à aula completa no YouTube:**  
https://youtu.be/fGxpwPnVLug

Aqui você vai encontrar o código utilizado na aula, além de instruções **bem explicadas**, pensadas **totalmente para iniciantes**.

---

## 📚 Sobre este repositório

Este projeto demonstra, na prática:

- Como funciona a estrutura de um projeto Laravel
- O que é o **Blade**
- Como organizar **views** e **layouts**
- Como deixar o código mais limpo e reutilizável
- Boas práticas para quem está começando

Se você já tentou aprender Laravel e achou complicado, **este repositório é para você**.

---

## 🛠️ Pré-requisitos

Antes de começar, você precisa ter instalado no seu computador:

- **PHP** (versão 8.1 ou superior)
- **Composer**
- **Git**
- Um servidor local (XAMPP, Laragon ou similar)

👉 Se você não sabe instalar isso ainda, recomendo assistir as aulas iniciais do canal.

---

## 📥 Como baixar o projeto

### Opção 1 – Download direto (mais simples)
1. Clique em **Code**
2. Clique em **Download ZIP**
3. Extraia o arquivo no seu computador

### Opção 2 – Clonando com Git
```bash
git clone https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
```

Entre na pasta do projeto:
```bash
cd nome-do-projeto
```

---

## ▶️ Como rodar o projeto (passo a passo)

### 1️⃣ Instalar as dependências
```bash
composer install
```

### 2️⃣ Criar o arquivo .env
```bash
cp .env.example .env
```

### 3️⃣ Gerar a chave da aplicação
```bash
php artisan key:generate
```

### 4️⃣ Rodar o servidor
```bash
php artisan serve
```

Depois disso, abra no navegador:
```
http://127.0.0.1:8000
```

🎉 Pronto! O projeto já estará rodando.

---

## 🧩 Estrutura básica do projeto

```text
app/            -> Regras de negócio
resources/
  views/        -> Arquivos Blade (HTML do Laravel)
routes/
  web.php       -> Rotas da aplicação
public/         -> Arquivos públicos (CSS, JS, imagens)
```

👉 **Nesta aula o foco principal está em:**  
`resources/views`

---

## 🎨 O que é Blade?

O **Blade** é o sistema de templates do Laravel.  
Com ele você consegue:

- Reutilizar layouts
- Separar HTML de lógica
- Manter o projeto organizado

Exemplo simples:
```blade
@extends('layouts.app')

@section('content')
  <h1>Olá, mundo!</h1>
@endsection
```

Tudo isso é explicado **com calma e sem enrolação na aula**.

---

## 📅 Série Laravel do Zero ao Teste

Esta aula faz parte de uma série completa onde:
- 📌 Sai **uma aula por semana**
- ⏰ Todos os dias às 10, cortes das aulas no TikTok
- 🧠 Conteúdo progressivo, do básico ao avançado

Se inscreve no canal para não perder nenhuma 👇

👉 https://youtube.com/@programmerbr

---

## 🙌 Contribuição

Este projeto é educacional, mas sugestões são sempre bem-vindas!
Sinta-se à vontade para:
- Abrir issues
- Enviar pull requests
- Testar e adaptar o código

---

## ❤️ Agradecimento

Obrigado por acompanhar o conteúdo do **ProgrammerBR**.  
Espero que este repositório te ajude a **dar os primeiros passos na programação backend** 🚀

Bons estudos!
