# Dictionnaire des données

|**CONCEPTUAL NAME**|**CODE**|**DESCRIPTION**|**TYPE(LENGTH)**|**TABLE**|
|-------------------|--------|---------------|----------------|---------|
|Id_user| user_id|Id, PK|INT|user|
|lastname|user_last|lastname|VARCHAR(30)|user|
|firstname|user_first|firstname|VARCHAR(30)|user|
|email|user_email|email|VARCHAR(30)|user|
|password|user_pass|password|VARCHAR(30)|user|
|created_at|user_created|created_at|DATE|user|
|is_deleted|user_deleted|is_deleted|LOGICAL|user|
|Id_role|role_id|Id, PK|INT|role|
|weight|role_weight|weight|INT|role|
|is_deleted|role_deleted|deleted|LOGICAL|role|
|Id_adress|adr_id|Id, PK|INT|adress|
|street_number|adr_num|street number|INT|adress|
|street_name|adr_name|street name|VARCHAR(30)|adress|
|complementary|adr_compl|adress complementary|VARCHAR(50)|adress|
|zip|adr_zip|zip|INT|adress|
|city|adr_city|city|Varchar(30)|adress|
|country|adr_country|country|Varchar(20)|adress|
|is_eu|adr_eu|european union|LOGICAL|adress|
|is_deleted|adr_deleted|is_deleted|LOGICAL|adress|
|Id_quote|quote_id|Id, PK|INT|quote|
|number|quote_num|quote number|INT|quote|
|price|quote_price|price|DECIMAL(6,2)|quote|
|status|quote_stat|status|LOGICAL|quote|
|created_at|quote_created|created_at|DATE|quote|
|is_deleted|quote_deleted|is_deleted|LOGICAL|quote|
|Id_bill|bill_id|Id, PK|INT|bill|
|number|bill_num|bill number|INT|bill|
|status|bill_stat|status|LOGICAL|bill|
|price|bill_price|price| DECIMAL(6,2)|bill|
|is_deleted|bill_deleted|deleted|LOGICAL|bill|
|Id_customer|customer_id|Id, PK|INT|customer|
|company_name|customer_comp|company name|VARCHAR(50)|customer|
|statut|customer_id|Id, PK|VARCHAR(20)|customer|
|siret_number|customer_siret|siret number|INT|customer|
|phone_number|customer_phone|phone number|INT|customer|