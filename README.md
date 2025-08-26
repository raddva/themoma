# 💸 Themoma
_A Modern Web Money Manager (In Development)_

Themoma is a **web-based money management tool** to track income, expenses, budgets, savings, and assets — built with **Laravel**, styled with **TailwindCSS**, and bundled by **Vite**.

---

## 🚧 Project Status
> **Active development**. APIs, database schema, and UI are evolving; breaking changes are expected.

---

## ✨ Features (Planned & In Progress)
- **Income & Expense Tracking** — categorize transactions, notes, attachments (planned).
- **Budgets** — monthly/weekly budgets with progress bars.
- **Savings & Assets** — goals, balances, and simple portfolio view.
- **Dashboards** — charts and quick insights.
- **Auth & Roles** — email/password auth, user profiles (in progress).
- **Responsive UI** — Tailwind-first design, mobile friendly.

---

## 🛠 Tech Stack
- **Backend:** [Laravel](https://laravel.com/) 10+
- **Views:** Blade + Vite
- **Styling:** [TailwindCSS](https://tailwindcss.com/)
- **Build Tool:** [Vite](https://vitejs.dev/)
- **Database:** MySQL or PostgreSQL
- **Testing:** PHPUnit & Pest (optional)

---

## ✅ Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+ & npm
- MySQL/PostgreSQL
- (Optional) Docker + Laravel Sail

---

## 🚀 Quick Start

```bash
# 1) Clone
git clone https://github.com/your-username/themoma.git
cd themoma

# 2) Install deps
composer install
npm install

# 3) Environment
cp .env.example .env
php artisan key:generate

# 4) Configure DB in .env, then:
php artisan migrate

# 5) Run dev servers (in two terminals or use concurrently)
php artisan serve
npm run dev
```

Visit: http://127.0.0.1:8000

## 📌 Roadmap

- Auth (register/login, password reset)
- Transactions CRUD + categories & tags
- Budgets w/ period & alerts
- Savings & assets module
- Dashboard charts (income vs expense, category breakdown)
- Import/Export (CSV)
- Role-based access control (RBAC)
- Deployment (VPS)

## 🧪 Testing
```bash
php artisan test
# or Pest if installed
./vendor/bin/pest
```

## 🤝 Contributing

Sorry, For this moment, contributions aren't opened yet.

## 👩🏻 Creator

Made with ❤️ by Asdya.
