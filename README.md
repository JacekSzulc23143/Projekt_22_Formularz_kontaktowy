# Projekt_22_Formularz_kontaktowy
## Konfiguracja w c:\xampp
```
[php.ini]
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = abc@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

[sendmail.ini]
smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=abc@gmail.com
auth_password=****TAJNE****
force_sender=abc@gmail.com
```