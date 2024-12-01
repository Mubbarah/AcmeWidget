
# Acme Widget Co - Basket System

## Overview

This project is a PHP-based basket system for **Acme Widget Co.** It allows users to:
- View available products.
- Add items to a basket.
- View the basket with a breakdown of:
  - Subtotal
  - Delivery Charges
  - Grand Total.
- Clear the basket.

---

## Features

1. **Product Catalog:** Displays all available products, including their name, code, and price.
2. **Dynamic Basket:** Users can add items, and the totals update automatically.
3. **Delivery Charges:**
   - Orders under $50: $4.95
   - Orders under $90: $2.95
   - Orders $90 or more: Free delivery.
4. **Empty Basket Handling:** Shows all totals as `$0.00` if the basket is empty.
5. **Clear Basket:** A button lets users remove all items from the basket.

---

## How It Works

1. **Backend Logic:**
   - Uses PHP classes for managing products, baskets, and delivery charges.
   - Basket data is stored in PHP sessions to persist across page reloads.

2. **Frontend:**
   - Styled using **Bootstrap** for a clean and responsive interface.

3. **Charge Calculation:**
   - Subtotal: Sum of product prices.
   - Delivery Charges: Based on subtotal thresholds.
   - Grand Total: `Subtotal + Delivery Charges`.

---

## Assumptions

- The product catalog is predefined and does not fetch products from a database.
- Delivery charges depend only on the subtotal.
- The session must be enabled for the basket to persist.

---

## Installation

1. Place the project in your web server's root directory (e.g., `www` or `htdocs`).
2. Start your local PHP server.
3. Open the project in a browser (e.g., `http://localhost/acme_widget_co_task`).

---

## How to Use

1. Browse the product catalog.
2. Add products to your basket.
3. View the subtotal, delivery charges, and total.
4. Clear the basket when needed.

---
