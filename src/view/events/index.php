
    <header class="header">
      <nav class="header-menu">
        <a  class="header-menu__home" href="index.php"><img src="assets/svg/dok-logo.svg" alt="home" width="60" height="40"></a>
        <ul class="header-menu__nav">
          <li><a class="header-menu__item" href="index.php?page=programma">programma</a></li>
          <li><a class="header-menu__item" href="#">over dok</a></li>
          <li><a class="header-menu__item" href="#">zones</a></li>
          <li><a class="header-menu__item" href="#">praktisch</a></li>
          <li><a class="header-menu__item" href="#">word dokbewoner</a></li>
          <li class="icon"><a class="header-menu__icon" href="#">&#9776;</a></li>
        </ul>
      </nav>
      <section class="header-text">
        <header class="header-text__title">
          <img class="header-text__logo" src="assets/svg/dok-logo.svg" alt="DOK" width="250" height="125">
          <h1 class="header-text__title__edition page__title__edition">2017</h1>
        </header>
        <div class="header-text__info">
          <article>
            <h2 class="header-text__slogan">werfplek voor verpozing en creatieve manoeuvres</h2>
          </article>
          <article class="header-text__specifics">
            <h2 class="header-text__date">01/05 <br />tot <br />25/09</h2>
            <div class="header-text__block">
              <a class="header-text__social-icons__icon" href="https://www.facebook.com/DOKgent/?fref=ts" target="_blank"><img src="assets/svg/facebook.svg" alt="Facebook" width="45" height="45"/></a>
              <a class="header-text__social-icons__icon" href="https://twitter.com/dokgent" target="_blank"><img src="assets/svg/instagram.svg" alt="Instagram" width="45" height="45"/></a>
            </div>
          </article>
        </div>
        <picture class="header-img">
          <source
            media="(max-width: 1175px)"
            srcset="assets/svg/header-img2.svg">
          <source
            media="(max-width: 690px)"
            srcset="assets/svg/header-img3.svg">
          <img
            src="assets/svg/header-img.svg"
            alt="header image">
        </picture>
        <img class="cloud cloud__left" src="assets/svg/cloud1.svg" alt="cloud"  width="200" height="100"/>
        <img class="cloud cloud__right" src="assets/svg/cloud2.svg" alt="cloud" width="200" height="100"/>
      </section>
    </header>
    <main class="home__sections">
      <section class="section section__first">
        <article class="article article__intro">
          <header class="hidden">
             <h1>Intro</h1>
          </header>
          <div>
            <h2 class="article__intro__title">ontdek <br />ontspan <br />ontplooi</h2>
            <p class="article__desc article__intro__desc">Het DOKseizoen is bijna aangebroken! <br />Dan transformeren we het werf weer tot een ontmoetingsplek, een plaats voor creatie en nieuwe initiatieven. Zorg dat je er bij bent!</p>
          </div>
        </article>
          <article class="article article__newsletter">
          <header class="hidden">
             <h1>NewsLetter</h1>
          </header>
          <div>
            <h2 class="article__title">Geen updates missen? <br />Schrijf je in op de nieuwsbrief!</h2>
            <form class="newsletter" action="index.php" method="POST" id="itemAddForm">
              <input class="newsletter__input <?php if(!empty($errors['email'])) echo ' has-error';?>" id="inputEmail" type="email" name="email" placeholder="nieuwsbrief@au.be" required/>
              <p class="error"></p>
              <input type="hidden" name="action" value="add-item" />
              <button class="article__button" type="submit" value="SCHRIJF ME IN!">SCHRIJF ME IN!</button>
            </form>
          </div>
          <span class="background-img"></span>
        </article>
      </section>
      <section class="section section__second">
        <article class="article article__start-event">
          <header class="hidden">
            <h1>Start evenement</h1>
          </header>
          <div class="start-event__title">
            <div class="start-event__intro">
              <h2 class="article__start-event__title">1 mei</h2>
              <p class="article__desc">We zetten het DOKseizoen in met activiteiten voor alle leeftijden. Hef met ons het glas op het nieuwe DOKseizoen!</p>
            </div>
            <button class="article__button article__button__programme" onclick="location.href='index.php?page=programma'">volledig programma</button><br />
            <span class="article article__programme"></span>
          </div>
        </article>
        <article class="article__upcoming">
          <header>
            <h1 class="hidden">Upcoming Events</h1>
          </header>
          <?php foreach($events as $event): ?>
              <article class="start__event <?php foreach($event['locations'] as $location): echo $location['name'];?> <?php endforeach;?>">
                  <a href="index.php?page=detail&amp;id=<?php echo $event["id"] ?>" class="event__info">
                    <div class="">
                      <p class="event__start"><?php echo $event['start'];?></p>
                      <p class="date__separator hidden">-</p>
                      <p class="event__end hidden"><?php echo $event['end']; ?></p>
                      <img class="event__img" src="assets/img/<?php echo $event['img_name'];?>.jpg" alt="<?php echo $event['img_name'];?>" width="80" height="80"/>
                    </div>
                    <div class="event__specifics">
                      <header class="event__title"><h2><?php echo $event['title']; ?></h2></header>
                      <div class="event__time">
                        <p class="event__starttime"><?php echo $event['start'];?></p>
                        <p class="time__separator">-</p>
                        <p class="event__endtime"><?php echo $event['end'];?></p>
                      </div>
                    </div>
                  </a>
                </article>
            </form>
          <? endforeach;?>
        </article>
      </section>
      <section class="section section__third">
        <article class="article article__dokbewoner">
          <div>
            <h2 class="article__title">word dokbewoner</h2>
            <p class="article__desc">Sluit je ogen, verbeeld je DOK 2017… Ziet het er ongelofelijk fantastisch uit? <br />Naar goede gewoonte zijn we op zoek naar nieuwe DOKbewoners om een frisse wind te laten waaien op de site! Stuur ons dus jouw idee op en misschoen sta je dit seizoen wel als DOKbewoner te schitteren!</p>
            <button class="article__button" href="#">word dokbewoner!</button><br />
          </div>
        </article>
      </section>
    </main>
    <footer class="sponsors">
      <img class="sponsors__sponsor" src="assets/img/biofresh.png" alt="Biofresh" width="150" height="106"/>
      <img class="sponsors__sponsor" src="assets/img/bionade.jpg" alt="Bionade" width="150" height="43"/>
      <img class="sponsors__sponsor" src="assets/img/cirq.png" alt="Cirq" width="150" height="141"/>
      <img class="sponsors__sponsor" src="assets/img/democrazy.png" alt="Democrazy" width="150" height="43"/>
      <img class="sponsors__sponsor" src="assets/img/eaulala.jpg" alt="Eaulala" width="150" height="105"/>
      <img class="sponsors__sponsor" src="assets/img/extravedettblond.jpg" alt="Extra Veddett Blond" width="150" height="112"/>
      <img class="sponsors__sponsor" src="assets/img/gent-vernieuwt.jpg" alt="Gent:vernieuwt" width="150" height="56"/>
      <img class="sponsors__sponsor" src="assets/img/pepsi.png" alt="Pepsi" width="150" height="57"/>
      <img class="sponsors__sponsor" src="assets/img/sogent.jpg" alt="sogent" width="150" height="100"/>
      <img class="sponsors__sponsor" src="assets/img/thuis-in-de-stad.jpg" alt="Thuis in de stad" width="150" height="96"/>
      <img class="sponsors__sponsor" src="assets/img/vlaamse-overheid.jpg" alt="Vlaamse Overheid" width="150" height="44"/>
    </footer>
