<?php
  session_start();
?>
<!DOCTYPE html>
<head>
  <title>My Own Library</title>
  <meta charset="utf-8" />
  <link href="css/stil2.css" rel="stylesheet" type="text/css" />
  <script src="js/unelte.js" type="text/javascript"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images2/xicon.png" />
</head>
<body id="page1">

    <div id="main">
      <div id="header">
        <div class="row-1"></div>
        <div class="row-2" id="myDIV">
          <ul>
            <li><a href="index.php" class="btn"><br/>Acasă</a></li>
          </ul>
        </div>
      </div>

      <div id="content">
        <div class="box">
              <div class="inner2">
                <?php
                  $xmlDoc=new DOMDocument();
                  $xmlDoc->load("xml/carti.xml");
                  $element=$xmlDoc->getElementsByTagName('carte');
                  $idBook=$_GET["idBook"];

                  if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['idBook'])){

                    $book_name="";
                    for($i=0; $i<($element->length); $i++) {

                      $id=$element->item($i)->getElementsByTagName('id');

                        if ($id->item(0)->nodeValue==$idBook) {

                          $book_id=$element->item($i)->getElementsByTagName('id')->item(0)->nodeValue;
                          $book_name=$element->item($i)->getElementsByTagName('title')->item(0)->nodeValue;
                          $book_src = $element->item($i)->getElementsByTagName('src')->item(0)->nodeValue;
                          $book_descriere=$element->item($i)->getElementsByTagName('descriere')->item(0)->nodeValue;
                          $book_an=$element->item($i)->getElementsByTagName('anul')->item(0)->nodeValue;
                          $book_limba=$element->item($i)->getElementsByTagName('limba')->item(0)->nodeValue;
                          $book_editura=$element->item($i)->getElementsByTagName('editura')->item(0)->nodeValue;

                          ?>
                          <div class="img-box1 alt"> <img src="<?php echo $book_src ?>" width="198px" height ="282px" alt="">
                          <div class="book-title">
                            <?php echo $book_name ?></h3>
                            <br /><br />
                          </div>
                            <div>
                                    <ol>

                                      <li><h5>Anul aparitiei: <span><?php echo $book_an ?></span></h5></li>
                                      <li><h5>Editura: <span><?php echo $book_editura ?></span></h5></li>
                                      <li><h5>Limba Originala: <span><?php echo $book_limba ?></span></h5></li>

                                   </ol>
                                   <div class="descriere" ><p>&emsp;<?php echo $book_descriere ?></p></div>
                            </div>
                          </div>
                          <?php
                              }
                            }
                          }
                    ?>
              </div>
            </div>
          </div>
          <div id="footer">
      <div class="left">
         <div class="right">
           <div class="footerlink">
             <p class="lf"  color="white" >Copyright &copy; 2019 <a href="#" >My own Library</a></p></br>

             <p><img id = "banner" src="images2/footer_book.png" height="100px" width="120px" alt="Banner"/></p>
             <p class="rf">Denis C.</p>

           </div>
         </div>
       </div>
      </div>

        </div>
      </div>
</body>
</html>
