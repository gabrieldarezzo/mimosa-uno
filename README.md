# Mimosa Uno


Salve galera !!!
Basicamente a ideia é fazer uma 'api' (*rest) para ajudar um conhecido do forum Imaster.



http://seusite.com.br/vaquinhas

```json
[
    {
        rf_id: 3213131,
        peso: 81.3,
        dt_cadastro: '2019-16-10 13:51:00'
    },
    {
        rf_id: 3213132,
        peso: 85,
        dt_cadastro: '2019-16-10 15:51:00'
    }
]
```

[POST] http://seusite.com.br/vaquinhas


Para criar a base de dados:
```sql
CREATE DATABASE mimosa;
```


Para criar a tabela:
```sql
CREATE TABLE vacas_peso(
    id  int(11) PRIMARY KEY AUTO_INCREMENT,
    rf_id int(11),
    peso float(8.2),
    dt_cadastro DATETIME
)Engine=InnoDb;
```



```sql
INSERT INTO vacas_peso (rf_id, peso, dt_cadastro) values (3213131, 81.3, '2019-10-17 19:43:13');
INSERT INTO vacas_peso (rf_id, peso, dt_cadastro) values (3213135, 83, '2019-10-17 19:43:13');
```




DB:
inwor702_mimosa

Pass:
QCf3vVVk#XjJ

User:
inwor702_mimosa