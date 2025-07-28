# 🎟 Sistema de Compra de Ingressos (PHP MVC)

## 📌 Visão Geral
Sistema completo para gestão de **usuários, produtos (ingressos), clientes e compras**. 
Funciona com **PHP puro**, banco de dados **SQLite**, arquitetura **MVC** e suporte a **Docker**.

---

## 🚀 Funcionalidades
✅ Cadastro e login de usuários  
✅ Cadastro de produtos (ingressos)  
✅ Controle de estoque com reserva de 2 minutos  
✅ Sistema de carrinho e histórico de compras  
✅ Geração de comprovante em PDF (mpdf)  
✅ Docker (PHP + SQLite)  

---

## 🛠 Tecnologias
- PHP 8.2 (puro)
- SQLite
- Composer
- mpdf/mpdf
- Docker e Docker Compose

---

## ▶️ Como Rodar o Projeto

### 🔹 Sem Docker
1. Clone o repositório:
   ```bash
   git clone https://github.com/SEU_USUARIO/projeto-ingressos.git
   ```
2. Instale dependências:
   ```bash
   composer install
   ```
3. Rode em um servidor local (PHP embutido):
   ```bash
   php -S localhost:8000 -t public
   ```
4. Acesse: [http://localhost:8000](http://localhost:8000)

### 🔹 Com Docker
1. Suba os containers:
   ```bash
   docker-compose up -d
   ```
2. Acesse: [http://localhost:8080](http://localhost:8080)

---

## 🗄 Estrutura de Pastas
```
/app
  /Controllers
  /Models
  /Views
/config
/core
/public
/storage
```

---

## ✅ Checklist de Implementação
- [x] MVC com Composer
- [x] Autenticação com sessão
- [x] Produtos com reserva de estoque
- [x] Sistema de carrinho
- [x] Histórico de compras
- [x] PDF de comprovante
- [x] Docker Compose funcional

---

## 📌 Autor
Projeto desenvolvido para fins de estudo (MVC com PHP).
