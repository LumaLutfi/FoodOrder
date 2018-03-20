<!DOCTYPE html>

<title>myOrder</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="cssanimation/cssanimation.css">
<script src="javaScript.js"></script>
<head>
  <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<style>
.navbar {
  margin-bottom: 0;
  border-radius: 0;
  padding-bottom: 20px;

}
.logo-img{
  float: left;
  width: 50px;
  display: inline-block;
  height: 50px;
  width: 70px;
}
</style>
<script type="text/javascript" src="cssanimation/scrolly.js"></script>
<body class="body" style="background-color:#FFA07A;">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
      <a class="navbar-header" href="#">
        <img class="logo-img" src="babylon_logo.jpg" ></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link scrolly" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrolly" href="#adultorder">Adult meal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrolly" href="#kidsorder">Kids meal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrolly" href="#beverages" >Beverages </a>
            </li>
            <li class="nav-item">
              <a class="nav-link scrolly" href="#appetizers" >Appetizers </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container" style="margin-top:90px" id="home">
    <div class="row">
      <center><img id="img" src="Image-1.jpg" class="img-fluid" alt="resposive image"></center></div>
      <div class="center-text">
        <h1 style="display-none;" class="font-color text-center">Get your dinner from Babylon Qithara<h1>
        </div>

        <form action="connect.php" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
          <div class="form-group">
            <label for="email">Email address:</lable>
              <input type="email" name="email" class="form-control" id="email" required="required"
              placeholder="Email">
              <!--  <span><?php echo $emailError; ?></span>-->
            </div>
            <div class="form-group">
              <label for="text">What is your first and last name?</lable>
                <input type="text" value="" class="form-control" id="text" name="userName"required="required"
                placeholder="First name and Last name">
                <!--<span><?php echo $nameError; ?></span>-->
              </div>
              <!--<div><img src="Menu-1.jpg"  alt="responsive image"></div>-->
              <div id="adultorder" class="container" >
                <h2 class="text-center">Adult meal (Please order from this manu)</h2>
                <table class="table table-sm table-dark">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Wraps</th>
                      <th scope="col">Regular 8"</th>
                      <th scope="col">Large 10"</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="shawarma.jpg"><img src="shawarma.jpg" style="width:40px; height:50px;"</img></a></th>
                      <td>Chicken Shawarma</td>
                      <td>$8.00</td>
                      <td>$10.00</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="beef_Shawarma.jpg"><img src="beef_Shawarma.jpg" style="width:40px; height:50px;"</img></a></th>
                      <td>Beef Shawarma</td>
                      <td>$8.00</td>
                      <td>$10.00</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="Donair.bmp"><img src="Donair.bmp" style="width:40px; height:50px;"</img></a></th>
                      <td>Beef Donair</td>
                      <td>$7.00</td>
                      <td>$9.00</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="kabab.jpg"><img src="kabab.jpg" style="width:40px; height:50px;"</img></a></th>
                      <td>Beef Kabab</td>
                      <td>$6.50</td>
                      <td>$7.50</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="f.jpg"><img src="f.jpg" style="width:40px; height:50px;"</img></a></th>
                      <td>Falafel</td>
                      <td>$6.00</td>
                      <td>$7.50</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="chickenShawarmaSalad.jpg"><img src="chickenShawarmaSalad.jpg" style="width:40px; height:50px;"</img></a></th>
                      <td>Chicken Shawarma Salad (gluten free)</td>
                      <td>$8.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="container">
              <h2 class="text-center">Adult meal (Regular size 8inch)</h2>
              <div class="row">
                <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                  <div class="form-group">
                    <label>
                      <li value="ch">Regular Chicken shawarma wrap</li>
                    </label>
                    <select class="selectpicker" name="r_chicken">
                      <!--<?php
                      //for($x="";$x<=5;$x++){
                      //echo '<option>'.$x.'</option>';
                      //}
                      ?>-->
                      <option value="0"></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                  <div class="form-group">
                    <label>
                      <li vlaue="Do">Regular Beef Donair wrap</li>
                    </label>
                    <select class="selectpicker" name="r_beefDonair">
                      <?php
                      for($x="";$x<=5;$x++){
                        echo '<option>'.$x.'</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                  <div class="form-group">
                    <label>
                      <li>Regular Beef Kabab wrap</li>
                    </label>
                    <select class="selectpicker"name="r_beefKabab">
                      <?php
                      for($x="";$x<=5;$x++){
                        echo '<option>'.$x.'</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                  <div class="form-group">
                    <label>
                      <li>Regular Falafel wrap</li>
                    </label>
                    <select class="selectpicker"name="r_falafel">
                      <?php
                      for($x="";$x<=5;$x++){
                        echo '<option>'.$x.'</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
              <div class="container">
                <div class="form-group">
                  <label for="comment">Comment:</label>
                  <textarea class="form-control" rows="5" name="r_comment"></textarea>
                </div>
                <div class="container">
                  <h2 class="text-center">Adult meal (Large size 10inch)</h2>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li value="ch">Large Chicken shawarma wrap</li>
                      </label>
                      <select class="selectpicker"name="l_chicken">
                        <?php
                        for($x="";$x<=5;$x++){
                          echo '<option>'.$x.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li vlaue="Do">Large Beef Donair wrap</li>
                      </label>
                      <select class="selectpicker" name="l_beefDonair">
                        <?php
                        for($x="";$x<=5;$x++){
                          echo '<option>'.$x.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li>Large Beef Kabab wrap</li>
                      </label>
                      <select class="selectpicker" name="l_beefKabab">
                        <?php
                        for($x="";$x<=5;$x++){
                          echo '<option>'.$x.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li>Large Falafel wrap</li>
                      </label>
                      <select class="selectpicker"name="l_falafel">
                        <?php
                        for($x="";$x<=5;$x++){
                          echo '<option>'.$x.'</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="container">
                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" name="l_comment"></textarea>
                    </div>
                  </div>
                </div>
                <div id="kidsorder"class="container">
                  <h2 class="text-center">Kids meal</h2>
                  <table class="table table-sm table-dark">
                    <tbody>
                      <tr>
                        <th scope="row"><a href="chicken_finger.jpg"><img src="chicken_finger.jpg" style="width:40px; height:50px;"</img></a></th>
                        <td>Breaded Chicken fingers 5 pieces with fries </td>
                        <td>$5.00</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="hotdog_fries.jpg"><img src="hotdog_fries.jpg" style="width:40px; height:50px;"</img></a></th>
                        <td>hotdog Sandwich with fries </td>
                        <td>$5.00</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="burger_fries.jpg"><img src="burger_fries.jpg" style="width:40px; height:50px;"</img></a></th>
                        <td>Beef Burger with fries</td>
                        <td>$6.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li>Chicken strips</li>
                      </label>
                      <select class="selectpicker" name="strips">
                        <?php
                        $x="";
                        while ($x <= 5) {
                          echo "<option>".$x."</option>";
                          $x++;
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li>Hotdog</li>
                      </label>
                      <select class="selectpicker"name="hotdog">
                        <?php
                        $x="";
                        while ($x <= 5) {
                          echo "<option>".$x."</option>";
                          $x++;
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
                    <div class="form-group">
                      <label>
                        <li>Beef Burger</li>
                      </label>
                      <select class="selectpicker"name="burger">
                        <?php
                        $x="";
                        while ($x <= 5) {
                          echo "<option>".$x."</option>";
                          $x++;
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" name="kids_comment"></textarea>
                  </div>
                </div>
                <div class="container" id="beverages">
                  <h2 class="text-center">Beverages</h2>
                  <table class="table table-sm table-dark">
                    <tbody>
                      <tr>
                        <td>Soft drinks(Pepsi, Coke, diteCoke, cokeZero, Sprite)</td>
                        <td>$1.25</td>
                      </tr>
                      <tr>
                        <td>Water</td>
                        <td>$1.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                      <!--<label>
                      <input type="checkbox" name="drinks[]" value="pepsi">Pepsi
                    </label>-->
                    <div class="container">
                    <div class="row">
                      <div class="col-md-2"><strong>Pepsi</strong></div>
                      <div class="col-md-4"><select class="selectpicker" name="pepsi">
                        <?php
                        $x="";
                        while ($x <= 5) {
                          echo "<option>".$x."</option>";
                          $x++;
                        }
                        ?>
                      </select></div>
                    </div>
                    <br>
                    <!--<label>
                    <input type="checkbox" name="drinks[]" value="coke">Coke
                  </label>-->
                  <div class="row">
                    <div class="col-md-2"><strong>Coke</strong></div>
                    <div class="col-md-4"><select class="selectpicker" name="coke">
                      <?php
                      $x="";
                      while ($x <= 5) {
                        echo "<option>".$x."</option>";
                        $x++;
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <br>
                <!--<label>
                <input type="checkbox" name="drinks[]"value="diet coke">Diet Coke
              </label>-->
              <div class="row">
                <div class="col-md-2"><strong>Dite coke</strong></div>
                <div class="col-md-4"><select class="selectpicker"name="ditecoke">
                  <?php
                  $x="";
                  while ($x <= 5) {
                    echo "<option>".$x."</option>";
                    $x++;
                  }
                  ?>
                </select>
              </div>
            </div>
            <br>
            <!--<label>
            <input type="checkbox" name="drinks[]" value="coke zero">Coke Zero</label>-->
            <div class="row">
              <div class="col-md-2"><strong>Coke zero</strong></div>
              <div class="col-md-4"><select class="selectpicker" name="cokezero">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
          </div>
          <br>
          <!--<label>
          <input type="checkbox" name="drinks[]"value="sprite" >Sprite
        </label>-->
        <div class="row">
          <div class="col-md-2"><strong>Sprite</strong></div>
          <div class="col-md-4"><select class="selectpicker"name="sprite">
            <option></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
      </div>
    </div>
    <br>
<div class="container" id="appetizers">
  <h2 class="text-center">Appetizers</h2>
  <table class="table table-sm table-dark">
    <tbody>
      <tr>
        <td>Tebule salad 16oz</td>
        <td>$4.00</td>
      </tr>
      <tr>
        <td>Hummus 16oz</td>
        <td>$4.00</td>
      </tr>
      <tr>
        <td>Fattoush salad 20oz</td>
        <td>$6.00</td>
      </tr>
      <tr>
        <td>Tzatziki 16oz</td>
        <td>$4.00</td>
      </tr>
    </tbody>
  </table>
  <strong>Tabule Salad</strong><select class="selectpicker" name="cokezero">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
  <strong>Hummus</strong><select class="selectpicker" name="cokezero">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
  <strong>Fattoush Salad</strong><select class="selectpicker" name="cokezero">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
  <strong>Tzatziki</strong><select class="selectpicker" name="cokezero">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
</div>
</br>
</br>
</br>
<div class="container">
<div class="row">
  <div class="col-md-6" style="width:100%;margin-bottom: 10px;">
    <div class="form-group">
      <!--<input type="submit" id="submit" class="form-control" value="Submit">-->
      <div><input type="submit" name="btn" class="btn btn-success btn-lg" value="submit">

        <input type="reset" class="btn btn-success btn-lg"  value="reset"/></div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- <?php
include_once("mainPage.php");
?>  -->
</body>
</html>
