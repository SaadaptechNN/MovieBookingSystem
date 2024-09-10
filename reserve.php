<!-- session_start -->

<?php
include('connection.php');
session_start();
if (isset($_SESSION['username'])) 
{
$movie = $_POST["movies"];
$sqli = "Select * from reserve_data where movie = '$movie'";
$cart = mysqli_query($con, $sqli);
if(mysqli_num_rows($cart) > 0)
{
echo "<script> alert('Movie Ticket Already Reserved')
window.location.href = 'offers.php';
</script>";

}
else{
  echo "<script> alert('Movie Ticket reservation In Process')</script>";


?>
<!-- session_end -->
<!-- doc_start -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="bg-dark">
<!-- plugins_start -->
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn02.jotfor.ms/static/prototype.forms.js?v=3.3.55140" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/static/jotform.forms.js?v=3.3.55140" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/js/vendor/maskedinput_5.0.9.min.js?v=3.3.55140" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/s/umd/b9b6a6e3e71/for-form-branding-footer.js?v=3.3.55140" type="text/javascript" defer></script>
<script src="https://cdn02.jotfor.ms/js/vendor/smoothscroll.min.js?v=3.3.55140" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/errorNavigation.js?v=3.3.55140" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=bb797ef"/>
<style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.55140&themeRevisionID=5f6b0033c1d59a6d621c3b01"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.55140" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.55140" />
<!-- plugins_end -->

<!-- style_start -->

<style type="text/css" id="form-designer-style">
  



  
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
      border: 1px solid transparent;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/ivy/form_files/4e8b87c5-ab89-4d93-befa-88f4f214eb9d.5ca1190cd71e12.18707275%20(1).5f6b00e14ef9c7.43249618.png");
      display: inline-block;
      height: 200px;
      position: absolute;
      background-size: 200px 200px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all { margin-top: 220px }
    .form-all:before {
      top: -210px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-all {
  top:0 !important;
}
    /* Injected CSS Code */

    #id_2{

      margin-top: -35px;
    }

    
</style>
<!-- style_end -->
<!-- query_start -->

<?php
include('connection.php');
$movie = $_POST["movies"];


$sql = "SELECT * from movie_data where movie = '$movie'";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {


  while($row = $result->fetch_assoc()) {
  ?> 
<!-- query_end -->
<!-- form_start -->

<form class="jotform-form"   method="post"  id="241902010523440"  autocomplete="on" style="height: 20000px;">
  <div id="formCoverLogo" style="margin-bottom:10px" class="form-cover-wrapper form-has-cover form-page-cover-image-align-center">
  <style>
    .id{
      color: white;
      font-weight: bolder;
      font-size: x-large;
    }
  </style>
    <div class="form-page-cover-image-wrapper id" >MOVIELAND</div>
  </div>
  <div role="main" class="form-all" >
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" style="text-align: center;" data-component="header">Book Your Movie</h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3" aria-hidden="false"> Movie  </label>
        <div id="cid_3" class="form-input-wide" data-layout="half"> <input placeholder="Movie Name" readonly  type="text" id="input_3" name="movies" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_3" value="  <?php echo $row['movie']?>" /> </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_8"><label class="form-label form-label-top form-label-auto" id="label_8" for="first_8" aria-hidden="false"> Full Name </label>
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" placeholder="Name" id="first_8" name="name" class="form-textbox" data-defaultvalue=""  size="10" data-component="first" aria-labelledby="label_8 sublabel_8_first" value="" /></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false"> Seat Number </label>
        <div id="cid_7" class="form-input-wide" data-layout="half"> <input type="text" readonly id="input_7" name="seat_number" data-type="input-number" class=" form-number-input form-textbox" style="width:310px" size="310" placeholder="max: 100" data-component="number" aria-labelledby="label_7" step="any" value="45" /> </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_4"><label class="form-label form-label-top form-label-auto" id="label_4" for="lite_mode_4" aria-hidden="false"> Date </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">

            <div><span class="form-sub-label-container" style="vertical-align:top"><input type="tel" readonly style="width: 170px;" class="form-textbox validate[limitDate] form" id="month_4" name="date" size="2" data-maxlength="2" data-age="" maxLength="2" value="  <?php echo $row['date']?>" autoComplete="off" aria-labelledby="label_4 sublabel_4_month" /></span>
          </div>
        </div>
      </li>
      
    <li class="form-line" data-type="control_time" id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_hourSelect" aria-hidden="false"> Time  </label>

    <div id="cid_5" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div class="time-wrapper"><span class="form-sub-label-container hasAMPM" style="vertical-align:top"><input type="text" readonly style="width: 130px;" class="time-dropdown form-textbox validate[time]" id="input_5_timeInput" name="time" placeholder="HH : MM" aria-labelledby="label_5 sublabel_5_hour" data-mask="hh:MM" value="  <?php echo $row['time']?>" autoComplete="off" data-version="v2" /><input type="hidden" class="form-hidden-time" id="input_5_hourSelect" name="q5_time[hourSelect]" /><input type="hidden" class="form-hidden-time" id="input_5_minuteSelect" name="q5_time[minuteSelect]" /><label data-seperate-translate="true" class="form-sub-label" for="input_5_timeInput" id="sublabel_5_hour" style="min-height:13px"></label></span></div>
            
           
           
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3" aria-hidden="false"> Price  </label>
        <div id="cid_3" class="form-input-wide" data-layout="half"> <input placeholder="Movie Name" readonly  type="text" id="input_3 pri" name="price" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_3" value="  <?php echo $row['price']?>" /> </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3" aria-hidden="false"> Cinema</label>
        <div id="cid_3" class="form-input-wide" data-layout="half"> <input placeholder="Movie Name" readonly  type="text" id="input_3" name="cinema" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_3" value="  <?php echo $row['cinema']?>" /> </div>
      </li>

      
      <li class="form-line" data-type="control_time" id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_hourSelect" aria-hidden="false"> Classes </label>

<div id="cid_5" class="form-input-wide" data-layout="half">
      <div data-wrapper-react="true">
        
        
       
        <div class="time-wrapper"><span class="form-sub-label-container" style="vertical-align:top"><select class="time-dropdown form-dropdown" id="input_5_ampm val" onchange="incone()" name="class" data-component="time-ampm" aria-labelledby="label_5 sublabel_5_ampm" autoComplete="off">

              <option >Silver</option>
              <option >Platinum</option>
              <option >Premium </option>
              

            </select><label class="form-sub-label" for="input_5_ampm" id="sublabel_5_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap">AM/PM Option</label></span></div>
      </div>
    </div>
  </li>
     


  
     
      <li class="form-line" data-type="control_button" id="id_2" >
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   "><button id="input_2" type="submit" name="sub" class="form-submit-button submit-button jf-form-buttons  hill" data-component="button" data-content="">Submit</button></div>
        </div>
      </li>
     
    </ul>
  </div>
  

</form>
<!-- form_end -->
<!-- query_start -->

<?php
  }
}
}
?>
<!-- query_end -->

</body>
</html>
<!-- doc_end -->

<!-- function_start -->

<script>

function incone() 
{
  var value = document.getElementById("val").value;
 document.write(value);

  var price = document.getElementById("pri").value;
  
   if(value == Silver)
   {
     const total = price + 14;
     document.getElementById("pri").innerHTML.value = + total;
   }
}

</script>
<!-- function_end -->




                         

                         <!-- connection_start -->
<?php

include("connection.php");

?>
                         <!-- connection_end -->

                               <!-- FOR INSERTNG DATA INTO DATABASE_start-->
<?php
        
      
           
         
         
if (isset($_POST["sub"])) {
 
      $movies = $_POST["movies"];
      $name = $_POST["name"];  
      $price = $_POST["price"];
      $time = $_POST["time"];
      $date = $_POST["date"];
      $cinema = $_POST["cinema"];
       $class = $_POST["class"];
      $seat_number = $_POST["seat_number"];
    


       


               $insert = "insert into reserve_data(name, seat_number, movie, date, time, price, cinema, class) values( '$name', '$seat_number', '$movie', '$date', '$time', '$price', '$cinema', '$class')";
               $run = mysqli_query($con, $insert);

                              if ($run) 
                             {
                             
                             
                              echo "<script> alert('Reservation Succesful') 
                              window.location.href = 'index.php';
                           
                              </script>" ;
                            }
                           
                           else
                           {
                              echo "<script> alert('Reservation Unsuccesful Please Try Again') 
                              window.location.href = 'offers.php';
                              
                              </script>" ;
                           }
                             

}   

?>
<!-- FOR INSERTNG DATA INTO DATABASE_end-->
                               <!-- session_start-->

<?php

}
else
{

  echo "<script> alert('Please Login First')
  window.location.href = 'Login_form.php';
  </script>";
   
}
?>
                               <!-- session_end-->
                               


