## Workshop 1

Zadanie - zaprojektować windę:

- [x] otwarcie/zamknięcie drzwi
- [x] wybór piętra
- [ ] walidacja wybranego piętra: dostępne piętra to 0-10
- [ ] help: po wciśnięciu przycisku help pojawia się cieciu
- [ ] przycisk turbo: będzie szybciej jechać (2 piętra na raz)
- [x] limit ciężkości: po przekroczeniu 500kg ma się nie uruchomić i zwrócić komunikat 
- [x] beep po dotarciu na miejsce

Elementy domeny:
* winda
* cokolwiek, co można wsadzić do windy
* ludzie

Uruchamianie:
```
.\vendor\bin\phpstan analyse
php playground.php
```
