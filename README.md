# 📱 SmartphoneRental

**SmartphoneRental** is a prototype web application built with Laravel, Tailwind CSS, and Alpine.js. It allows customers to browse available smartphones and submit rental requests, which require admin approval. This project is intended for demonstration and dummy purposes only.

---

## 🚀 Features

- User registration and login (Basic Laravel Auth)
- Smartphone catalog grid with image, name, and price
- KTP (Indonesian ID) image upload as rental requirement
- Admin-only rental approval system
- Midtrans integration for online payment (dummy mode or sandbox)
- Separation of user and admin views (single-page layout with sections)
- Simple Alpine.js interactivity for frontend behavior

---

## 🛠️ Tech Stack

- [Laravel](https://laravel.com/) (Backend Framework)
- [Tailwind CSS](https://tailwindcss.com/) (Utility-first CSS)
- [Alpine.js](https://alpinejs.dev/) (Minimal JS interactivity)
- [Midtrans](https://midtrans.com/) (Payment gateway)

---

## ⚙️ Installation & Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/SmartphoneRental.git
   cd SmartphoneRental
   ```
   
2. **Install Dependencies**

   ```bash
   composer install
   npm install && npm run dev
   ```
   
3. **Configure Environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   
4. **Run Migrations (and optionally seed data)**

   ```bash
   php artisan migrate
   ```
   
5. **Serve the Application**

   ```bash
   php artisan serve
   ```

## 🔐 Authentication
This project uses Laravel’s built-in authentication (no Jetstream/Breeze). Guards and middleware protect routes appropriately.

## 📌 Notes
<ul>
    <li>This project is for demonstration only and not intended for production use.</li>
    <li>Uploaded KTP images are stored locally in storage/app/public.</li>
</ul>

## 📃 License
This project is open-sourced under the MIT License.
