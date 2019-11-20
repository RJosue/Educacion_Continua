<div class="container follow-us-container">
    <div class="text-center follow-us">
        Follow Us
    </div>
    <br />
    <div class="text-center">
        <a class="fa fa-facebook social-icon" href="#" target="_blank"></a>
        <a class="fa fa-twitter social-icon" href="#" target="_blank"></a>
        <a class="fa fa-linkedin social-icon" href="#" target="_blank"></a>
        <a class="fa fa-google-plus social-icon" href="#" target="_blank"></a>
    </div>

    <img src="..\img\agile.jpg" class="rounded float-left">
<img src="../img/agile.jpg" class="rounded float-right">
</div>

<style>
    .follow-us-container
    {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .follow-us
    {
        font-size: 32px;
        color: #777;
    }

    .social-icon
    {
        padding-top: 6px;
        font-size: 16px;
        text-align: center;
        width: 32px;
        height: 32px;
        border: 2px solid #777;
        border-radius: 50%;
        color: #777;
        margin: 5px;
    }

    a.social-icon:hover, a.social-icon:active, a.social-icon:focus
    {
        text-decoration: none;
        color: #434343;
        border-color: #434343;
    }
</style>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script>

    $("#con").click(function () {
      $(".dropdown-content").hide();
    });

  $("#dropdwn p").click( function (){
    //   $(".dropdown-content").show();
    //   alert("Hola");
      if($(".dropdown-content").is(":visible")== true){
        $(".dropdown-content").hide();
      }
      else{
        $(".dropdown-content").show();
      }
  });
  
  

</script>
</body>
</html>