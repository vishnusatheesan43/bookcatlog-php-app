book-catalog-app/
├── index.php          # Entry point and router
├── db.php             # Database connection (model)
├── books.php          # Controller logic for books
├── views/
│   ├── header.php     # Common header
│   ├── footer.php     # Common footer
│   ├── list.php       # View all books
│   ├── form.php       # Add/edit form
├── database.sqlite    # SQLite DB file (created automatically)
└── Dockerfile         # For containerization
docker-compose.yml     # Optional for easy running
