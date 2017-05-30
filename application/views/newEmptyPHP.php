<?php ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<html>
<div id="mycarousel" class="carousel " data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url()?>assets2/images/3.jpg" style="width:2000px;" data-color="lightblue" alt="First Image">
      <div class="carousel-caption">
        <h3>First Image!</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>assets2/meetingRoom/5N.jpg" style="width:2000px;" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption">
        <h3>Second Image</h3>
      </div>
    </div>
	<div class="item">
      <img src="<?php echo base_url()?>assets2/meetingRoom/4.jpg" style="width:2000px;" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption">
        <h3>Third Image</h3>
      </div>
    </div>
	
	
    <!-- more slides here -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
