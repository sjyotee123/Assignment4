<body>
<nav class="navbar navbar-inverse" id="header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li class="#"><a href="<?php echo base_url(); ?>index.php/user/profile">Home</a></li>
        <li class="#"><a href="<?php echo base_url(); ?>index.php/user/profile">About Us</a></li>
        <li class="#"><a href="<?php echo base_url(); ?>index.php/user/profile">Blog</a></li>
        <li class="#"><a href="<?php echo base_url(); ?>index.php/user/home">Student's Marks</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

 

<?php if(isset($_SESSION['success'])) { ?>
<p class="alert alert-success"> <?php echo $_SESSION['success']; ?>


<?php
}
?>
 

 
        <li><a href="#"> Hello, <?php echo $_SESSION['username'];?></a></li>
        <li><a href="<?php echo base_url(); ?>index.php/auth/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
     

</p>
</ul>

</div>
     
    </div>
  </div>
</nav>