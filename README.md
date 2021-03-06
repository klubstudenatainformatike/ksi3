# Aplikacija za organizaciju i odrzavanje aktivnosti

## Sadrzaj 

- [Namena aplikacije](#namena) 
- [Instalacija](#instalacija)
- [TODO](#todo)
- [Tehnologije koje se koriste](#tehnologije)
- [Kako doprineti](#kako-doprineti)


## Namena 
Aplikacija sluzi za predlaganje, organizovanje i arhiviranje aktivnosti kluba. 

## Instalacija 
Na linuxu je potrebno imati instaliran [LAMP stack](http://howtoubuntu.org/how-to-install-lamp-on-ubuntu). 
Na windowsu je potrebno imati instaliran [XAMPP](https://www.apachefriends.org/index.html). 
Treba editovati [database.php](https://github.com/atpgamma/ksi3/blob/master/app/database.php) u skladu sa podesavanjima kod vas, uglavnom promena sifre i username-a. 
Takodje treba napraviti mysql bazu koja se zove ksi, to se moze lako iz komandne linije 
```
mysql> CREATE DATABASE ksi; 
$ mysql -u <ime> -p ksi < ksi.sql
```

## TODO
- [ ] dodati korisnike, registracija i logovanje, povezati to sa aktivnostima
- [ ] lepse srediti konfiguraciju
- [ ] ispisati tekst za pocetnu stranu, o klubu, staviti linkove za chat itd.
- [ ] srediti css, forme, meni, responsive
- [ ] srediti redirect na /klub/aktivnosti kada se okaci aktivnost, trenutno samo ispisuje neki bezveze tekst
- [ ] doraditi uputsvo za instalciju 
- [ ] srediti konfiguraciju, glavni url, podaci za bazu..
 
## Tehnologije
Tehnologije koje se koriste su PHP, HTML, CSS i JavaScript. Ukoliko niste upoznati sa nekom od njih, evo par resursa za njihovo ucenje: 


 - [Codecademy](https://www.codecademy.com/), ovde mozete pokupiti osnove svake 
 - [PHP na pravi nacin](http://phpsrbija.github.io/php-the-right-way/), ovo obavezno procitati za PHP 
 - [HTMLDog](http://htmldog.com/guides/), za ucenje HTML-a CSS-a i JavaScript-a 
 
 
Pored ovoga za saradnju se koristi *git* i *github*. Evo par resursa i za njih: 
 
 
 - [Knjiga](https://git-scm.com/book/sr/v2) - nije do kraja prevedena na srpski, ali dobar deo jeste
 - [git - the simple guide ](http://rogerdudler.github.io/git-guide/) 
 
 


## Kako doprineti 
Da biste doprineli razvoju aplikacije potrebno je prvo da imate github nalog i git instaliran na kompjuteru. 

[Otvori github nalog](https://github.com/join?source=header-home), [instaliraj git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git). 

Zatim [fork](http://i.imgur.com/mDYVhkX.png)-ujte repozitorijum i  klonirajte ga sa 

  `git clone https:\\github.com\<vase ime>\aktivnosti` 
  
 Ovo ce napraviti lokalnu kopiju aplikacije kod vas. Jedino sto je jos ostalo je da dodate *upstream* da bi mogli kaciti kod na glavni repo. To radimo sa 
 
 `git remote add upstream https:\\github.com\klubstudenatainformatike\aktivnosti`  
 
 Razlog za *upstream* je taj sto se glavna verzija koda stalno menja i da biste bili u toku sa tim, nov kod povlacite odatle sa 
 
 `git pull upstream master` 
 
 
 i tako ste uvek u toku. Ukoliko vam je nesto nejasno iz ovog uputsva, a verovatno jeste, pogledajte [ovaj](https://www.youtube.com/watch?v=mENDYhfxH-o) video.

