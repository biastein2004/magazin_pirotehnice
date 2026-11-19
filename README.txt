PROIECT: Magazin online (proiect didactic)
Produse și date FICTIVE. Nu se procesează comenzi reale.

BAZA DE DATE
- Nume bază: magazin2 (utf8mb4_general_ci)
- Fișier: magazin2.sql

CUM SE IMPORTĂ
1. Porniți Apache și MySQL din XAMPP.
2. phpMyAdmin -> Nou -> nume: magazin2, colație utf8mb4_general_ci -> Creează.
3. Selectați baza magazin2 -> Importă -> alegeți magazin2.sql -> Execută.
4. Trebuie să apară 14 tabele.

CONEXIUNE (db.php)
- host: localhost | user: root | parolă: (goală) | bază: magazin2

CONTURI DE TEST (parola: Test1234)
- Admin:  admin
- Client: client1

TABELE
De bază (cerința): admin, users, categories, products, product_images, tbl_cart
Bonus (comenzi): addresses, orders, order_items, order_compliance, payments, shipments
Extensie B2B: companies, company_documents

DIAGRAMA: diagrama_er.png

CUM SE FOLOSESTE
- Admin: login_admin.php -> adaugă / editează / șterge produse.
- Magazin: categorii -> produse -> Adaugă în coș (necesită login) -> cart.php.