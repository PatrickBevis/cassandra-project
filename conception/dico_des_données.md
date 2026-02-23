# Dictionnaire des données

| **CONCEPTUAL NAME**  | **CODE**              | **DESCRIPTION**      | **TYPE(LENGTH)** | **TABLE** |     |
| -------------------- | --------------------- | -------------------- | ---------------- | --------- | :-: |
| Id_user              | user_id               | Id, PK               | INT              | user      | 🟩  |
| lastname             | user_last             | lastname             | VARCHAR(30)      | user      | 🟩  |
| firstname            | user_first            | firstname            | VARCHAR(30)      | user      | 🟩  |
| email                | user_email            | email                | VARCHAR(30)      | user      | 🟩  |
| password             | user_pass             | password             | VARCHAR(30)      | user      | 🟩  |
| created_at           | user_created          | created_at           | DATE             | user      | 🟩  |
| is_deleted           | user_deleted          | is_deleted           | LOGICAL          | user      | 🟩  |
| Id_role              | role_id               | Id, PK               | INT              | role      | 🟥  |
| code                 | role_code             | code                 | VARCHAR(30)      | role      | 🟥  |
| Id_adress            | adr_id                | Id, PK               | INT              | address   | 🟦  |
| street_number        | adr_num               | street number        | INT              | address   | 🟦  |
| street_way           | adr_way               | street way           | ENUM             | address   | 🟦  |
| street_name          | adr_name              | street name          | VARCHAR(30)      | address   | 🟦  |
| complementary        | adr_compl             | adress complementary | VARCHAR(50)      | address   | 🟦  |
| zip                  | adr_zip               | zip                  | INT              | address   | 🟦  |
| city                 | adr_city              | city                 | VARCHAR(30)      | address   | 🟦  |
| country              | adr_country           | country              | VARCHAR(20)      | address   | 🟦  |
| is_eu                | adr_eu                | european union       | LOGICAL          | address   | 🟦  |
| Id_invoice           | invoice_id            | Id, PK               | INT              | invoice   | 🟪  |
| number               | invoice_num           | invoice number       | INT              | invoice   | 🟪  |
| status               | invoice_stat          | status               | ENUM             | invoice   | 🟪  |
| price_taxfree        | invoice_price_taxfree | price tax free       | DECIMAL(6,2)     | invoice   | 🟪  |
| price_withtax        | invoice_price_withtax | price with tax       | DECIMAL(6,2)     | invoice   | 🟪  |
| price_total          | invoice_price_total   | price total          | DECIMAL(6,2)     | invoice   | 🟪  |
| Id_tax               | tax_id                | Id, PK               | INT              | tax       | 🟨  |
| rate                 | tax_rate              | rate tax             | ENUM             | tax       | 🟨  |
| Id_audit             | audit_id              | Id, PK               | INT              | audit     | ⬛  |
| type                 | audit_type            | type                 | VARCHAR(30)      | audit     | ⬛  |
| audit_inspector_name | audit_inspector_name  | inspector name       | VARCHAR(30)      | audit     | ⬛  |
| created_at           | audit_created         | created              | DATE             | audit     | ⬛  |
| ended_at             | audit_ended           | ended                | DATE             | audit     | ⬛  |
| statut               | audit_statut          | status               | ENUM             | audit     | ⬛  |
| Id_report            | report_id             | Id, PK               | INT              | report    | 🟧  |
| type                 | report_type           | type                 | ENUM             | report    | 🟧  |
| name                 | report_name           | name                 | VARCHAR(30)      | report    | 🟧  |
| path                 | report_path           | path                 | VARCHAR(125)     | report    | 🟧  |
| bits_length          | report_bits_length    | bits length          | INT              | report    | 🟧  |
| created_at           | report_created        | created              | DATE             | report    | 🟧  |
| Id_customer          | customer_id           | Id, PK               | INT              | customer  | ⬜  |
| company_name         | customer_comp         | company name         | VARCHAR(50)      | customer  | ⬜  |
| statut               | customer_id           | Id, PK               | VARCHAR(20)      | customer  | ⬜  |
| siret_number         | customer_siret        | siret number         | INT              | customer  | ⬜  |
| phone_number         | customer_phone        | phone number         | INT              | customer  | ⬜  |
