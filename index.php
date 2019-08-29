<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button"></a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">ATN company</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

                  <?php 
                    include("catalogue.php");
                ?>

                <?php
                echo "<table >";
                
                    
                    echo "<tr>";
                    foreach ($resultSet as $row)
                    {
                        for($i=1;$i<=5;$i++)
                        {
                            echo "<th>";
                                if($row!=false)
                                {
                                    $ID = $row ['id'];
                                    $link="?direct=show_product&id=".$ID;        
                                    echo "<a href='$link' class='w3-button w3-large w3-border'>" ;
                                    $Name = $row ['cname'];                                               
                                    echo "$Name";
                                }
                                 else 
                                {
                                    echo "&nbsp;";
                                }
                            echo "</th>";

                            if($i!=5)
                            {
                                $row = $stmt->fetch();
                            }
                        }
                    }
                    echo "</tr>";
                
                echo "</table>";
                ?>
            </div>
        </div>
    </div>
    
  <!-- Product container-->  
    <div class="w3-bottombar">
        <?php 
            include("direction.php");
        ?>

        <?php
        echo "<table>";
            foreach ($resultSet as $row) 
            {    
                echo "<tr>";
                    for($i=1;$i<=3;$i++)
                    {
                        echo "<td align='center' width='328px' height='228px' >";
                            if($row!=false)
                            {
                                $iId = $row['iid'];
                                $iName = $row['iname'];
                                $iDescription = $row['idescription'];
                                $iPrice = $row['iprice'];
                                $iStatus = $row['istatus'];
                                $iSize = $row['isize'];
                                $iImage = $row['iimage'];

                                $link_image = "./images/item/$iImage";
                                //$link_detail="?direct=product_detail&id=".$iId;

                                echo "<a href='$link_detail'>";
                                    echo "<img src='$link_image' width='200px'>";
                                echo "</a>";
                                echo "<br>";  

                                echo "<a href='$link_detail'>";
                                    echo $iName;
                                echo "</a>";
                                echo "<br>";  

                                echo "Price: ".$iPrice," $";
                                echo "<br>";
                            }
                             else 
                            {
                                echo "&nbsp;";
                            }
                        echo "</td>";
                        if($i!=3)
                        {
                            $row = $stmt->fetch();
                        }
                    }
                echo "</tr>";
            }
        echo "</table>";
        ?>        
    </div> 
    <!--End of Product container-->

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About ATN toy company</h3><br>
    <img src="/images/item/footer 1.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>Figure Toy paradise!</b></h4>
      <h6><i>With my company, We raise</i></h6>
      <p>we see that companies are experiencing major problems is the amount of data of each store, the total amount of the interest rate per year is $ 500,000 storeship</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>ATN is a company that sells big toys in Vietnam and has many chain stores are sold and expanded across the country.</p>
    </div>
  
    <div class="w3-third">

      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Marvel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DC</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Toy</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Iron Man</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Batman</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Captian America</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"> Black Window</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Superman</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Thanos</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Iron Pariot</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Spider Man</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ant Man</span>
        <
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
