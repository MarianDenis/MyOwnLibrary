<?php
  session_start();
?>


<div id="content">
  <div class="line-hor"></div>
  <div class="box">
        <div class="inner">
          <h3>Prezentare</h3>
          <p class="detalii" >&emsp;"Cărţile care te ajută cel mai mult sunt cele care te fac să gândeşti cel mai mult. Cel mai greu înveţi când citeşti cărţi uşoare; însă o film extraordinară care vine de la un gânditor remarcabil este o corabie a gândirii, plină la refuz cu adevăr şi frumuseţe." – Theodore Parker</p>
          <p class="detalii" >Mai jos se afla prezentarea cartilor</b></p>
        </div>
      </div>
    <div class="box2_book">

        <div class="book-title">
          <?php echo $book_name ?></h3>
        </div>
            </br></br>
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colectie de carti</h3>

            <ul class="list">

              <div class="content_book">
             <?php

                $xmlDoc=new DOMDocument();
                $xmlDoc->load("xml/carti.xml");
                $element=$xmlDoc->getElementsByTagName('carte');
                for($i=0; $i<($element->length); $i++) {
                    $index=$i+1;
                    echo "<span class='inside'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $index/$element->length </span>";


                    $book_id=$element->item($i)->getElementsByTagName('id')->item(0)->nodeValue;
                    $book_name=$element->item($i)->getElementsByTagName('title')->item(0)->nodeValue;
                    $book_src = $element->item($i)->getElementsByTagName('src')->item(0)->nodeValue;
                    $book_descriere=$element->item($i)->getElementsByTagName('descriere')->item(0)->nodeValue;

                    ?>
                       <div class="mySlid">
                          <li>
                            <img src="<?php echo $book_src ?>" width="198" height="287" alt="" />
                            <h5><span> <?php echo $book_name ?> </span></h5>
                            <br /> &emsp;<?php echo $book_descriere ?>
                            <div class="wrapper"><a method='get' href='book.php?idBook=<?php echo $book_id?> ' class="link2"><span><span>Afla Mai Multe</span></span></a></div>
                          </li>
                        </div>
                      <br />
                      <?php

                   }
                       ?>
                </div>

                <br>
            </div>
              <div class="suport"> </br ></div>
            </ul>

  </div>
</div>
