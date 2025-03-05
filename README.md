# Product Inventory System

A simple product inventory system with a basic pricing engine built using Laravel and Vue.js.

## Features
- Display a list of products with title, description, and price.
- View product details with dynamically calculated discount prices.
- Apply category-based and special customer discounts.
- API-based backend in Laravel with a Vue.js frontend.

## Installation

### Backend (Laravel)
1. Clone the repository:
   ```sh
   git clone <repository-url>
   cd <project-directory>
2. Install dependencies:
   ```sh
   composer install
3. Generate the application key:
   ```sh
   php artisan key:generate
4. Run migrations and seed the database:
   ```sh
   php artisan migrate --seed
5. Start the development server:
    ```sh
    php artisan serve

### Frontend (Vue.js)
1. Install dependencies:
   ```sh
   npm install
2. Build assets:
   ```sh
   npm run dev

## Usage
. Access the product list at:
http://localhost:8000/
. Click on a product to view details and discounted pricing.

## API Endpoints
GET /api/products - Fetch all products.
GET /api/products/{id} - Fetch product details with final price.

## Technologies Used
Backend: Laravel (PHP)
Frontend: Vue.js (JavaScript)
HTTP Client: Axios (API requests)